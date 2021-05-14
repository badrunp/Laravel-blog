<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        return view('admin.add-post');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:blog_posts',
            'body' => 'required|min:3',
            'tag' => 'required',
            'image' => 'required|mimes:jpeg,png,gif,jpg|max:1024'
        ]);



        $file = $request->image;
        $filename = Carbon::now()->timestamp . '-' . $file->getClientOriginalName();
        $file->storeAs('public/uploads/', $filename);
        $user->blog_posts->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'tag' => $request->tag,
            'image' => $filename
        ]);


        $request->session()->flash('message', 'Create Post sucessfully');
        return redirect()->route('admin.blogIndex');
    }
}
