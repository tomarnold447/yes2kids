<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // Retrieve all events
        $events = Event::all();

        // Return view with events data
        return view('events.index', compact('events'));
    }

    public function create()
    {
        // Return the view for creating a new event
        return view('events.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location' => 'required',
            // Add validation rules for other fields as needed
        ]);

        // Create a new event
        Event::create($request->all());

        // Redirect to the index page with success message
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    // Implement other methods like show(), edit(), update(), destroy() as needed
}
