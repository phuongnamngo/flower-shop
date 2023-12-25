<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
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
    
    public function store(Request $request)
    {
        $order = Order::create([
            'user_id' => '1',
            'total_price' => '2,000',
            'shipping_address' => 'test',
            'billing_address' => 'test',
            'payment_method' => 'delivery',
            'status' => 'pending',
       
        ]);

        $cart = session()->get('cart', []);
        // Create order items
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Process payment if applicable

        // Clear cart session
        session()->forget('cart');

        // Redirect to order confirmation page
        return redirect()->route('order.show', $order->id);
    }
    
}
