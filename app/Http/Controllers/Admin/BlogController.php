<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blog = BlogModel::latest()->paginate(5);
        return view('admin.blog.index', compact('blog'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(): View
    {
        return view('admin.blog.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required',
            'status' => 'required',
            'img.*' => 'image|max:2048|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $blog = new BlogModel;
        $blog->title = $request->title;
        $blog->content = $request->content; 
        $blog->status = $request->status;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move(public_path('upload/blog'), $fileName);
            $blog->img = 'upload/blog/' . $fileName;
        }
        $blog->save();
        return redirect()->route('admin.blog')
            ->with('success', 'Blogs created successfully.');
    }
    public function updateStatus(Request $request)
    {
        $blog = BlogModel::find($request->id);
        $blog->status = $request->status;
        $blog->save();

        return response()->json(['message' => 'Status updated successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $blog = BlogModel::where("id", $id)->first();
        return view('admin.blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required',
            'img.*' => 'image|max:2048|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $blog = BlogModel::find($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move(public_path('upload/blog'), $fileName);
            $blog->img = 'upload/blog/' . $fileName;
        }
        $blog->update();

        return redirect()->route('admin.blog')
            ->with('success', 'Blogs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        BlogModel::where('id', $id)->delete();
        return redirect()->route('admin.blog')
            ->with('success', 'Blogs deleted successfully');
    }
}
