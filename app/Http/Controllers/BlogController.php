<?php

namespace App\Http\Controllers;

use App\Models\Admin\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){

        $shorting = [
            ['value' => 'latest-article', 'title' => 'Short By Latest Article'],
            ['value' => 'updated-article', 'title' => 'Short By Updated Article'],
            ['value' => 'tranding-article', 'title' => 'Tranding Article'],
            ['value' => 'top-views-article', 'title' => 'Top Views Article'],
        ];

        $query = $request->query('by');
        if($query === 'latest-article'){
            $posts = BlogPost::where('status', 1)->orderBy('created_at', 'DESC')->paginate(9);
            $title = 'By Latest Article';
        }else if($query == 'updated-article'){
            $posts = BlogPost::where('status', 1)->orderBy('updated_at', 'DESC')->paginate(9);
            $title = 'By Updated Article';
        }else if($query === 'tranding-article'){
            $posts = BlogPost::where('status', 1)->where('is_tranding', 1)->orderBy('created_at', 'DESC')->paginate(9);
            $title = 'Tranding Article';
        }else if($query === 'top-views-article'){
            $posts = BlogPost::where('status', 1)->where('is_top_views', 1)->orderBy('created_at', 'DESC')->paginate(9);
            $title = 'Top Views Article';
        }else{
            $posts = BlogPost::where('status', 1)->inRandomOrder()->paginate(9);
            $title = 'All Article';
        }
        return view('blog')->with('posts', $posts)->with('title', $title)->with('shorting', $shorting)->with('query', $query);
    }
    
    public function detailt($slug){
        $post = BlogPost::where(['slug' => $slug])->first();
        if(!$post){
            abort(404);
        }

        $posts = BlogPost::where('status', 1)->limit(4)->get();

        return view('blog-detailt')->with('post', $post)->with('posts', $posts);
    }

    public function search(Request $request){
        $search = $request->query('s');
        $posts = BlogPost::where('title', 'like', '%' . $search . '%')->limit(5)->get();
        return response()->json($posts);
    }
}
