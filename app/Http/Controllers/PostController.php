<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = DB::table('posts')->get();
        // $posts = DB::select('select * from posts');
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $param = [
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ];
        DB::insert('insert into posts (title, body, user_id) values (:title, :body, :user_id)', $param);

        return redirect('/');
    }

    public function show($id)
    {
        // $post = Post::find($id);
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return view('posts.show', ['post' => $post]);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
}