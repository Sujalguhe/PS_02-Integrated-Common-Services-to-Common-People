<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Appointment Details</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="viewappointments.php">Appointments</a></li>
          <li class="breadcrumb-item active" aria-current="page">Appointment Details</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Appointment Information</h4>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <?php
                  // Function to sanitize input
                  function sanitize($data) {
                      return htmlspecialchars(strip_tags(trim($data)));
                  }

                  // Get appointment ID from URL
                  $appointmentId = isset($_GET['id']) ? sanitize($_GET['id']) : 0;

                  // Validate appointment ID
                  if (!is_numeric($appointmentId) || $appointmentId <= 0) {
                      echo "<tr><td colspan='2'>Invalid appointment ID.</td></tr>";
                  } else {
                      // Execute Python script to fetch appointment details
                      $pythonScript = "python appointmentdetails.py $appointmentId";
                      $output = shell_exec($pythonScript);

                      // Display fetched details
                      if (!empty($output)) {
                          echo $output;
                      } else {
                          echo "<tr><td colspan='2'>No appointment found with ID: {$appointmentId}</td></tr>";
                      }
                  }
                  ?>
                </tbody>
              </table>
              <a href="viewappointments.php" class="btn btn-gradient-primary mt-3">Back to Appointments</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
