@extends('base')

@section('title','About-us | '. env('APP_NAME'))

@section('content')
        <img src="{{ asset('/images/about.png')}}" alt="about page">
        <p>Built with &hearts; by opilam</p>
        <p><a href=" {{ route('home') }} ">Revenir a la page d'acceuil</a></p>
@endsection
