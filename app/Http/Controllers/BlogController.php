<?php

namespace App\Http\Controllers;

use App\Models\Admin\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = BlogPost::where('status', 1)->paginate(9);
        return view('blog')->with('posts', $posts);
    }
}
