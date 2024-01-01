<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blog = BlogModel::where('status', 1)->get();
        return view('main.blog.index', compact('blog'));
    }
    public function blogDetail()
    {
        return view('main.blog.blogDetail');
    }
}
