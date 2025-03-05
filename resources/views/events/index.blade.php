@extends('adminlayout.admin')

@section('content')

<div class="container mt-4">
    <h1 class="text-center mb-4">Events Page</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('events.create') }}">
        <button class="btn btn-primary mb-5">Create an event</button>
    </a>

    <div class="row">
        @foreach ($events as $event)
        <div class="col-md-4 mb-4">
            <div class="card event-card h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $event->title }}</h5>
                    <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                    <p class="small">Event ID: {{ $event->id }}</p>
                    @if ($event->image_path)
                        <img src="{{ asset('storage/' . $event->image_path) }}" class="card-img-top" alt="{{ $event->title }}">
                    @endif
                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

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

.event-card {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    text-align: center;
    border-left: 6px solid #f4a261; /* Accent left border */
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.25);
}

.event-card .card-title {
    margin-bottom: 10px;
    font-size: 1.6rem;
    color: #e76f51;
}

.event-card .card-text {
    font-size: 1rem;
    color: #555;
    margin-bottom: 10px;
}

.event-card .btn {
    display: inline-block;
    padding: 8px 15px;
    background-color: #f4a261;
    color: white;
    text-decoration: none;
    font-size: 1rem;
    border-radius: 6px;
    transition: background-color 0.3s ease-in-out;
}

.event-card .btn:hover {
    background-color: #e76f51;
}
</style>

@endsection
