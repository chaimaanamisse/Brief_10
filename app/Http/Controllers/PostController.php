<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
       
        // $posts = Post::latest()->with(['user', 'likes'])->paginate(20);
        // $posts = Post::get();
        $posts = Post::latest()->with(['user'])->paginate(12);


        return view('posts.index', [
            'posts' => $posts
        ]);

        // return view('posts.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Post $post)
    {
        // dd($post);
        if(!$post->ownedBy(auth()->user())) {
            dd('no');
        }
        $post->delete();

        return back();

    }

}
