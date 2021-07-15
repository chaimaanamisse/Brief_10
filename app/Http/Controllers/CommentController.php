<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Post $post)
    {
        // request()->validate( [
        //     'body' => 'required|min:5'
        // ]);

       $comment = new Comment(); 
       $comment->content = request('content');
       $comment->user_id = auth()->user()->id;


       $post->comments()->save($comment);

       return back();

    }
}
