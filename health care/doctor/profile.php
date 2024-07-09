<?php
// Placeholder data for demonstration purposes


include 'header.php'; // Include header (assuming it contains necessary HTML structure and styles)

$user = [
    'id' => 1,
    'name' =>  $dname,
    'email' => $username1
];
?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">User Profile</h3>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <!-- Profile Details -->
                <h4 class="card-title">Name: <?php echo $user['name']; ?></h4>
                <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                <p><strong>User ID:</strong> <?php echo $user['id']; ?></p>

                <!-- Update Profile Form (example) -->
                <form>
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>" required="" readonly="">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" readonly required>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
include 'footer.php'; // Include footer (assuming it closes necessary HTML structure and scripts)
?>
