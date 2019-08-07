@extends('layouts.app')
@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <h1 class="display-4 text-center my-4 virtical">Welcome to todos app</h1>
        </div>
    </div>
</div>


@endsection


@section('title')
    Welcome to Todos app
@endsection