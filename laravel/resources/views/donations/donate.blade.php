@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="donation-form">
            <form action="{{Route('donate.prepare')}}" method="post" class="donate-form-form">
                @csrf
                <h1>Buy us a coffee !</h1>
                @if(count($errors))
                    <div class="toast toast-error">First name, last name, email and amount are required.</div>
                @endif
                <label>First name
                    <input type="text" name="first_name" placeholder="first name">
                </label>
                <label>Last name
                    <input type="text" name="last_name" placeholder="last name">
                </label>
                <label>Email address
                    <input type="email" name="email" placeholder="yourname@domain.com">
                </label>
                <label>How expensive a coffee would you like to buy us?
                    <input type="text" name="sum" placeholder="€5 for example">
                </label>
                <label>Want to add a note?
                    <textarea name="message" placeholder="Your message..."></textarea>
                </label>
                <input type="submit" value="continue to payment">
            </form>
        </div>
    </div>
@endsection
