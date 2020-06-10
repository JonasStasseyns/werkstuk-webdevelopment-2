@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="donation-form">
            @foreach($donations as $donation)
                <div class="post-preview-item donation-list-item">
                    <div class="post-preview-item-tc donation-list-sub-item">
                        <div class="post-preview-item-tc-at">
                            <h3 class="post-preview-title">{{$donation->first_name}} {{$donation->last_name}}</h3>
                            <p class="post-preview-text">@if($donation->public) {{$donation->message}} @endif</p>
                        </div>
                    </div>
                    <div class="donation-amount-index">€ {{$donation->sum}}</div>
                </div>
            @endforeach
            {{--            <form action="{{Route('donate.prepare')}}" method="post" class="donate-form-form">--}}
            {{--                @csrf--}}
            {{--                <h1>Buy us a coffee !</h1>--}}
            {{--                @if(count($errors))--}}
            {{--                    <div class="toast toast-error">First name, last name, email and amount are required.</div>--}}
            {{--                @endif--}}
            {{--                <label>First name--}}
            {{--                    <input type="text" name="first_name" placeholder="first name">--}}
            {{--                </label>--}}
            {{--                <label>Last name--}}
            {{--                    <input type="text" name="last_name" placeholder="last name">--}}
            {{--                </label>--}}
            {{--                <label>Email address--}}
            {{--                    <input type="email" name="email" placeholder="yourname@domain.com">--}}
            {{--                </label>--}}
            {{--                <label>How expensive a coffee would you like to buy us?--}}
            {{--                    <input type="text" name="sum" placeholder="€5 for example">--}}
            {{--                </label>--}}
            {{--                <label>Want to add a note?--}}
            {{--                    <textarea name="message" placeholder="Your message..."></textarea>--}}
            {{--                </label>--}}
            {{--                <input type="submit" value="continue to payment">--}}
            {{--            </form>--}}
            {{--            <a href="{{route('donate.list')}}" class="all-donations-btn">--}}
            {{--                <button>All donations</button>--}}
            {{--            </a>--}}
        </div>
    </div>
@endsection
