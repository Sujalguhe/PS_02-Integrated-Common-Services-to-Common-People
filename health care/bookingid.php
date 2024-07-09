<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 600px;
            margin: 0 auto;
        }

        h2 {
            color: #007bff;
        }

        .booking-id {
            margin-top: 20px;
            font-size: 1.5em;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $command = "python bookingconf.py";
        $output = shell_exec($command);
        
        ?>
        <h2>Appointment Confirmed!</h2>
        <p>Your appointment has been successfully booked.</p>
        <h4>Appointment Id :- <?php echo $output;  ?></h4>
        <h4>Store this for furture refrence</h4>
        
        

        <a href="index.php" class="btn">Back to Home</a>
    </div>
</body>
</html>
