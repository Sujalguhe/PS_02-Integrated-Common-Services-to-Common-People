<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add New Pharmacy</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Pharmacy</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Pharmacy Information</h4>
            <form class="forms-sample" method="POST" action="savepharmacy.php">
              <div class="form-group">
                <label for="pharmacyName">Pharmacy Name</label>
                <input type="text" class="form-control" id="pharmacyName" name="pharmacyName" placeholder="Pharmacy Name" required="">
              </div>
              <div class="form-group">
                <label for="pharmacyAddress">Address</label>
                <input type="text" class="form-control" id="pharmacyAddress" name="pharmacyAddress" placeholder="Address" required="">
              </div>
              <div class="form-group">
                <label for="pharmacyPhone">Phone Number</label>
                <input type="text" class="form-control" id="pharmacyPhone" name="pharmacyPhone" placeholder="Phone Number" required="">
              </div>
              <div class="form-group">
                <label for="pharmacyEmail">Email</label>
                <input type="email" class="form-control" id="pharmacyEmail" name="pharmacyEmail" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <label for="pharmacyServices">Services Offered</label>
                <textarea class="form-control" id="pharmacyServices" name="pharmacyServices" rows="4" placeholder="Services Offered" required=""></textarea>
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
