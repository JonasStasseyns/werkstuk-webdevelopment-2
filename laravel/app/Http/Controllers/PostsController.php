<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function getIndex()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

}
