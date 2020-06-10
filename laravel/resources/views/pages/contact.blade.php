@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="donation-form">
            @if(isset($message))
                <h1>{{$message}}</h1>
            @else
                <form action="{{Route('contact.send')}}" method="post" class="donate-form-form">
                    @csrf
                    <h1>Get in touch</h1>
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
                    <label>Would you mind giving us your phone number?
                        <input type="text" name="phone" placeholder="+32491718925">
                    </label>
                    <label>What'd you like to say (or ask)?
                        <textarea name="message" placeholder="Your message..."></textarea>
                    </label>
                    <input type="submit" value="Send your message">
                </form>
                <div class="newsletter-form-container">
                    <h1>Perhaps you'd like to subscribe to our newsletter?</h1>
                    <form action="{{ route('contact.subscribe') }}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <input type="email" name="user_email" id="exampleInputEmail" class="form-control">
                        </div>
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
@endsection
