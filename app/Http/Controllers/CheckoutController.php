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
        return view('main.checkout.index', compact('cart'));
    }

    public function store(Request $request)
    {

        $cart = session()->get('cart', []);
        $user = auth()->user();
        $jsonResult = '';
        $order_Id = $this->uid(); // Mã đơn hàng
        if ($request->payment_method == 'Momo') {
            foreach ($cart as $itemCart) {
                $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
                $partnerCode = 'MOMOBKUN20180529';
                $accessKey = 'klm05TvNBzhg7h7j';
                $serectkey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                $orderId = $order_Id; // Mã đơn hàng
                $orderInfo = 'Thanh toán qua MoMo';
                $amount = $itemCart['price'];
                $ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
                $redirectUrl = url('/momo/returnUrl');
                $extraData = "";
                $requestId = time() . "";
                $requestType = "payWithATM";
                //before sign HMAC SHA256 signature
                $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                $signature = hash_hmac("sha256", $rawHash, $serectkey);
                $data = array(
                    'partnerCode' => $partnerCode,
                    'partnerName' => "Test",
                    "storeId" => "MomoTestStore",
                    'requestId' => $requestId,
                    'amount' => $amount,
                    'orderId' => $orderId,
                    'orderInfo' => $orderInfo,
                    'redirectUrl' => $redirectUrl,
                    'ipnUrl' => $ipnUrl,
                    'lang' => 'vi',
                    'extraData' => $extraData,
                    'requestType' => $requestType,
                    'signature' => $signature
                );
                $result = $this->execPostRequest($endpoint, json_encode($data));
                $jsonResult = json_decode($result, true);  // decode json
            }
        }
        $order = Order::create([
            'id_order_momo' => $order_Id,
            'user_id' =>  $user->id,
            'total_price' => $request->total_price,
            'shipping_address' => $request->shipping_address,
            'billing_address' => $request->billing_address,
            'payment_method' => $request->radio ?? $request->payment_method,
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
        // Clear cart session
        session()->forget('cart');
        if ($request->payment_method == 'Momo') {
            return redirect()->to($jsonResult['payUrl']);
        } else {
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
}
