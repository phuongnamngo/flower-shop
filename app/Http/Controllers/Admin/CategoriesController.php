<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CategoriesController extends Controller
{
    //
    public function index(): View
    {
        $categories = Category::latest()->paginate(5);

        return view('admin.categories.index', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('admin.categories.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        Category::create($request->all());
        return redirect()->route('admin.category')
            ->with('success', 'Categories created successfully.');
    }
    public function updateStatus(Request $request)
    {
        $category = Category::find($request->id);
        $category->status = $request->status;
        $category->save();

        return response()->json(['message' => 'Status updated successfully.']);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {

        $categories = Category::where("id", $id)->first();
        return view('admin.categories.edit')->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->update();

        return redirect()->route('admin.category')
            ->with('success', 'Categories updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Category::where('id', $id)->delete();
        return redirect()->route('admin.category')
            ->with('success', 'Categories deleted successfully');
    }
}
