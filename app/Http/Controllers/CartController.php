<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {
        $cart = session()->get('cart', []);

        return view('main.cart.view', compact('cart'));
    }
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $productName = $request->input('product_name');
        $productImg = $request->input('product_img');
        $productPrice = $request->input('product_price');
        $productQuantity = $request->input('product_quantity');

        $cart = $request->session()->get('cart', []);
    
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $productQuantity;          
        } else {
            $cart[$productId] = [
                'id' => $productId,
                'name' => $productName,
                'img' => $productImg,
                'quantity' => $productQuantity,
                'price' => $productPrice,
            ];
        }
   
            // $cart[$productId]['price'] = $cart[$productId]['quantity'] * $productPrice;
            $cart[$productId]['price'] = (float) str_replace(',', '', $cart[$productId]['quantity']) * str_replace(',','', $productPrice);

       
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart');
    }
    public function removeFromCart(Product $product)
    {
        $productId = $product->id;
      
        $cart = session()->get('cart', []);
      

        if (isset($cart[$productId])) {
          
            unset($cart[$productId]);
            session(['cart' => $cart]);
    
            return redirect()->route('cart.view')->with('success', 'Product removed from cart successfully');
        }
        
        return redirect()->route('cart.view')->with('error', 'Product not found in cart');
    }
    public function updateCart(Request $request)
    {
        $productId = $request->input('productId');
   
        $quantity = $request->input('quantity');

        return response()->json(['success' => true]);
    }
    
}
