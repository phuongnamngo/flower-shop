<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($orderId)
    {
        // $order = Order::all();
        // return view('main.payment.index', compact('order'));
        $order = Order::find($orderId);
        // Pass order information to the "Thank You" view
        return view('main.payment.index', compact('order'));
    }
}
