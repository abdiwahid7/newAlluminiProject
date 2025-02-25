@extends('adminlayout.admin')

@section('content')
<!-- Content Area -->
<div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">

<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
    <p>Welcome to the admin dashboard!</p>


<div class="mt-6 flex space-x-4">
    <a href="{{ route('events.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">View Events</a>
    <a href="/AluminiStories" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">View Alumni Stories</a>
</div>
@endsection
