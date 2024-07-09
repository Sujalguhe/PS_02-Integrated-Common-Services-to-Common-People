<?php
// Include header.php which contains the HTML header and navigation
include 'header.php';

// Database connection parameters
$host = 'localhost'; // Replace with your host
$username = 'root'; // Replace with your MySQL username
$password = ''; // Replace with your MySQL password
$database = 'healthcare'; // Replace with your database name

// Create a connection to MySQL
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all services
$sql = "SELECT * FROM services";
$result = $conn->query($sql);

?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Manage Services</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Services</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Registered Services</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Service ID</th>
                                    <th>Service Name</th>
                                    <th>Price</th>
                                    <th>Provider Name</th>
                                    <th>Contact</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Fetch data from the result set
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>{$row['id']}</td>";
                                        echo "<td>{$row['service_name']}</td>";
                                        echo "<td>{$row['price']}</td>";
                                        echo "<td>{$row['provider_name']}</td>";
                                        echo "<td>{$row['contact']}</td>";
                                        echo "<td>{$row['city']}</td>";
                                        echo "<td>
                                                  
                                                  <a href='deleteservice.php?id={$row['id']}' class='btn btn-outline-danger btn-sm'>
                                                      <i class='fa fa-trash'></i> Delete
                                                  </a>
                                              </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='7'>No services found</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    

<?php
// Close MySQL connection
$conn->close();

// Include footer.php which contains the HTML footer
include 'footer.php';
?>
