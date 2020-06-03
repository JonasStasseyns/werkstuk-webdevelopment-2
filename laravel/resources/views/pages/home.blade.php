@extends('layouts.app')

@section('content')
    {{--    {{$data['intro']}}--}}
    {{--    {{$data['description']}}--}}
    <div class="banner home-banner"></div>
    <div class="wrapper">
        <p>{{$data['intro']}}</p>
        <p>{{$data['description']}}</p>
    </div>

@endsection
