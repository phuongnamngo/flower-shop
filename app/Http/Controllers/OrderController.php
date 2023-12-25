<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($orderId)
    {
    
        // $order = Order::find($orderId);
        $order = Order::leftJoin('users', 'users.id' , '=' , 'orders.user_id')
            ->leftJoin('orderitem', 'orderitem.order_id' , '=' , 'orders.id')
            ->select('users.name as user_name', 'users.email as user_email', 'orderitem.*', 'orders.*')
            ->where('orders.id', $orderId)->first();
        
        return view('main.payment.index', compact('order'));
    }
}
