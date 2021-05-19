<?php

namespace App\Http\Controllers;

use App\Models\Admin\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = BlogPost::where(['status' => 1])->limit(4)->get();
        $posts_latest = BlogPost::where('status', 1)->orderBy('created_at', 'DESC')->limit(4)->get();
        $posts_tranding = BlogPost::where('status', 1)->where('is_tranding', 1)->orderBy('created_at', 'ASC')->limit(4)->get();
        $posts_top_views = BlogPost::where('status', 1)->where('is_top_views', 1)->orderBy('created_at', 'ASC')->limit(4)->get();
        return view('home', [
            'posts' => $posts,
            'posts_latest' => $posts_latest,
            'posts_tranding' => $posts_tranding,
            'posts_top_views' => $posts_top_views,
        ]);
    }
}
