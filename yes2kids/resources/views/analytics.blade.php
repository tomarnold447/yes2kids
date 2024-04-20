<!-- resources/views/analytics.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Analytics</h1>

    <!-- Display event registration statistics -->
    <h2>Event Registration Statistics</h2>
    <p>Total Events: {{ $totalEvents }}</p>
    <p>Total Registrations: {{ $totalRegistrations }}</p>

    <!-- Add more analytics data as needed -->
@endsection
