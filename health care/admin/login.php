<?php
// Function to sanitize input data
function sanitize_input($data) {
    global $conn;
    return htmlspecialchars(mysqli_real_escape_string($conn, trim($data)));
}

// Validate admin credentials using Python script
function validate_admin($username, $password) {
    $command = escapeshellcmd("python validate_admin.py " . $username . " " . $password);
    $output = shell_exec($command);
    return trim($output);
}

// Initialize variables to store form data
$username = $password = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate admin credentials
    $result = validate_admin($username, $password);

    if ($result === "Login successful") {
        // Redirect to dashboard.php upon successful login
        header("Location: dashboard.php");
        exit();
    } else {
        // Handle invalid credentials
        echo "<script>
        alert('Invalid Login!!');
        window.location.href='index.php';
        </script>";
    }
}
?>
