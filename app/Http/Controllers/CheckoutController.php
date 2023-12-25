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
        $user = auth()->user();
       
        $order = Order::create([
            'user_id' =>  $user->id,
            'total_price' => $request->total_price,
            'shipping_address' => $request->shipping_address,
            'billing_address' => $request->billing_address,
            'payment_method' => 'delivery',
            'status' => 0,
       
        ]);

        $cart = session()->get('cart', []);
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

     
        return redirect()->route('order.show', $order->id);
    }
    
}
