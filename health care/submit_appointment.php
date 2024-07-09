<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $patient_name = $_POST["patient_name"];
    $doctor = $_POST["doctor"];
    $service = $_POST["service"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $details = $_POST["details"];

    // Validate and sanitize inputs (add more validation as needed)
    $patient_name = htmlspecialchars(trim($patient_name));
    $doctor = htmlspecialchars(trim($doctor));
    $service = htmlspecialchars(trim($service));
    $date = htmlspecialchars(trim($date));
    $time = htmlspecialchars(trim($time));
    $details = htmlspecialchars(trim($details));

    // Python script path
    $python_script = 'store_appointment.py';

    // Command to execute Python script with arguments
    $command = escapeshellcmd("python $python_script \"$patient_name\" \"$doctor\" \"$service\" \"$date\" \"$time\" \"$details\"");

    // Execute the command
    $output = shell_exec($command);

    // Handle success or failure (you can customize this based on your Python script's output)
    if ($output === false) {
        echo "Error executing Python script.";
    } else {
        echo "<script>
alert('Appointment Created!!');
window.location.href='bookingid.php';
</script>";
    }

} else {
    // Redirect or handle invalid requests
    echo "Invalid request.";
}

?>
