@extends('websitelayout.app')

@section('content')
<section class="contact-us">
    <h2 class="section-title">Contact Us</h2>
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</section>

<style>
.contact-us {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.section-title {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #005f73;
}

.form-group {
    margin-bottom: 15px;
    width: 100%;
    max-width: 400px; /* Limit the width of the form */
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

textarea {
    resize: vertical; /* Allow vertical resizing */
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
