<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommentController extends Controller
{
    public function create($post_id)
    {
        $post = Post::find($post_id);

        return view('comments.create', compact('post'));
    }
}