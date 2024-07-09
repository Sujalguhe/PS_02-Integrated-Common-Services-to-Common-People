<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Manage Hospitals</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Manage Hospitals</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Registered Hospitals</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Hospital ID</th>
                  <th>Hospital Name</th>
                  <th>Address</th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th>Specialties</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-1">1</td>
                  <td>Hospital</td>
                  <td>123 Main Street</td>
                  <td>9876574356</td>
                  <td>info@abchospital.com</td>
                  <td>Cardiology, Neurology</td>
                  <td>
                    <a href="edithospital.php?id=1" class="btn btn-outline-primary btn-sm">
                      <i class="fa fa-pencil"></i> Edit
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-sm">
                      <i class="fa fa-trash"></i> Delete
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="py-1">2</td>
                  <td>XYZ Hospital</td>
                  <td>456 Oak Avenue</td>
                  <td>9877575454</td>
                  <td>info@xyzhospital.com</td>
                  <td>Oncology, Pediatrics</td>
                  <td>
                    <a href="edithospital.php?id=2" class="btn btn-outline-primary btn-sm">
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
