<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">View Appointments</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Appointments</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Appointments</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Appointment ID</th>
                  <th>Patient Name</th>
                  <th>Doctor Name</th>
                  <th>Appointment Date</th>
                  <th>Time</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // Database connection (adjust with your actual database credentials)
                $conn = mysqli_connect('localhost', 'root', '', 'healthcare');
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch appointments from database
                $sql = "SELECT * FROM appointments";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                      <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['patient_name']}</td>
                        <td>{$row['doctor']}</td>
                        <td>{$row['appointment_date']}</td>
                        <td>{$row['appointment_time']}</td>
                        <td>{$row['status']}</td>
                        <td>
                          <a href='appointmentdetails.php?id={$row['id']}'>
                            <button style='color: blue; border: 3px solid black; border-radius: 9px;'>
                              <i class='fa fa-eye'></i>
                            </button>
                          </a>
                        </td>
                      </tr>
                    ";
                  }
                } else {
                  echo "
                    <tr>
                      <td colspan='7'>No appointments found.</td>
                    </tr>
                  ";
                }

                // Close database connection
                mysqli_close($conn);
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
