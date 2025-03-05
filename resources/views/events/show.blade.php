@extends('adminlayout.admin')

@section('admincontent')
<div class="container mx-auto mt-5 p-4 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-semibold mb-4">Event Details</h2>
    <p class="text-lg"><strong>Title:</strong> {{ $event->title }}</p>
    <p class="text-lg"><strong>Location:</strong> {{ $event->location }}</p>
    <a href="{{ route('events.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 inline-block mt-4">Back to Events</a>

</div>
@endsection
