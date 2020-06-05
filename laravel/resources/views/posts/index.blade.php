@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>Blog</h1>
        <div class="blog-index-container">
            @foreach($posts as $post)
                <div class="post-preview-item">
                    <div class="post-preview-item-tc">
                        <h3 class="post-preview-title">{{$post->title}}</h3>
                        <p class="post-preview-text">{{$post->body}}</p>
                    </div>
                    <a class="post-preview-button" href="">Read more</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
