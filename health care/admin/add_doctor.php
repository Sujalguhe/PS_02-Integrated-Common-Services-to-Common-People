<?php
// Initialize variables to store form data
$name = $specialization = $contact = $email = $fees = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = $_POST["doctorName"];
    $specialization = $_POST["specialization"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $fees = $_POST["consultationFee"];

    // Prepare command to execute Python script
    $command = "python insert_doctor.py \"$name\" \"$specialization\" \"$contact\" \"$email\" \"$fees\"";

    // Execute Python script
    $output = shell_exec($command);

    // Check if Python script executed successfully
    if ($output) {
        // Python script echoed the last inserted ID or success message
        echo "<script>
alert('Doctor Added Successfully !!');
window.location.href='dashboard.php';
</script>";
    } else {
        // Error in Python script execution
        echo "Error executing Python script.";
    }
}
?>
