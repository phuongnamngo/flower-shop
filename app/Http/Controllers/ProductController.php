<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        $products = Product::where('status', '1')->get();
        return view('main.product.index', compact('products', 'categories'));
    }
    public function productByCate($id)
    {
        $categories = Category::where('status', 1)->get();
        $products = Product::where('status', '1')->where('category_id', $id)->get();
        return view('main.product.index', compact('products', 'categories'));
    }
}
