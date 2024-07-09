<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add New Service</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Service</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Service Information</h4>
            <form class="forms-sample" method="POST" action="saveservice.php">
              <div class="form-group">
                <label for="serviceName">Service Name</label>
                <input type="text" class="form-control" id="serviceName" name="serviceName" placeholder="Service Name" required="">
              </div>
              <div class="form-group">
                <label for="servicePrice">Price</label>
                <input type="text" class="form-control" id="servicePrice" name="servicePrice" placeholder="Price" required="">
              </div>
              <div class="form-group">
                <label for="providerName">Provider Name</label>
                <input type="text" class="form-control" id="providerName" name="providerName" placeholder="Provider Name" required="">
              </div>
              <div class="form-group">
                <label for="providerContact">Contact</label>
                <input type="text" class="form-control" id="providerContact" name="providerContact" placeholder="Contact" required="">
              </div>
              <div class="form-group">
                <label for="providerCity">City</label>
                <input type="text" class="form-control" id="providerCity" name="providerCity" placeholder="City" required="">
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
