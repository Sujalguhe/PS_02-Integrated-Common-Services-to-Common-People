<?php


// Check if service_id parameter is present in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the service_id parameter to prevent SQL injection
    $service_id = intval($_GET['id']);

    $host = "localhost";
    $dbname = "healthcare";
    $username = "root";
    $password = "";
    try {
        // Create database connection
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL statement to delete service
        $sql = "DELETE FROM services WHERE id = :service_id";
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':service_id', $service_id, PDO::PARAM_INT);
        
        // Execute the statement
        $stmt->execute();
        
        // Check if any row was affected
        $count = $stmt->rowCount();
        
        if($count > 0) {
            // Redirect to manage services page after successful deletion
            header("Location: managelab.php");
            exit();
        } else {
            // Service with the given ID not found
            echo "Service not found.";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    // Close connection
    $conn = null;
} else {
    // Redirect to error page if service_id parameter is not provided
    header("Location: error.php");
    exit();
}
?>
