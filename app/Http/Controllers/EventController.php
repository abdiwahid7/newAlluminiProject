<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::paginate('9');
        return view('events.index', compact('events'));
    }
    public function front()
    {
        $events = Event::paginate('12');
        return view('events.front', compact('events'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.createForm');
    }

    /**
     * Show the frontend events.
     */
    public function frontend()
    {
        $events = Event::all(); // Retrieve all events
        return view('events.front', compact('events')); // Return the frontend view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Image validation
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/events', 'public');
        }

        Event::create([
            'title' => $request->title,
            'location' => $request->location,
            'image' => $imagePath
        ]);

        return redirect('/events')->with('success', 'Event created successfully');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $event = Event::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($event->image) {
                \Storage::disk('public')->delete($event->image); // Delete old image
            }
            $event->image = $request->file('image')->store('uploads/events', 'public');
        }

        $event->update([
            'title' => $request->title,
            'location' => $request->location,
            'image' => $event->image
        ]);

        return redirect('/events')->with('success', 'Event updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);

        if ($event->image) {
            \Storage::disk('public')->delete($event->image); // Delete the image
        }

        $event->delete();

        return redirect('/events')->with('success', 'Event deleted successfully');
    }


}
