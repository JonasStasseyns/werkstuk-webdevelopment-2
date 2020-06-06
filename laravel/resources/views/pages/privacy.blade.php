@extends('layouts.app')

@section('content')
    <div class="banner about-banner"></div>
    <div class="wrapper privacy-wrapper">
        <h1>{{$data['title']}}</h1>
        <p class="about-section">{!! $data['intro'] !!}</p>
        <p class="about-section">{!! $data['analytics'] !!}</p>
        <p class="about-section">{!! $data['ads_non_personal'] !!}</p>
        <p class="about-section">{!! $data['ads_personal'] !!}</p>
    </div>

@endsection
