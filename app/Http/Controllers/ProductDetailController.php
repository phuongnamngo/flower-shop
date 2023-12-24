<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public $comment = "";
    //
    public function index($id)
    {
        $product = Product::leftJoin('categories', 'categories.id', '=', 'product.category_id')
            ->select(
                'categories.name as category_name',
                'product.*',
            )->where('product.id', $id)->first();
        $this->comment = Comment::leftJoin('users', 'users.id', '=', 'comment.user_id')
            ->select('comment.*', 'users.name as name')->where('comment.product_id', $id)->get();
        $rating = Rating::where('product_id', $id)->avg('rating');
        $rating = round($rating);
        return view('main.product.productDetails')->with('product', $product)
            ->with('comment', $this->comment)->with('rating', $rating);
    }
    public function comment(Request $request)
    {
        $request->validate([
            'body' => 'required',
        ]);
        $comment = new Comment;
        $comment->user_id = $request->user_id ? $request->user_id : '';
        $comment->product_id = $request->product_id;
        $comment->body = $request->body;
        $comment->save();
        return redirect()->route('product.detail', $request->product_id)
            ->with('success', 'Categories created successfully.');
    }
    public function addRating(Request $request)
    {
        $rate = new Rating;
        $rate->product_id = $request->product_id;
        $rate->rating = $request->index;
        $rate->save();
        return response()->json(['success' => 'successfully']);
    }
}
