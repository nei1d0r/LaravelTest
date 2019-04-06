@extends('layout')

@section('title','Welcome')

@section('content')

    <h1>My First Website</h1>

    <h2>{{$foo}}</h2>

    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>

@endsection