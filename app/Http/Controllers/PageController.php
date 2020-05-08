<?php

namespace App\Http\Controllers;

Use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        return view('posts', [
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->get()->first();
        return view('post', [
            'post' => $post
        ]);
    }
}
