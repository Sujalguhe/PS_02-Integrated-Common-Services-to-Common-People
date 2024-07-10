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

        .disease-form {
            margin: 50px auto;
            text-align: center;
        }

        .disease-form input {
            padding: 10px;
            font-size: 1em;
            margin-right: 10px;
        }

        .disease-form button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
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

    <section class="disease-form">
        <h2>Find Hospitals for a Specific Disease</h2>
        <form id="diseaseForm" onsubmit="redirectToMaps(event)">
            <input type="text" id="diseaseName" name="diseaseName" placeholder="Enter Disease Name" required>
            <button type="submit">Find Hospitals</button>
        </form>
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
        function redirectToMaps(event) {
            event.preventDefault();
            const diseaseName = document.getElementById('diseaseName').value;
            const query = encodeURIComponent(`best hospitals for ${diseaseName} near me`);
            const url = `https://www.google.com/maps/search/${query}`;
            window.location.href = url;
        }
    </script>
</body>
</html>
