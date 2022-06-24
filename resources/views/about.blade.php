@extends('layouts.main')

@section('title', 'Chi siamo')

@section('content')
    <h1>about</h1>
    <h3>Io sono {{ $name }} {{ $lastname }}</h3>
    <h4>I miei colori preferiti sono:</h4>
    <ul>
        @foreach ($colors as $color )
            <li>{{ $color }}</li>
        @endforeach
    </ul>
@endsection
