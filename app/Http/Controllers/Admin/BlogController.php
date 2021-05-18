<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use function PHPUnit\Framework\fileExists;

class BlogController extends Controller
{


    public function index(Request $request)
    {
        if($request->query('search')){
            $search = BlogPost::where('title', 'like', '%' . $request->query('search') .'%')->orderBy('updated_at', 'DESC')->paginate(5);
        }else{
            $search = BlogPost::orderBy('updated_at', 'DESC')->paginate(5);
        }

        return view('admin.blog.index')->with('posts', $search);
    }

    public function detail($slug){
        return view('admin.blog.detail')->with('post', BlogPost::where('slug', $slug)->first());
    }

    public function create()
    {
        return view('admin.blog.add-post');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:blog_posts,title',
            'body' => 'required|min:3',
            'tag' => 'required',
            'image' => 'required|mimes:jpeg,png,gif,jpg|max:1024'
        ]);

        if (auth()->check()) {

            $tag = explode(' ', $request->tag);
            $allTag = '';
            for ($i = 0; $i < count($tag); $i++) {
                if (strpos($tag[$i], '#') !== false) {
                    if (strpos($tag[$i], '#') === 0) {
                        $allTag .= $tag[$i] . ' ';
                    } else {
                        return back()->withInput()->with('tag_message', 'Taged is invalid charakter');
                    }
                } else {
                    return back()->withInput()->with('tag_message', 'Taged is invalid charakter');
                }
            }
            $allTag = rtrim($allTag, ' ');

            $file = $request->image;
            $filename = Carbon::now()->timestamp . '-' . $file->getClientOriginalName();
            $file->storeAs('public/uploads/', $filename);
            BlogPost::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title) . '-' . Carbon::now()->timestamp,
                'body' => $request->body,
                'tag' => $allTag,
                'image' => $filename,
                'user_id' => auth()->user()->id
            ]);
        } else {
            abort(404);
        }

        $request->session()->flash('message', 'Create Post sucessfully');
        return redirect()->route('admin.blogIndex');
    }

    public function edit($slug)
    {
        $post = BlogPost::where('slug', $slug)->first();
        if (!$post) {
            abort(404);
        }
        return view('admin.blog.edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|unique:blog_posts,title,' . $id,
            'body' => 'required|min:3',
            'tag' => 'required',
            'image' => 'mimes:jpeg,png,gif,jpg|max:1024|'
        ]);

        if (auth()->check()) {
            $tag = explode(' ', $request->tag);
            $allTag = '';
            for ($i = 0; $i < count($tag); $i++) {
                if (strpos($tag[$i], '#') !== false) {
                    if (strpos($tag[$i], '#') === 0) {
                        $allTag .= $tag[$i] . ' ';
                    } else {
                        return back()->withInput()->with('tag_message', 'Taged is invalid charakter');
                    }
                } else {
                    return back()->withInput()->with('tag_message', 'Taged is invalid charakter');
                }
            }
            $allTag = rtrim($allTag, ' ');

            if($request->hasFile('image')){
                if(Storage::exists('public/uploads/' . $request->oldImage)){
                    Storage::delete('public/uploads/' . $request->oldImage);
                }
                $file = $request->image;
                $filename = Carbon::now()->timestamp . '-' . $file->getClientOriginalName();
                $file->storeAs('public/uploads/', $filename);
            }

            BlogPost::find($id)->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'body' => $request->body,
                'tag' => $allTag,
                'image' => $request->hasFile('image') ? $filename : $request->oldImage
            ]);
        } else {
            abort(404);
        }

        $request->session()->flash('message', 'updated Post sucessfully');
        return redirect()->route('admin.blogIndex');
    }

    public function delete($id){

        $post = BlogPost::findOrFail($id);
        $post->delete();

        if(Storage::exists('public/uploads/' . $post->image)){
            Storage::delete('public/uploads/' . $post->image);
        }

        session()->flash('message', 'updated Post sucessfully');
        return back(); 
    }
}
