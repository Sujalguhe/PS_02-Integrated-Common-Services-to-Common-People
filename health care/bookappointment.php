<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Integrated Health Hub</title>
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

        /* Book Appointment Page Specific Styles */

        .book-appointment {
            background-color: #f1f1f1;
            padding: 50px 20px;
            text-align: center;
        }

        .book-appointment h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        select, input[type="text"], input[type="date"], input[type="time"], textarea {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .btn-primary {
            padding: 15px 30px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }

            .btn-primary {
                width: 100%;
            }
        }
    </style>
    <header>
        <div class="logo">Integrated Health Hub</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="bookappointment.php">Book Appointment</a></li>

                <li><a href="viewservices.php">View Services</a></li>

                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
    </header>

    <section class="book-appointment">
        <div class="container">
            <h2>Book an Appointment</h2>
            <form action="submit_appointment.php" method="POST">
                <div class="form-group">
                    <label for="patient_name">Patient Name:</label>
                    <input type="text" id="patient_name" name="patient_name" required>
                </div>
                <div class="form-group">
                    <label for="doctor">Select Doctor:</label>
                    <select id="doctor" name="doctor" required>
                        <?php
                        // Establish database connection
                        $servername = "localhost";
                        $username = "root"; // Replace with your MySQL username
                        $password = ""; // Replace with your MySQL password
                        $database = "healthcare"; // Replace with your database name

                        $conn = new mysqli($servername, $username, $password, $database);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // SQL query to fetch doctors from database
                        $sql = "SELECT id, name FROM doctor";
                        $result = $conn->query($sql);

                        // Output options for dropdown
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No doctors available</option>";
                        }

                        // Close database connection
                        $conn->close();
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="service">Select Service:</label>
                    <select id="service" name="service" required>
                        <option value="general_checkup">General Checkup</option>
                        <option value="dental">Dental</option>
                        <option value="orthopedic">Orthopedic</option>
                        <option value="dermatology">Dermatology</option>
                        <option value="child_care">Child Care</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Select Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Select Time:</label>
                    <input type="time" id="time" name="time" required>
                </div>
                <div class="form-group">
                    <label for="details">Additional Details:</label>
                    <textarea id="details" name="details" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-primary">Confirm Appointment</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="contact-info">
            <p>Phone: +91 8975436254</p>
            <p>Email: sujalguhe@mitra.ac.in</p>
            <p>Address: PRMITR,Anjangaon Bari Road,
            Badnera-Amravati 444 701</p>
        </div>
    </footer>
</body>
</html>
