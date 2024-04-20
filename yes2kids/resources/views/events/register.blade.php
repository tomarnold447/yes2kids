<!-- resources/views/events/register.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Register for Event: {{ $event->title }}</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.register.store', $event->id) }}" method="post">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" id="phone" required>
        </div>
        <!-- Add more fields for registration data as needed -->
        <button type="submit">Register</button>
    </form>
@endsection
