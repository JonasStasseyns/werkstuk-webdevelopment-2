<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function getIndex()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function postCreate(Request $r)
    {
        $post = new Post;
        $post->title = $r->title;
        $post->image = request()->image->store('uploads', 'public');
        $post->image = '/storage/' . $post->image;
        $post->body = $r->post_body;
        $post->save();
    }

}
