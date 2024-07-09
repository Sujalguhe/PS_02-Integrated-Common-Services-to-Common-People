<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Services - Integrated Health Hub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style type="text/css">
        /* General Styles (from your styles.css) */
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

        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        /* Services Page Specific Styles */

        .services {
            padding: 50px 20px;
        }

        .services h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            text-align: center;
        }

        .services-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .service {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .service h3 {
            font-size: 1.8em;
            margin-bottom: 10px;
            color: #007bff;
        }

        .service p {
            margin-bottom: 5px;
        }

        .service .contact-info {
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .services-list {
                grid-template-columns: 1fr;
            }
        }

        .team-section {
            padding: 50px 20px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .team-section h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .team-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .team-member {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            max-width: 300px;
            text-align: center;
        }

        .team-member h3 {
            font-size: 1.8em;
            margin-bottom: 10px;
            color: #007bff;
        }

        .team-member p {
            margin-bottom: 5px;
        }

        .team-member .contact-info {
            margin-top: 10px;
        }

        .team-member img {
            width: 100%;
            height: 300px;
            margin-bottom: 10px;
        }
    </style>
    <header>
        <div class="logo">Integrated Health Hub</div>
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

    <section class="team-section">
        <h2>Our Team: Tri-Techs</h2>
        <div class="team-list">
            <div class="team-member">
                <img src="https://mkhoobwfnjwxxxmglgpg.supabase.co/storage/v1/object/public/report/sujal.jpg" alt="Sujal Guhe Photo">
                <h3>Sujal Guhe</h3>
                <p><strong>Branch:</strong>Electronics and Telecommunication</p>
                <p><strong>Year:</strong>3rd Year</p>
                <p><strong>Email:</strong>sujalguhe@mitra.ac.in</p>
                <p><strong>College:</strong>Prof. Ram Meghe Institute of Technology and Research.</p>
            </div>
            <div class="team-member">
                <img src="https://mkhoobwfnjwxxxmglgpg.supabase.co/storage/v1/object/public/report/mrunali.jpg" alt="Mrunali Yawale Photo">
                <h3>Mrunali Yawale</h3>
                <p><strong>Branch:</strong>Information Technology</p>
                <p><strong>Year:</strong>3rd Year</p>
                <p><strong>Email:</strong>yawalemrunali21@gmail.com</p>
                <p><strong>College:</strong>Prof. Ram Meghe Institute of Technology and Research.</p>
            </div>
            <div class="team-member">
                <img src="3.jpeg" alt="samiksha More Photo">
                <h3>Samiksha More</h3>
                <p><strong>Branch:</strong>Information Technology</p>
                <p><strong>Year:</strong>3rd Year</p>
                <p><strong>Email:</strong> samikshamore2004@gmail.com</p>
                <p><strong>College:</strong>Prof. Ram Meghe Institute of Technology and Research.</p>
            </div>
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
</body>
</html>
