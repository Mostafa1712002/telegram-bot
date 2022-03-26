@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <ul>
                        <li><a href="{{ route("activity") }}">Activity</a></li>
                        <li><a href="{{ route("send.message") }}">send message</a></li>
                    </ul>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
