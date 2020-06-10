@extends('layouts.app')

@section('content')
    <div class="wrapper">

        <div class="admin-index-top-row">
            <h1>Donations</h1>
        </div>

        <div class="donation-form">
            @foreach($donations as $donation)
                <div class="post-preview-item donation-list-item">
                    <div class="post-preview-item-tc donation-list-sub-item">
                        <div class="post-preview-item-tc-at">
                            <h3 class="post-preview-title">{{$donation->first_name}} {{$donation->last_name}}</h3>
                            <p class="post-preview-text">{{$donation->message}}</p>
                        </div>
                    </div>
                    <div class="donation-amount-index">€ {{$donation->sum}}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
