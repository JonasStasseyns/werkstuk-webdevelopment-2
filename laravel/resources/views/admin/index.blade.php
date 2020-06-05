@extends('layouts.app')

@section('content')
    <div class="wrapper">

        <h1>Contentbeheer</h1>

        <div class="admin-overview">
            <div class="admin-page-list">
                <h2>Pagina's</h2>
                @foreach($pages as $page)
                    <div class="admin-page">
                        <p class="admin-page-name">{{$page->page}}</p>
                        <a class="admin-page-button" href="{{route('admin.edit', ['page' => $page->page])}}">Edit</a>
                    </div>
                @endforeach
            </div>

            <div class="admin-page-list admin-posts-list">
                <h2>Posts</h2>
                @foreach($posts as $post)
                    <div class="admin-page">
                        <p class="admin-page-name">{{$post->title}}</p>
                        <a class="admin-page-button" href="{{route('admin.post-edit', ['id' => $post->id])}}">Edit</a>
                    </div>
                @endforeach
                <a href="{{route('admin.posts')}}">
                    <button class="more-posts">See all</button>
                </a>
            </div>
        </div>
    </div>
@endsection
