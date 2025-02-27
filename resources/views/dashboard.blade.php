@extends('adminlayout.admin')

@section('content')
<!-- Content Area -->
<div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-4 shadow rounded-lg">
        <h3 class="text-lg font-semibold">Total Events</h3>
        <p class="text-2xl font-bold">{{ $totalEvents }}</p>
    </div>
    <div class="bg-white p-4 shadow rounded-lg">
        <h3 class="text-lg font-semibold">Upcoming Events</h3>
        <p class="text-2xl font-bold">{{ $upcomingEvents }}</p>
    </div>
    <div class="bg-white p-4 shadow rounded-lg">
        <h3 class="text-lg font-semibold">Past Events</h3>
        <p class="text-2xl font-bold">{{ $pastEvents }}</p>
    </div>
</div>

<!-- <div class="mt-6">
    <h2 class="text-xl font-bold mb-4">Events</h2>
    <div class="bg-white p-4 shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($events as $event)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $event->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $event->location }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

 <div class="mt-6 flex space-x-4">
    <a href="{{ route('events.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">View Events</a>
    <a href="/AluminiStories" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">View Alumni Stories</a>
</div> -->
@endsection
