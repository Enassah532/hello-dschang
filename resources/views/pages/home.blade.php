@extends('app')

 

@section('content')

    <img src="{{ asset('/img/Cameroon-flag.png') }}" alt="University Of Dschang Logo" class="mt-12 rounded shadow-md h-32">
 
    <h1 class="mt-5 test-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Dschang!</h1>

    <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}</p>

@endsection