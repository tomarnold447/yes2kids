<!-- resources/views/events/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $event->title }}</h1>
    <p>{{ $event->description }}</p>
    <p><strong>Start Date:</strong> {{ $event->start_date }}</p>
    <p><strong>End Date:</strong> {{ $event->end_date }}</p>
    <p><strong>Location:</strong> {{ $event->location }}</p>

    <!-- Include registration form or other actions as needed -->
@endsection
