x@extends('adminlayout.admin')

@section('content')

<section class="alumni-success">
    <h2 class="section-title">Upcoming Events</h2>
    <div class="success-grid">

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('events.create') }}">
        <button class="btn btn-primary mb-5">Create an event</button>
    </a>

    @foreach ($events as $event)
    <div class="success-card">
        <h4>{{ $event->title }}</h4>
        <p><strong>Location:</strong> {{ $event->location }}</p>
        <p>Event ID: {{ $event->id }}</p>
        @if ($event->image_path)
            <img src="{{ asset('storage/' . $event->image_path) }}" class="card-img-top" alt="{{ $event->title }}">
        @endif
        <a href="{{ route('events.edit', $event->id) }}" class="btn">Edit</a>
        <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    @endforeach
    </div>
</section>

<style>
.alert {
    padding: 15px;
    background-color: #d4edda;
    color: #155724;
    border-radius: 4px;
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #005f73;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.btn-primary:hover {
    background-color: #0a9396;
}

.success-card {
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    margin: 10px;
    width: 250px; /* Smaller width for the boxes */
    transition: transform 0.3s ease-in-out;
}

.success-card:hover {
    transform: translateY(-5px);
}

.success-card h4 {
    margin-bottom: 5px;
    font-size: 1.4rem; /* Adjusted font size */
    color: #e76f51;
}

.success-card p {
    font-size: 0.9rem; /* Adjusted font size */
    color: #555;
    margin-bottom: 5px;
}

.success-card .btn {
    display: inline-block;
    padding: 8px 12px;
    background-color: #f4a261;
    color: white;
    text-decoration: none;
    font-size: 0.9rem; /* Adjusted font size */
    border-radius: 6px;
    transition: background-color 0.3s ease-in-out;
}

.success-card .btn:hover {
    background-color: #e76f51;
}
</style>

@endsection
