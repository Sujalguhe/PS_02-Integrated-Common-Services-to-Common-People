<?php
// Validate form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs (basic validation for demonstration)
    $serviceName = htmlspecialchars(strip_tags(trim($_POST['serviceName'])));
    $servicePrice = floatval($_POST['servicePrice']); // Assuming price is decimal
    $providerName = htmlspecialchars(strip_tags(trim($_POST['providerName'])));
    $providerContact = htmlspecialchars(strip_tags(trim($_POST['providerContact'])));
    $providerCity = htmlspecialchars(strip_tags(trim($_POST['providerCity'])));

    // Prepare Python command
    $command = "python insert_service.py \"$serviceName\" \"$servicePrice\" \"$providerName\" \"$providerContact\" \"$providerCity\"";

    // Execute the Python command (adjust path if necessary)
    exec($command, $output, $return);

    // Check Python script execution status
    if ($return === 0) {
        echo "<script>alert('Service added successfully.'); window.location='addlab.php';</script>";
    } else {
        echo "<script>alert('Failed to add service.'); window.location='addlab.php';</script>";
    }
} else {
    // Invalid request method
    echo "<script>alert('Invalid request.'); window.location='addservice.php';</script>";
}
?>
