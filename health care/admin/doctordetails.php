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
                  // Mock data for demonstration
                  $doctors = [
                    1 => ["doctorName" => "Dr. John Doe", "specialization" => "Cardiology", "contact" => "123-456-7890", "email" => "john.doe@example.com", "consultationFee" => "$200"],
                    2 => ["doctorName" => "Dr. Jane Smith", "specialization" => "Neurology", "contact" => "123-456-7891", "email" => "jane.smith@example.com", "consultationFee" => "$250"],
                    3 => ["doctorName" => "Dr. Emily Johnson", "specialization" => "Pediatrics", "contact" => "123-456-7892", "email" => "emily.johnson@example.com", "consultationFee" => "$150"],
                    4 => ["doctorName" => "Dr. Michael Brown", "specialization" => "Orthopedics", "contact" => "123-456-7893", "email" => "michael.brown@example.com", "consultationFee" => "$180"],
                    5 => ["doctorName" => "Dr. Sarah Wilson", "specialization" => "Dermatology", "contact" => "123-456-7894", "email" => "sarah.wilson@example.com", "consultationFee" => "$220"]
                  ];

                  $doctorId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
                  $doctor = isset($doctors[$doctorId]) ? $doctors[$doctorId] : null;

                  if ($doctor) {
                    echo "
                      <tr>
                        <th>Doctor Name</th>
                        <td>{$doctor['doctorName']}</td>
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
                        <td>{$doctor['consultationFee']}</td>
                      </tr>
                    ";
                  } else {
                    echo "
                      <tr>
                        <td colspan='2'>No doctor found with the specified ID.</td>
                      </tr>
                    ";
                  }
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
