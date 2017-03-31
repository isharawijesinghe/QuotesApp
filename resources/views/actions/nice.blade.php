@extends('layouts.master')

@section('title')
    Greet
@endsection

@section('content')
    <div class="centered">
        <a href="{{route('home')}}">Home</a>
        <h1>Hi i  {{$action }} {{$name}}...!!!</h1>
    </div>

@endsection

