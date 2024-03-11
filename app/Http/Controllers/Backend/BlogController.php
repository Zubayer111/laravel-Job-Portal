<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function createBlog(Request $request)
    {
        $company_id = Session::get('company_id');

        $img = $request->file("image");
            $time = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$company_id}-{$time}-{$file_name}";
            $img_url = "uploads/blog/{$img_name}";
            $img->move(public_path('uploads/blog'), $img_name);

        Blog::create([
            'company_id' => $company_id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image' => $img_url
        ]);
        return redirect('/dashboard/blogs')->with('success', 'Blog created successfully!');
    }

    public function deleteBlog($blog)
    {
        $data = Blog::where('id', $blog)->first();
        $data->delete();
        return redirect('/dashboard/blogs')->with('success', 'Blog deleted successfully!');
    }

    public function editBlog($blog)
    {
        $data = Blog::where('id', $blog)->first();
        return view("backend.pages.blog_edit_form", compact('data'));
    }

    public function updateBlog(Request $request, $blog)
    {
        $company_id = Session::get('company_id');
        $img = $request->file("image");
        $time = time();
        $file_name = $img->getClientOriginalName();
        $img_name = "{$company_id}-{$time}-{$file_name}";
        $img_url = "uploads/blog/{$img_name}";
        $img->move(public_path('uploads/blog'), $img_name);

        $data = Blog::where('id', $blog)->first();
        $data->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image' => $img_url
        ]);
        return redirect('/dashboard/blogs')->with('success', 'Blog updated successfully!');
    }

    public function showBlog($blog)
    {
        $data = Blog::where('id', $blog)->first();
        return view("backend.pages.blog_details", compact('data'));
    }
}
