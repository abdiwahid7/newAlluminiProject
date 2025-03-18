@extends('adminlayout.admin')

<style>
.alumni-success {
    padding: 20px;
    background-color: #f9f9f9;
}

.section-title {
    text-align: center;
    font-size: 2em;
    margin-bottom: 20px;
}

.success-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
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
    font-size: 1rem;
    border-radius: 6px;
    transition: background-color 0.3s ease-in-out;
}

.success-card .btn:hover {
    background-color: #e76f51;
}
</style>

@section('content')
<section class="alumni-success">
    <h2 class="section-title">Outstanding Alumni Success Stories</h2>
    <div class="success-grid">
        <div class="success-card">
            <h4>Dr. Jane Doe</h4>
            <p><span class="highlight">CEO</span> at InnovateTech</p>
            <p>Recognized as one of the top 50 entrepreneurs in 2024.</p>
            <a href="#" class="btn">Read More</a>
        </div>
        <div class="success-card">
            <h4>Michael Smith</h4>
            <p><span class="highlight">Research Scientist</span> at NASA</p>
            <p>Led a groundbreaking study on climate change solutions.</p>
            <a href="#" class="btn">Read More</a>
        </div>
        <div class="success-card">
            <h4>Emily Johnson</h4>
            <p><span class="highlight">Best-Selling Author</span></p>
            <p>Published "The Future of AI" – a global bestseller.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </div>
</section>
@endsection
