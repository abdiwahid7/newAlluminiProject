<!-- filepath: /C:/Users/hp/desktop/laravel/project/newAluminiProject_L_10/resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/AluminiStories') }}">Alumini Stories</a></li>
            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/events') }}">Events</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html><!-- filepath: /C:/Users/hp/desktop/laravel/project/newAluminiProject_L_10/resources/views/contact.blade.php -->
@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
@endsection
