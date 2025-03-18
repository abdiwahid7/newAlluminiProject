<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlumniStory; // Assuming you will create this model for alumni stories

class AlumniController extends Controller
{
    /**
     * Display a listing of the alumni stories.
     */
    public function index()
    {
        $stories = AlumniStory::paginate(9); // Adjust the pagination as needed
        return view('alumini.alumniStories', compact('stories'));
    }
    public function front()
    {
        $alumini = Alumini::paginate('12');
        return view('alumini.front', compact('alumini'));
    }

    /**
     * Show the form for creating a new alumni story.
     */
    public function create()
    {
        return view('alumini.createForm'); // Adjust the view as needed
    }

    /**
     * Store a newly created alumni story in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        AlumniStory::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('alumni.index')->with('success', 'Alumni story created successfully');
    }

    /**
     * Show the contact us form.
     */
    public function contact()
    {
        return view('contact'); // Create this view for the contact us page
    }

    /**
     * Handle the contact form submission.
     */
    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Handle the contact form submission logic (e.g., send an email)

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully');
    }
}
