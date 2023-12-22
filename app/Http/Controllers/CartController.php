<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');

        $cart = $request->session()->get('cart', []);

        $cart[] = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
        ];
        dd($cart);
        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart');
    }


    public function viewCart()
    {

        $cart = session()->get('cart', []);

        return view('main.cart.view', compact('cart'));
    }
}
