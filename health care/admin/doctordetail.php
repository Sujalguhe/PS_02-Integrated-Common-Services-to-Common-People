<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Doctor Details</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="managedoctor.php">Doctors</a></li>
          <li class="breadcrumb-item active" aria-current="page">Doctor Details</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Doctor Information</h4>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <?php
                  // Database connection (adjust with your actual database credentials)
                  $conn = mysqli_connect('localhost', 'root', '', 'healthcare');
                  if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                  }

                  // Fetch doctor details based on id from URL parameter
                  $doctorId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
                  $sql = "SELECT * FROM doctor WHERE id = $doctorId";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    $doctor = mysqli_fetch_assoc($result);
                    echo "
                      <tr>
                        <th>Doctor Name</th>
                        <td>{$doctor['name']}</td>
                      </tr>
                      <tr>
                        <th>Specialization</th>
                        <td>{$doctor['specialization']}</td>
                      </tr>
                      <tr>
                        <th>Contact</th>
                        <td>{$doctor['contact']}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{$doctor['email']}</td>
                      </tr>
                      <tr>
                        <th>Consultation Fee</th>
                        <td>{$doctor['fees']}</td>
                      </tr>
                    ";
                  } else {
                    echo "
                      <tr>
                        <td colspan='2'>No doctor found with the specified ID.</td>
                      </tr>
                    ";
                  }

                  // Close database connection
                  mysqli_close($conn);
                  ?>
                </tbody>
              </table>
              <a href="managedoctor.php" class="btn btn-gradient-primary mt-3">Back to Doctors</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
