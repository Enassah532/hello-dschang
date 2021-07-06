@extends('app')

 

@section('content')

    <img src="{{ asset('/img/Cameroon-flag.png') }}" alt="University Of Dschang Logo">
 
    <h1>Hello from Dschang!</h1>

    <p>It's currently {{ date('h:i A') }}</p>

@endsection