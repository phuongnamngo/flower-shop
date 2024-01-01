<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        return view('main.checkout.index');
    }
    public function viewCheckout()
    {
        $cart = session()->get('cart', []);
        $total = $this->calculateTotal($cart);

        return view('main.checkout.index', compact('cart', 'total'));
    }

    public function store(Request $request)
    {
        $cart = session()->get('cart', []);
        $user = auth()->user();
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
            $amount = "" . $this->calculateTotal($cart) . "";
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
        $order = Order::create([
            'id_order_momo' => $order_Id,
            'user_id' =>  $user->id,
            'total_price' => $request->total_price,
            'shipping_address' => $request->shipping_address,
            'billing_address' => $request->billing_address,
            'payment_method' => $request->payment_method,
            'status' => 0,
        ]);
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }
        if ($request->payment_method == 'Momo') {
            return redirect()->to($jsonResult['payUrl']);
        } else {
            session()->forget('cart');
            return redirect()->route('order.show', $order->id);
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
    private function calculateTotal($cart)
    {
        $total = 0;

        foreach ($cart as $item) {

            $total += str_replace(',', '', $item['price']) * $item['quantity'];
        }
        return $total;
    }
}
