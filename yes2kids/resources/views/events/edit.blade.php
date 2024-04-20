<!-- resources/views/events/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Event</h1>
    <form action="{{ route('events.update', $event->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $event->title }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ $event->description }}</textarea>
        </div>
        <div>
            <label for="start_date">Start Date:</label>
            <input type="datetime-local" name="start_date" id="start_date" value="{{ $event->start_date }}" required>
        </div>
        <div>
            <label for="end_date">End Date:</label>
            <input type="datetime-local" name="end_date" id="end_date" value="{{ $event->end_date }}" required>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{ $event->location }}" required>
        </div>
        <button type="submit">Update Event</button>
    </form>
@endsection
