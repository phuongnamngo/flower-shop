<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

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
    public function process(Request $request)
    {
   
        $customer_name = $request->input('customer_name');
        $customer_email = $request->input('customer_email');
        $customer_phone = $request->input('customer_phone');
        $customer_address = $request->input('customer_address');
        $order_details = $request->input('order_details');
        // $cart = $request->session()->get('cart', []);
        // $cart[] = [
        //     'customer_name' => $customer_name,
        //     'customer_email' => $customer_email,
        //     'customer_phone' => $customer_phone,
        //     'customer_address' => $customer_address,
        //     'order_details' => $order_details
        // ];
        // $request->validate([
        //     'customer_name' => 'required|string|max:255',
        //     'customer_email' => 'required|email|max:255',
        // ]);
        // $productName =  $cart['name'];
        // $productName = session(['cart', 'name']);
        // dd($productName);
        // $productImg = session('product_img', '');

        // Lưu đơn hàng vào cơ sở dữ liệu
        // $order = new Order([
        //     'customer_name' => $request->input('customer_name'),
        //     'customer_email' => $request->input('customer_email'),
        //     'customer_phone' =>$request->input('customer_phone'),
        //     'customer_address' => $request->input('customer_address'),
        //     'order_details' => $request->input('order_details'),
        //     'product_name' => '2',
        //     'product_img' => '2',
        //     'product_quantity'=>'3',
        //     'total_price'=>'2'
        // ]);
        // session(['cart' => $cart]);
    
        // $order->save();
        // request()->session()->flush();
        return view('main.payment.index');
    }
}
