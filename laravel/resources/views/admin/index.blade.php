@extends('layouts.app')

@section('content')
    <div class="wrapper">

        <div class="admin-index-top-row">
            <h1>Contentbeheer</h1>
            <div class="top-top-right">
                <a href="{{route('blog.create')}}">
                    <button class="more-posts">Create post</button>
                </a>
                <a href="{{route('admin.donations')}}">
                    <button class="more-posts">Donation list</button>
                </a>
            </div>
        </div>

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
                        <div class="admin-index-posts-btn-group">
                            <a class="admin-page-button"
                               href="{{route('admin.post-edit', ['id' => $post->id])}}">Edit</a>
                            <a class="admin-page-button delete"
                               href="{{route('blog.delete', ['id' => $post->id, 'from' => 'index'])}}">Delete</a>
                        </div>
                    </div>
                @endforeach
                <a href="{{route('admin.posts')}}">
                    <button class="more-posts">See all</button>
                </a>
            </div>
        </div>
    </div>
@endsection
