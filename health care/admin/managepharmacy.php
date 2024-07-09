<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Manage Pharmacies</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Manage Pharmacies</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Registered Pharmacies</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Pharmacy ID</th>
                  <th>Pharmacy Name</th>
                  <th>Address</th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th>Services Offered</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-1">1</td>
                  <td>ABC Pharmacy</td>
                  <td>123 Main Street</td>
                  <td>123-456-7890</td>
                  <td>info@abcpharmacy.com</td>
                  <td>Prescription Medications, Over-the-counter Drugs</td>
                  <td>
                    <a href="editpharmacy.php?id=1" class="btn btn-outline-primary btn-sm">
                      <i class="fa fa-pencil"></i> Edit
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-sm">
                      <i class="fa fa-trash"></i> Delete
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="py-1">2</td>
                  <td>XYZ Pharmacy</td>
                  <td>456 Oak Avenue</td>
                  <td>987-654-3210</td>
                  <td>info@xyzpharmacy.com</td>
                  <td>Home Healthcare Products, Personal Care Items</td>
                  <td>
                    <a href="editpharmacy.php?id=2" class="btn btn-outline-primary btn-sm">
                      <i class="fa fa-pencil"></i> Edit
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-sm">
                      <i class="fa fa-trash"></i> Delete
                    </a>
                  </td>
                </tr>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>
