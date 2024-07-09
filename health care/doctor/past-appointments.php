<?php
include 'header.php'; // Include header (assuming it contains necessary HTML structure and styles)

// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "healthcare"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch past appointments for a specified doctor, sorted in descending order by date
function fetch_past_appointments($conn, $doctor) {
    // Get today's date
    $today = date('Y-m-d');

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT * FROM appointments WHERE doctor = ? AND appointment_date < ? ORDER BY appointment_date DESC");
    $stmt->bind_param("ss", $doctor, $today);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch all rows as an associative array
    $appointments = $result->fetch_all(MYSQLI_ASSOC);

    // Close the statement
    $stmt->close();

    return $appointments;
}

// Fetch past appointments for the specified doctor

$appointments = fetch_past_appointments($conn, $dname);

?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Past Appointments</h3>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Past Appointments</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Patient Name</th>
                  <th>Doctor</th>
                 
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (!empty($appointments)) {
                    foreach ($appointments as $appointment) {
                        echo "<tr>";
                        echo "<td>" . date('Y-m-d', strtotime($appointment['appointment_date'])) . "</td>";
                        echo "<td>" . date('h:i A', strtotime($appointment['appointment_time'])) . "</td>";
                        echo "<td>" . htmlspecialchars($appointment['patient_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($appointment['doctor']) . "</td>";
                        
                        echo "<td>" . htmlspecialchars($appointment['status']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No past appointments found.</td></tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
// Close the database connection
$conn->close();

include 'footer.php'; // Include footer (assuming it closes necessary HTML structure and scripts)
?>
