<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        return view('main.checkout.index');
    }
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('main.checkout.index', compact('cart'));
    }
}
