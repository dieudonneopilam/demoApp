@extends('base')

@section('title','About-us | '. env('APP_NAME'))

@section('content')
        <p>Built with &hearts; by opilam</p>
        <p><a href=" {{ route('home') }} ">Revenir a la page d'acceuil</a></p>
@endsection
