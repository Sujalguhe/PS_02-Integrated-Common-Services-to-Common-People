<?php
// Placeholder data for demonstration purposes
$appointment = [
    'id' => 1,
    'time' => '09:00 AM',
    'patient_name' => 'John Doe',
    'doctor_name' => 'Dr. Smith',
    'appointment_type' => 'General Checkup',
    'notes' => 'Patient has a history of allergies.'
];

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
            <h4 class="card-title">Appointment ID: <?php echo $appointment['id']; ?></h4>
            <p><strong>Time:</strong> <?php echo $appointment['time']; ?></p>
            <p><strong>Patient Name:</strong> <?php echo $appointment['patient_name']; ?></p>
            <p><strong>Doctor:</strong> <?php echo $appointment['doctor_name']; ?></p>
            <p><strong>Type:</strong> <?php echo $appointment['appointment_type']; ?></p>
            <p><strong>Notes:</strong> <?php echo $appointment['notes']; ?></p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
include 'footer.php'; // Include footer (assuming it closes necessary HTML structure and scripts)
?>
