<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ReturnUrlModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function show($orderId)
    {
        $user = '';
        $orderItem = OrderItem::leftJoin('orders', 'orders.id', '=', 'orderItem.order_id')
            ->leftJoin('product', 'product.id', '=', 'orderItem.product_id')
            ->select('orders.total_price', 'orders.id as idOrder', 'orders.user_id', 'orders.shipping_address', 'orders.status', 'product.name as product_name', 'orderItem.*')
            ->where('orderItem.order_id', $orderId)
            ->first();
        $user = User::where('id', $orderItem->user_id)->first();
        return view('main.payment.index', compact('orderItem', 'user'));
    }
    public function getAllOrder()
    {
        $user = Auth::user();

        $orderHistory = Order::leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->leftJoin('return_url_momo', 'return_url_momo.orderId', '=', 'orders.id_order_momo')
            ->select('users.id as userID', 'return_url_momo.*', 'orders.*')
            ->where('users.id', $user->id)->get();
        // dd( $orderHistory->toArray());   
        return view('main.orderHistory.index', compact('orderHistory'));
    }
    public function edit($id)
    {

        $user = '';
        $orderItem = OrderItem::leftJoin('orders', 'orders.id', '=', 'orderItem.order_id')
            ->leftJoin('product', 'product.id', '=', 'orderItem.product_id')
            ->select('orders.total_price', 'orders.billing_address', 'orders.id as idOrder', 'orders.user_id', 'orders.shipping_address', 'orders.status', 'product.name as product_name', 'orderItem.*')
            ->where('orderItem.order_id', $id)
            ->get();
        return view('main.orders.edit', compact('orderItem'));
    }
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $jsonResult = '';
        $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
        $notifyurl = "http://localhost:8000/atm/ipn_momo.php";
        $order_Id = $this->uid();
        // Lưu ý: link notifyUrl không phải là dạng localhost
        $bankCode = "SML";
        if ($request->payment_method == 'Momo') {

            $partnerCode = 'MOMOBKUN20180529';
            $accessKey = 'klm05TvNBzhg7h7j';
            $serectkey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
            $orderid = $order_Id;
            $orderInfo = 'Thanh toán qua MoMo';
            $amount = "" . $order->total_price . "";
            $bankCode = 'SML';
            $returnUrl = url('/momo/returnUrl');
            $requestId = time() . "";
            $requestType = "payWithMoMoATM";
            $extraData = "";
            //before sign HMAC SHA256 signature
            $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&bankCode=" . $bankCode . "&amount=" . $amount . "&orderId=" . $orderid . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyurl . "&extraData=" . $extraData . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $serectkey);
            $data =  array(
                'partnerCode' => $partnerCode,
                'accessKey' => $accessKey,
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderid,
                'orderInfo' => $orderInfo,
                'returnUrl' => $returnUrl,
                'bankCode' => $bankCode,
                'notifyUrl' => $notifyurl,
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            );
            $result = $this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);
        }

        if ($order->status == 1) {
            return redirect()->route('orders.edit', $id)
                ->with('error', 'Không thể sửa đơn hàng có trạng thái là 1.');
        }
        $order->update([
            'id_order_momo' => $order_Id,
            'shipping_address' => $request->input('shipping_address'),
            'billing_address' => $request->input('billing_address'),
            'payment_method' => $request->input('payment_method'),
        ]);
        if ($request->payment_method == 'Momo') {
            return redirect()->to($jsonResult['payUrl']);
        } else {
            return redirect()->route('order.history')
                ->with('success', 'Update Successfuly.');
        }
    }
    function uid($length = 20)
    {
        $bytes = random_bytes($length);
        $random = bin2hex($bytes);
        return strtoupper(substr($random, 0, $length));
    }
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function viewOrderDetails($id)
    {
        $user = '';
        $orderItem = OrderItem::leftJoin('orders', 'orders.id', '=', 'orderItem.order_id')
            ->leftJoin('product', 'product.id', '=', 'orderItem.product_id')
            ->select('orders.total_price', 'orders.payment_method', 'orders.id_order_momo', 'orders.billing_address', 'orders.id as idOrder', 'orders.user_id', 'orders.shipping_address', 'orders.status', 'product.name as product_name', 'orderItem.*')
            ->where('orderItem.order_id', $id)
            ->get();
        foreach ($orderItem as $item) {
            $user = User::where('id', $item->user_id)->first();
            $momoItem = ReturnUrlModel::where('orderId', $item->id_order_momo)->first();
        }
        return view('main.orders.view-order-detail', compact('orderItem', 'user', 'momoItem'));
    }
}
