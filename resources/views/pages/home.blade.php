@extends('base')

@section('title',config('app.name'))

@section('content')
        <img src="/images/home.png" alt="home page">
        <h1>Hello from quebec</h1>

        <p>I'ts currently {{ date('h:i A') }}</p>
@endsection

       