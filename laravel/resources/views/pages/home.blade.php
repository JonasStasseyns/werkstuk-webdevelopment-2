@extends('layouts.app')

@section('content')
    {{--    {{$data['intro']}}--}}
    {{--    {{$data['description']}}--}}
    <div class="banner home-banner">
        <div class="sub-home-banner">
            <div class="text-sub-home-banner">
                <h1 class="home-title">{{$data['title']}}</h1>
                <h3 class="home-slug">{{$data['slug']}}</h3>
            </div>
            <div class="arrow"></div>
        </div>
    </div>
    <div class="wrapper home-target">
        {{--    section intro--}}
        <div class="section">
            <div class="sub-section intro">
                <div class="sub-section-text-container">
                    <h2 class="sub-section-title">{{$data['intro-title']}}</h2>
                    <p class="sub-section-text">{{$data['intro']}}</p>
                </div>
                <div style="background-image:url('{{asset('images/intro.jpg')}}')" class="home-img intro"></div>
            </div>
        </div>
        {{--    section description--}}
        <div class="section">
            <div class="sub-section description">
                <div style="background-image:url('{{asset('images/features.png')}}')" class="home-img"></div>
                <div class="sub-section-text-container features">
                    <h2 class="sub-section-title">{{$data['features-title']}}</h2>
                    <p class="sub-section-text">{!!$data['features']!!}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
