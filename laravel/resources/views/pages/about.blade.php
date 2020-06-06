@extends('layouts.app')

@section('content')
    <div class="banner about-banner"></div>
    <div class="wrapper about-target">
        <h1>{{$data['title']}}</h1>
        <p class="about-section">{{$data['intro']}}</p>
        <p class="about-section">{{$data['section_one']}}</p>
    </div>

@endsection
