@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>Contentbeheer</h1>
        <h2>Blog post</h2>
        {{--        @if(isset($_GET['name']))--}}
        {{--            <div class="toast">De record '{{$_GET['name']}}' is aangepast.</div>--}}
        {{--        @endif--}}
        <div class="edit-form-list">
            <div class="edit-item">
                <form action="{{route('blog.post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" value="" placeholder="title">
                    <textarea name="post_intro" id="" cols="30" rows="10" placeholder="intro"></textarea>
                    <textarea name="post_body" id="" cols="30" rows="10" placeholder="body"></textarea>
                    <input id="profile_image" type="file" class="form-control" name="image">
                    <input type="submit" value="Create">
                </form>
            </div>
        </div>
    </div>
@endsection
