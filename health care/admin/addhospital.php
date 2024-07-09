<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add New Hospital</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Hospital</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Hospital Information</h4>
            <form class="forms-sample" method="POST" action="savehospital.php">
              <div class="form-group">
                <label for="hospitalName">Hospital Name</label>
                <input type="text" class="form-control" id="hospitalName" name="hospitalName" placeholder="Hospital Name" required="">
              </div>
              <div class="form-group">
                <label for="hospitalAddress">Address</label>
                <input type="text" class="form-control" id="hospitalAddress" name="hospitalAddress" placeholder="Address" required="">
              </div>
              <div class="form-group">
                <label for="hospitalPhone">Phone Number</label>
                <input type="text" class="form-control" id="hospitalPhone" name="hospitalPhone" placeholder="Phone Number" required="">
              </div>
              <div class="form-group">
                <label for="hospitalEmail">Email</label>
                <input type="email" class="form-control" id="hospitalEmail" name="hospitalEmail" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <label for="hospitalSpecialties">Specialties</label>
                <textarea class="form-control" id="hospitalSpecialties" name="hospitalSpecialties" rows="4" placeholder="Specialties" required=""></textarea>
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
