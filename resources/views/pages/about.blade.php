@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')

@ensection

@section('content')


@section('content')
    <img src="{{ asset('/img/univ-dschang-logo.png') }}" alt="University Of Dschang Logo">
        
    <p>Built with &hearts; by KUROHIGE.</p>

    <p><a href="{{ route('app_home')}}">Revenir a la page d'acceuille.</a></p>

@endsection

