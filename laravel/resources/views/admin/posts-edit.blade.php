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
                <form action="{{route('admin.update')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <input type="text" name="title" value="{{$post->title}}">
                    <textarea name="body" id="" cols="30" rows="10">{{$post->body}}</textarea>
                    <input type="submit" value="Update">
                </form>
            </div>
        </div>
    </div>
@endsection
