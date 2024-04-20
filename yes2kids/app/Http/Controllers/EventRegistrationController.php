<?php
// app/Http/Controllers/EventRegistrationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventRegistrationController extends Controller
{
    public function create(Event $event)
    {
        return view('events.register', compact('event'));
    }

    public function store(Request $request, Event $event)
    {
        // Validate the registration data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10', // Adjust validation rule as needed
            // Add more validation rules as needed
        ]);

        // Store the registration data in the database
        $event->registrations()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone, // Include phone number
            // Add more fields if necessary
        ]);

        // Redirect back to the event details page with a success message
        return redirect()->route('events.show', $event->id)->with('success', 'Registration successful.');
    }
}
