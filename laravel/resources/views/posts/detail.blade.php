@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>{{$post->title}}</h1>
        <div class="blog-index-container">
            <div class="post-detail-container">
                <p>{{$post->intro}}</p>
                <p>{{$post->body}}</p>
            </div>
            <div class="post-detail-image-container">
                <img src="{{$post->image}}" alt="{{$post->image}}">
            </div>
        </div>
    </div>
@endsection
