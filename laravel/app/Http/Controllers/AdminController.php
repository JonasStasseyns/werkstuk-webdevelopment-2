<?php

namespace App\Http\Controllers;

use App\Content;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function getIndex()
    {
        $pages = Content::select('page')->distinct()->get();
        $posts = Post::all()->take(5);
        return view('admin.index', [
            'pages' => $pages,
            'posts' => $posts
        ]);
    }

    public function getPostsIndex()
    {
        $posts = DB::table('posts')->paginate(15);
        return view('admin.posts-index', compact('posts'));
    }

    public function getEdit(Request $r)
    {
        $contents = Content::where('page', '=', $r->page)->get();
        return view('admin.edit', compact('contents'));
    }

    public function updateEdit(Request $r)
    {
        $content = Content::where('name', '=', $r->name)->first();
        $content->content_section = $r->content_section;
        $content->save();
        return redirect()->route('admin.edit', ['page' => $r->page, 'name' => $r->name]);
    }

    public function getPosts()
    { // TODO check if this is used?
        $posts = Post::all();
        return view('posts.edit-index', compact('posts'));
    }

    public function getPostEdit(Request $r)
    {
        $post = Post::where('id', '=', $r->id)->first();
        return view('admin.posts-edit', compact('post'));
    }

    public function updatePostEdit(Request $r)
    {
        $post = Post::where('id', '=', $r->id)->first();
        $post->title = $r->title;
        $post->body = $r->body;
        $post->save();
        return redirect()->route('admin.posts', ['title' => $r->title]);
    }
}
