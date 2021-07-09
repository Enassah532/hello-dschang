@extends('layouts.app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')

@ensection

@section('content')


@section('content')
    <img src="{{ asset('/img/univ-dschang-logo.png') }}" alt="University Of Dschang Logo" class="my-12 rounded=full shadow-md">
        
    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by KUROHIGE.
    </h2>

    <p>
        <a href="{{ route('app_home')}}" class="text-indigo-500 hover:text-indigo-700 underline">Revenir a la page d'acceuille.</a>
    </p>

@endsection

