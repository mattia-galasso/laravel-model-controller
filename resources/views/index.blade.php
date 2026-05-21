@extends('layouts.master')

@section('title', 'Movies Homepage')
    
@section('content')    
    <ul>
        @foreach ($movies as $movie)
        <li>{{ $movie['title'] }}</li>
        @endforeach
    </ul>
@endsection