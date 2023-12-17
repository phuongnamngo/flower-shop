<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class ProductAdminController extends Controller
{
    //
    public function index()
    {
        $products = Product::leftJoin('categories', 'categories.id', '=', 'product.category_id')
            ->select('categories.name as category_name', 'product.*')->latest()->paginate(5);

        return view('admin.product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(): View
    {
        $category = Category::where('status', '1')->get();
        return view('admin.product.add')->with('category', $category);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'content' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'img' => 'required',
            'img.*' => 'image|max:2048|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $product = new Product;
        $product->name = $request->input('name');
        $product->desc = $request->input('desc');
        $product->content = $request->input('content');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->status = $request->input('status');
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move(public_path('upload/product'), $fileName);
            $product->img = 'upload/product/' . $fileName;
        }
        $product->save();

        return redirect()->route('admin.product')
            ->with('success', 'Categories created successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Product $product): View
    // {
    //     return view('products.show', compact('product'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $category = Category::where('status', '1')->orderby('id', 'desc')->get();
        $product = Product::where('id', $id)->first();
        return view('admin.product.edit')->with('category', $category)->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'content' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->content = $request->input('content');
        $product->desc = $request->input('desc');
        $product->category_id = $request->input('category_id');
        if ($request->hasFile('img')) {
            $path = $product->img;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move(public_path('upload/product/'), $fileName);
            $product->img = 'upload/product/' . $fileName;
        }
        $product->update();

        return redirect()->route('admin.product')
            ->with('success', 'Categories updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Product::where('id', $id)->delete();
        return redirect()->route('admin.product')
            ->with('success', 'Categories deleted successfully');
    }
}
