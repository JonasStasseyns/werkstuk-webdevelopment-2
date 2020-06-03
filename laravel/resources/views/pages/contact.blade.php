@extends('layouts.app')

@section('content')
    <form action="{{route('contact')}}" class="contact-form" method="post">
        <label>Name
            <input type="text" name="name" placeholder="name...">
        </label>
    </form>
@endsection
