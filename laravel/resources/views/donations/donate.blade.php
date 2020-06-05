@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="donation-form">
            <form action="{{Route('donate.prepare')}}" method="post">
                @csrf
                <input type="text" name="first_name" placeholder="first" value="Jonas">
                <input type="text" name="last_name" placeholder="last" value="Stasseyns">
                <input type="email" name="email" placeholder="email" value="stasseynsjonas@gmail.com">
                <input type="text" name="sum" placeholder="sum" value="124">
                <textarea name="message" placeholder="message..."></textarea>
                <input type="submit" value="donate">
            </form>
        </div>
    </div>
@endsection
