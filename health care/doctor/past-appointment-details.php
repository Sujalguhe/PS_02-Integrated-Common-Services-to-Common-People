<?php
include 'header.php'; // Include header (assuming it contains necessary HTML structure and styles)
?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Appointment Details</h3>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <?php
            // Example data for appointment details (assuming it's retrieved from a database)
            $appointment = [
              'id' => 1,
              'date' => '2023-12-15',
              'time' => '10:00 AM',
              'doctor' => 'Dr. Smith',
              'specialty' => 'Cardiology',
              'description' => 'Follow-up visit for heart checkup.'
            ];
            ?>

            <h4 class="card-title">Appointment ID: <?php echo $appointment['id']; ?></h4>
            <p><strong>Date:</strong> <?php echo $appointment['date']; ?></p>
            <p><strong>Time:</strong> <?php echo $appointment['time']; ?></p>
            <p><strong>Doctor:</strong> <?php echo $appointment['doctor']; ?></p>
            <p><strong>Specialty:</strong> <?php echo $appointment['specialty']; ?></p>

            <h4 class="mt-4">Appointment Description</h4>
            <p><?php echo $appointment['description']; ?></p>

            <a href="past-appointments.php" class="btn btn-primary mt-3">Back to Past Appointments</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
include 'footer.php'; // Include footer (assuming it closes necessary HTML structure and scripts)
?>
