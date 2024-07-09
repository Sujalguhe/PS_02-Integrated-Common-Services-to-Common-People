<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Doctor Management</h3>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Doctors</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Doctor Name</th>
                  <th>Specialization</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Consultation Fee</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // Establish database connection (replace with your actual database credentials)
                $conn = mysqli_connect('localhost', 'root', '', 'healthcare');
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch doctors from database
                $sql = "SELECT * FROM doctor";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td class='py-1'>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['specialization'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>$" . $row['fees'] . "</td>";
                    echo "<td>";
                    echo "<a href='doctordetail.php?id=" . $row['id'] . "'>";
                    echo "<button style='color: red; border: 3px solid black; border-radius: 9px;'>";
                    echo "<i class='fa fa-eye'></i>";
                    echo "</button>";
                    echo "</a>";
                    echo "</td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='7'>No doctors found</td></tr>";
                }

                // Close database connection
                mysqli_close($conn);
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
