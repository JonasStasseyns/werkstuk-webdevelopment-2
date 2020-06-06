@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>Blog</h1>
        <div class="admin-page-list">
            @foreach($posts as $post)
                <div class="post-preview-item admin-or">
                    <h3 class="post-preview-title">{{$post->title}}</h3>
                    <p class="post-preview-text">{{$post->body}}</p>
                    <a class="post-preview-button" href="{{route('admin.post-edit', ['id' => $post->id])}}">Edit</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
