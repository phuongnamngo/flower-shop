<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        $total = $this->calculateTotal($cart);
        // dd($cart);
        return view('main.cart.view', compact('cart', 'total'));
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
            // $cart[$productId]['price'] = (float) str_replace(',', '', $cart[$productId]['quantity']) * str_replace(',','', $productPrice);

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
    public function increaseQuantity($productId)
    {
        // Retrieve the cart from the session or create an empty array
        $cart = session('cart', []);

        // Check if the product is in the cart
        if (array_key_exists($productId, $cart)) {
            // Increase the quantity
            $cart[$productId]++;
        }

        // Store the updated cart in the session
        session(['cart' => $cart]);

        // Redirect back or to the cart page
        return redirect()->route('cart.index');
    }

    public function decreaseQuantity($productId)
    {
        // Retrieve the cart from the session or create an empty array
        $cart = session('cart', []);

        // Check if the product is in the cart and has a quantity greater than 1
        if (array_key_exists($productId, $cart) && $cart[$productId] > 1) {
            // Decrease the quantity
            $cart[$productId]--;
        }

        // Store the updated cart in the session
        session(['cart' => $cart]);

        // Redirect back or to the cart page
        return redirect()->route('cart.index');
    }
    // Trong controller hoặc nơi khác tùy thuộc vào cấu trúc của ứng dụng Laravel của bạn
public function updateCart(Request $request, $productId)
{
    $action = $request->input('action');
    $cart = session('cart', []);

    if ($action == 'increase') {
        // Tăng số lượng sản phẩm
        $cart[$productId]['quantity']++;
    } elseif ($action == 'decrease') {
        // Giảm số lượng sản phẩm
        if ($cart[$productId]['quantity'] > 1) {
            $cart[$productId]['quantity']--;
        }
    }
    $total = $this->calculateTotal($cart);
    session(['cart' => $cart , $total => $cart ]);
  
    return redirect()->back();
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
