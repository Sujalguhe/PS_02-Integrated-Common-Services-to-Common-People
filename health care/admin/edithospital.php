<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Edit Hospital Details</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="managehospital.php">Manage Hospitals</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Hospital</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Hospital Information</h4>
            <form class="forms-sample" method="POST" action="updatehospital.php">
              <div class="form-group">
                <label for="hospitalName">Hospital Name</label>
                <input type="text" class="form-control" id="hospitalName" name="hospitalName" placeholder="Hospital Name" value="ABC Hospital" required="">
              </div>
              <div class="form-group">
                <label for="hospitalAddress">Address</label>
                <input type="text" class="form-control" id="hospitalAddress" name="hospitalAddress" placeholder="Address" value="123 Main Street" required="">
              </div>
              <div class="form-group">
                <label for="hospitalPhone">Phone Number</label>
                <input type="text" class="form-control" id="hospitalPhone" name="hospitalPhone" placeholder="Phone Number" value="123-456-7890" required="">
              </div>
              <div class="form-group">
                <label for="hospitalEmail">Email</label>
                <input type="email" class="form-control" id="hospitalEmail" name="hospitalEmail" placeholder="Email" value="info@abchospital.com" required="">
              </div>
              <div class="form-group">
                <label for="hospitalSpecialties">Specialties</label>
                <textarea class="form-control" id="hospitalSpecialties" name="hospitalSpecialties" rows="4" placeholder="Specialties" required="">Cardiology, Neurology</textarea>
              </div>
              <input type="hidden" name="hospitalId" value="1"> <!-- Replace with dynamic hospital ID -->
              <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
              <a href="managehospital.php" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>
