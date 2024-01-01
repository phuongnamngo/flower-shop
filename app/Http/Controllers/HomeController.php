<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = Product::where('status', '1')->get();
        return view('main.home.index')->with('products', $products);
    }
    public function searchProduct(Request $request)
    {
        $keyword = $request->input('keyword');
        $categories = Category::where('status', 1)->get();
        $products = Product::where('status', '1')->search($keyword)->get();
        return view('main.product.index', compact('products', 'categories'));
    }
}
