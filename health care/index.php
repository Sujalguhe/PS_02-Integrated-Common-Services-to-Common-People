<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrated Health Hub </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .hero {
            background-image: url('hero.jpg');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 3em;
        }

        .hero p {
            font-size: 1.5em;
        }

        .cta-buttons button {
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .services {
            text-align: center;
            padding: 50px 20px;
        }

        .services h2 {
            font-size: 2em;
        }

        .service-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            text-align: center;
            width: 200px;
        }

        .card .icon {
            font-size: 2em;
        }

        .features {
            background-color: #f1f1f1;
            padding: 50px 20px;
        }

        .features h2 {
            text-align: center;
            font-size: 2em;
        }

        .features ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        .features ul li {
            margin: 10px 0;
            font-size: 1.2em;
        }

        .testimonials {
            padding: 50px 20px;
        }

        .testimonials h2 {
            text-align: center;
            font-size: 2em;
        }

        .carousel {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .testimonial {
            text-align: center;
            width: 200px;
        }

        .testimonial img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .cta {
            text-align: center;
            padding: 50px 20px;
        }

        .cta h2 {
            font-size: 2em;
        }

        .cta-buttons button {
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 10px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .social-media a img {
            width: 30px;
            margin: 0 10px;
        }
        .features {
            background-color: #f1f1f1;
            padding: 50px 20px;
            text-align: center;
        }

        .features h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .features-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .feature-item {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            width: 200px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .feature-icon {
            font-size: 3em;
            color: #007bff;
            margin-bottom: 15px;
        }

        .feature-text {
            font-size: 1.2em;
            color: #555;
        }

        @media (max-width: 768px) {
            .features-list {
                flex-direction: column;
                align-items: center;
            }

            .feature-item {
                width: 80%;
                margin-bottom: 20px;
            }
        }

        .testimonials {
    background-color: #f9f9f9;
    padding: 50px 20px;
    text-align: center;
}

.testimonials h2 {
    font-size: 2.5em;
    margin-bottom: 30px;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.carousel {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.testimonial {
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    padding: 20px;
    width: 250px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.testimonial img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
}

.testimonial p {
    font-style: italic;
    color: #555;
    margin-bottom: 15px;
}

.testimonial h4 {
    font-size: 1.2em;
    color: #007bff;
}

@media (max-width: 768px) {
    .carousel {
        flex-direction: column;
        align-items: center;
    }

    .testimonial {
        width: 80%;
        margin-bottom: 20px;
    }
}

.hero {
    background-image: url('hero.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 100px 20px;
}

.hero-content h1 {
    font-size: 3em;
    margin-bottom: 20px;
}

.hero-content p {
    font-size: 1.5em;
    margin-bottom: 40px;
}

.service-cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.card {
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 200px;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card .icon {
    font-size: 3em;
    color: #007bff;
    margin-bottom: 15px;
}

.card h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #333;
}

.card p {
    font-size: 1em;
    margin-bottom: 20px;
    color: #666;
}

.btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .service-cards {
        flex-direction: column;
        align-items: center;
    }

    .card {
        width: 80%;
        margin-bottom: 20px;
    }
}

.cta {
    background-color: #007bff;
    color: white;
    text-align: center;
    padding: 60px 20px;
}

.cta h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.cta p {
    font-size: 1.5em;
    margin-bottom: 30px;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.cta-buttons .btn-primary,
.cta-buttons .btn-secondary {
    padding: 15px 30px;
    font-size: 1.2em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.cta-buttons .btn-primary {
    background-color: white;
    color: #007bff;
    border: 2px solid #007bff;
}

.cta-buttons .btn-primary:hover {
    background-color: #0056b3;
    color: white;
}

.cta-buttons .btn-secondary {
    background-color: transparent;
    color: white;
    border: 2px solid white;
}

.cta-buttons .btn-secondary:hover {
    background-color: white;
    color: #007bff;
}

@media (max-width: 768px) {
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }

    .cta-buttons .btn-primary,
    .cta-buttons .btn-secondary {
        width: 80%;
        margin-bottom: 10px;
    }
}




    </style>
    <header>
        <div class="logo" style="text-align: center;">Integrated Health Hub</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="bookappointment.php">Book Appointment</a></li>
                <li><a href="search.php">Search</a></li>

                <li><a href="about.php">About Us</a></li>
                

                <li><a href="viewservices.php">View Services</a></li>

                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
        
    </header>

    <section class="hero">
    <div class="hero-content" style="color: black;">
        <h1>Your Health, Our Priority</h1>
        <p>Manage Your Healthcare Needs Effortlessly</p>
        <div class="service-cards">
            <div class="card">
                <div class="icon">&#128506;</div>
                <h3>Nearby Hospitals</h3>
                <p>Locate hospitals near you.</p>
                <button class="btn"  onclick="openNearbyHospitals()">Find Hospitals Near Me</button>
            </div>
            <div class="card">
                <div class="icon">&#128197;</div>
                <h3>Book Appointment</h3>
                <p>Schedule your appointments with Doctor.</p>
               <a href="bookappointment.php"> <button class="btn">Book Appointment</button></a>
            </div>
            <div class="card">
                <div class="icon">&#128657;</div>
                <h3>Emergency Services</h3>
                <p>Access emergency services quickly.</p>
                <button class="btn"  onclick="openNearbyservice()">View Emergency Services</button>
            </div>
            <div class="card">
                <div class="icon">🧓</div>
                <h3>Elder Care </h3>
                <p>Access Elder Care Services quickly.</p>
                <button class="btn"  onclick="openNearbyserviceem()">View Emergency Services</button>
            </div>
        </div>
    </div>
</section>


    

   <section class="features">
    <h2>Why Choose Us</h2>
    <ul class="features-list">
        <li class="feature-item">
            <div class="feature-icon">&#128507;</div>
            <div class="feature-text">Nearest Hospitals, Pharmacy, etc.</div>
        </li>
        <li class="feature-item">
            <div class="feature-icon">&#128197;</div>
            <div class="feature-text">Easy Appointment Booking</div>
        </li>
        <li class="feature-item">
            <div class="feature-icon">&#128657;</div>
            <div class="feature-text">Quick Access to Emergency Services</div>
        </li>
        <li class="feature-item">
            <div class="feature-icon">&#128274;</div>
            <div class="feature-text">Diagnostic Centers</div>
        </li>
        <li class="feature-item">
            <div class="feature-icon">&#128241;</div>
            <div class="feature-text">Elder Care and Nursing Services</div>
        </li>
    </ul>
</section>


    <section class="testimonials">
    <h2>What Our Users Say</h2>
    <div class="carousel">
        <div class="testimonial">
           
            <p>"This system has made managing my healthcare so much easier!"</p>
            <h4>Ranga</h4>
        </div>
        <div class="testimonial">
           
            <p>"Booking appointments is now hassle-free."</p>
            <h4>Surya</h4>
        </div>
        <div class="testimonial">
           
            <p>"Quick access to emergency services saved me valuable time."</p>
            <h4>Ambaan</h4>
        </div>
    </div>
</section>


    <section class="cta">
    <h2>Login as</h2>
    <p>Select your role to access the system.</p>
    <div class="cta-buttons">
       <a href="doctor/"> <button class="btn-primary">Doctor</button></a>
        
       <a href="admin/"> <button class="btn-secondary">Admin</button></a>
    </div>
</section>



    <footer>
        
        <div class="contact-info">
             <p>Phone: +91 8975436254 </p>
            <p>Email: sujalguhe@mitra.ac.in </p>
            <p>PRMITR,Anjangaon Bari Road,
            Badnera-Amravati 444 701</p>
        </div>
        
    </footer>


    <script>
function openNearbyHospitals() {
    window.open('https://www.google.com/maps/search/nearby+hospitals', '_blank');
}

function openNearbyservice()
{
    window.open('https://www.google.com/maps/search/nearby+emergency+services', '_blank');
}

function openNearbyserviceem()
{
    window.open('https://www.google.com/maps/search/elder+care+services', '_blank');
}
</script>

</body>
</html>
