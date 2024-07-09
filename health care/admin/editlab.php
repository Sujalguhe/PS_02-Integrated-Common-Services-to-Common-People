<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Edit Lab Details</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="managelab.php">Manage Labs</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Lab</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Lab Information</h4>
            <form class="forms-sample" method="POST" action="updatelab.php">
              <div class="form-group">
                <label for="labName">Lab Name</label>
                <input type="text" class="form-control" id="labName" name="labName" placeholder="Lab Name" value="ABC Labs" required="">
              </div>
              <div class="form-group">
                <label for="labAddress">Address</label>
                <input type="text" class="form-control" id="labAddress" name="labAddress" placeholder="Address" value="123 Main Street" required="">
              </div>
              <div class="form-group">
                <label for="labPhone">Phone Number</label>
                <input type="text" class="form-control" id="labPhone" name="labPhone" placeholder="Phone Number" value="123-456-7890" required="">
              </div>
              <div class="form-group">
                <label for="labEmail">Email</label>
                <input type="email" class="form-control" id="labEmail" name="labEmail" placeholder="Email" value="info@abclabs.com" required="">
              </div>
              <div class="form-group">
                <label for="labServices">Services Offered</label>
                <textarea class="form-control" id="labServices" name="labServices" rows="4" placeholder="Services Offered" required="">Pathology, Microbiology</textarea>
              </div>
              <input type="hidden" name="labId" value="1"> <!-- Replace with dynamic lab ID -->
              <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
              <a href="managelab.php" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>
