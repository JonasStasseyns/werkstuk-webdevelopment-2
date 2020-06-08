<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function getIndex()
    {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function getCreate()
    {
        return view('posts.create');
    }

    public function postCreate(Request $r)
    {
        $post = new Post;
        $post->title = $r->title;
        $post->image = request()->image->store('uploads', 'public');
        $post->image = '/storage/' . $post->image;
        $post->intro = $r->intro;
        $post->body = $r->post_body;
        $post->save();
    }

    public function getDetail($id)
    {
        $post = Post::where('id', '=', $id)->first();
        return view('posts.detail', compact('post'));
    }

    public function getDelete($id, $from)
    {
        $post = Post::where('id', '=', $id)->first();
        $post->delete();
        if ($from == 'posts') {
            return redirect('/admin/posts');
        } else {
            return redirect('/admin');
        }
    }
}
