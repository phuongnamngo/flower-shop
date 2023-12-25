<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrder()
    {
        $order = session()->get('cart', []);
        dd($order);
        return view('main.payment.index', compact('order'));
    }
}
