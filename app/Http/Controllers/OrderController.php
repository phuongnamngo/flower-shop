<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function show($orderId)
    {
        $order = Order::leftJoin('users', 'users.id' , '=' , 'orders.user_id')
            ->leftJoin('orderitem', 'orderitem.order_id' , '=' , 'orders.id')
            ->select('users.name as user_name', 'users.email as user_email', 'orderitem.*', 'orders.*')
            ->where('orders.id', $orderId)->get();
 
        return view('main.payment.index', compact('order'));
    }
    public function getAllOrder()
    {
        $user = Auth::user();
        $orderHistory = $user->orders;
        
        return view('main.orderHistory.index',compact('orderHistory'));
    }
}
