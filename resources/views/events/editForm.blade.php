
@extends('layouts.front')

@section('content')

<div class="form-container">
    <h1 class="form-title">Edit Event</h1>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Enter Post Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $event->title) }}">
        </div>

        <div class="form-group">
            <label for="location">Enter Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $event->location) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Event</button>
    </form>
</div>

<style>
.form-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
}

.form-title {
    font-size: 2rem;
    margin-bottom: 20px;
    text-align: center;
    color: #005f73;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
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
</style>

@endsection
