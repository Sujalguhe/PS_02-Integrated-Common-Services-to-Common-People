<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Doctor Registration</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Doctor</a></li>
          <li class="breadcrumb-item active" aria-current="page">New Doctor Registration</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="add_doctor.php">
              <div class="form-group">
                <label for="doctorName">Doctor Name</label>
                <input type="text" class="form-control" id="doctorName" name="doctorName" placeholder="Doctor Name" required="">
              </div>
              <div class="form-group">
                <label for="specialization">Specialization</label>
                <input type="text" class="form-control" id="specialization" name="specialization" placeholder="Specialization" required="">
              </div>
              <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number" required="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <label for="consultationFee">Consultation Fee</label>
                <input type="number" class="form-control" id="consultationFee" name="consultationFee" placeholder="Consultation Fee" required="">
              </div>
              <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
              <button type="reset" class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>
