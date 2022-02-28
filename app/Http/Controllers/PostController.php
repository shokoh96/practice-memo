<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = DB::select('select * from posts');
        return view('posts.index', ['posts' => $posts]);
    }
}