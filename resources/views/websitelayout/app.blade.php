<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Alumni</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('download.jpeg') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    color: #333;
}

/* Navbar */
.navbar {
    background: #005f73; /* Changed to deep teal */
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.navbar a {
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    transition: 0.3s ease-in-out;
}

.nav-links {
    list-style: none;
    display: flex;
    padding: 0;
    margin: 0;
}

.nav-links li {
    margin-left: 25px;
}

.nav-links a:hover {
    text-decoration: underline;
    color: #f4a261;
}


/* Welcome to IST Alumni Section */
.welcome-alumni {
    background: linear-gradient(135deg, #2a9d8f, #264653);
    padding: 80px 20px;
    text-align: center;
    color: white;
}

.welcome-alumni .section-title {
    font-size: 2.5rem;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-weight: bold;
    color: #f4a261;
    transition: 0.3s;
}

.welcome-alumni .section-title:hover {
    text-decoration: underline;
    color: #e76f51;
}

.welcome-alumni p {
    font-size: 1.2rem;
    color: #f8f9fa;
    max-width: 800px;
    margin: auto;
    line-height: 1.6;
}

.welcome-alumni .btn {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 20px;
    background-color: #f4a261;
    color: white;
    text-decoration: none;
    font-size: 1.1rem;
    border-radius: 6px;
    transition: background-color; 0.3s ease-in-out, transform 0.2s;
}

.welcome-alumni .btn:hover {
    background-color: #e76f51;
    transform: translateY(-3px);
}

/* Outstanding Alumni Success Stories */
/* Outstanding Alumni Success Stories Section */
.alumni-success {
    background: linear-gradient(135deg, #005f73, #0a9396);
    padding: 60px 20px;
    text-align: center;
    color: white;
}

.alumni-success .section-title {
    font-size: 2.2rem;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #f4a261;
    transition: 0.3s;
}

.alumni-success .section-title:hover {
    text-decoration: underline;
    color: #e76f51;
}

.success-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
}

.success-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    width: 350px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    text-align: center;
    border-left: 6px solid #f4a261; /* Accent left border */
}

.success-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.25);
}

.success-card h4 {
    margin-bottom: 10px;
    font-size: 1.6rem;
    color: #e76f51;
}

.success-card p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 10px;
}

.success-card .highlight {
    font-weight: bold;
    color: #005f73;
}

.success-card .btn {
    display: inline-block;
    padding: 8px 15px;
    background-color: #f4a261;
    color: white;
    text-decoration: none;
    font-size: 1rem;
    border-radius: 6px;
    transition: background-color; 0.3s ease-in-out;
}

.success-card .btn:hover {
    background-color: #e76f51;
}

/* Exciting Alumni Gatherings */
/* Upcoming Alumni Events Section */
.alumni-events {
    background: linear-gradient(135deg, #264653, #2a9d8f);
    padding: 60px 20px;
    text-align: center;
    color: white;
}

.alumni-events .section-title {
    font-size: 2.2rem;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #f4a261;
    transition: 0.3s;
}

.alumni-events .section-title:hover {
    text-decoration: underline;
    color: #e76f51;
}

.events-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
}

.event-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    width: 350px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    text-align: center;
    border-left: 6px solid #f4a261; /* Accent left border */
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.25);
}

.event-card h4 {
    margin-bottom: 10px;
    font-size: 1.6rem;
    color: #e76f51;
}

.event-card p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 10px;
}

.event-card .highlight {
    font-weight: bold;
    color: #264653;
}

.event-card .btn {
    display: inline-block;
    padding: 8px 15px;
    background-color: #f4a261;
    color: white;
    text-decoration: none;
    font-size: 1rem;
    border-radius: 6px;
    transition: background-color; 0.3s ease-in-out;
}

.event-card .btn:hover {
    background-color: #e76f51;
}

/* Footer */
/* Footer Section */
.footer {
    background: linear-gradient(135deg, #1d3557, #457b9d);
    color: white;
    padding: 40px 0;
    text-align: center;
    font-size: 1rem;
}

.footer .footer-links {
    list-style: none;
    padding: 0;
    margin: 20px 0;
    display: flex;
    justify-content: center;
    gap: 25px;
}

.footer .footer-links li {
    display: inline;
}

.footer .footer-links a {
    color: #f4a261;
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: bold;
    transition: color 0.3s ease-in-out;
}

.footer .footer-links a:hover {
    color: #e76f51;
    text-decoration: underline;
}

.footer .social-icons {
    margin-top: 15px;
}

.footer .social-icons a {
    margin: 0 10px;
    display: inline-block;
    color: white;
    font-size: 1.4rem;
    transition: transform 0.3s ease-in-out, color 0.3s;
}

.footer .social-icons a:hover {
    color: #f4a261;
    transform: scale(1.2);
}

.footer .copyright {
    margin-top: 15px;
    font-size: 0.9rem;
    color: #f8f9fa;
    opacity: 0.8;
}

  </style>
</head>
<body>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

  <!-- Navigation Bar -->
  <nav class="navbar">
    <a href="/">IST Alumni</a>
    <ul class="nav-links">
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/frontalumini">Alumni Stories</a></li>
        <li><a href="/frontevents">Events</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
    </ul>
</nav>
@yield("content")
<!-- end nav -->

  <!-- Footer -->
  <footer class="footer">
    <ul class="footer-links">
        <li><a href="http://127.0.0.1:8000/">About Us</a></li>
        <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
    </ul>

    <div class="social-icons">
        <a href="https://www.facebook.com/p/IST-Alumni-Association-100064713695184/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/iistalumni?lang=en"><i class="fab fa-twitter"></i></a>
        <a href="https://ke.linkedin.com/school/institute-of-software-technologies/"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.instagram.com/ist_turin/p/C3Uc-ifNmL4/?locale=en-TH"><i class="fab fa-instagram"></i></a>
    </div>

    <p class="copyright">© 2024 IST Alumni Network. All Rights Reserved.</p>
</footer>


  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
