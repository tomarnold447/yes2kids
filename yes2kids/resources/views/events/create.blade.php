<!-- resources/views/events/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Event</h1>
    <form action="{{ route('events.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="start_date">Start Date:</label>
            <input type="datetime-local" name="start_date" id="start_date" required>
        </div>
        <div>
            <label for="end_date">End Date:</label>
            <input type="datetime-local" name="end_date" id="end_date" required>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" required>
        </div>
        <button type="submit">Create Event</button>
    </form>
@endsection
