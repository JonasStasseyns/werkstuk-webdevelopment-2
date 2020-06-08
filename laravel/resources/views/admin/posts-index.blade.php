@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>Blog</h1>
        @if(isset($_GET['title']))
            <div class="toast">De post '{{$_GET['title']}}' is aangepast.</div>
        @endif
        @if(isset($_GET['deleted']))
            <div class="toast">De post '{{$_GET['deleted']}}' is verwijderd.</div>
        @endif
        <div class="admin-page-list">
            @foreach($posts as $post)
                <div class="post-preview-item admin-or">
                    <h3 class="post-preview-title">{{$post->title}}</h3>
                    <p class="post-preview-text">{{$post->body}}</p>
                    <div class="posts-index-btn-group">
                        <a class="post-preview-button" href="{{route('admin.post-edit', ['id' => $post->id])}}">Edit</a>
                        <a class="post-preview-button delete"
                           href="{{route('blog.delete', ['id' => $post->id, 'from' => 'posts'])}}">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
