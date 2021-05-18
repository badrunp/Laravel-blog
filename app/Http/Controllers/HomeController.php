<?php

namespace App\Http\Controllers;

use App\Models\Admin\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = BlogPost::where(['status' => 1])->limit(4)->get();
        return view('home', [
            'posts' => $posts
        ]);
    }
}
