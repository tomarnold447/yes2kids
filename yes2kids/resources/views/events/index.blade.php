<!-- resources/views/events/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    @if ($events->isEmpty())
        <p>No events found.</p>
    @else
        <ul>
            @foreach ($events as $event)
                <li>
                    <a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a>
                    <p>{{ $event->description }}</p>
                    <p><strong>Start Date:</strong> {{ $event->start_date }}</p>
                    <p><strong>End Date:</strong> {{ $event->end_date }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
