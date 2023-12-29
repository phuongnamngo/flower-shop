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
        $user = auth()->user();
        $order = Order::create([
            'user_id' =>  $user->id,
            'total_price' => $request->total_price,
            'shipping_address' => $request->shipping_address,
            'billing_address' => $request->billing_address,
            'payment_method' => $request->payment_method,
            'status' => 0,
       
        ]);

        $cart = session()->get('cart', []);
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }
        session()->forget('cart');
        return redirect()->route('order.show', $order->id);
    }
    private function calculateTotal($cart)
    {
        $total = 0;

        foreach ($cart as $item) {
        
            $total += str_replace(',', '', $item['price']) *$item['quantity'];
        }
        return $total;
    }
  
}
