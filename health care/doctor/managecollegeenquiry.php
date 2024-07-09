<?php
include 'header.php';
include '../db.php';
?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">College Enquiries</h3>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Enquiries</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>College Name</th>
                  <th>Email</th>
                  <th>State</th>
                  <th>City</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM `college`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  $i = 1;
                  while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                      <td class="py-1"><?php echo $i; $i++; ?></td>
                      <td><?php echo htmlspecialchars($row["name"]); ?></td>
                      <td><?php echo htmlspecialchars($row["email"]); ?></td>
                      <td><?php echo htmlspecialchars($row["state"]); ?></td>
                      <td><?php echo htmlspecialchars($row["city"]); ?></td>
                      <td>
                        <a href="collegeenquiryaction.php?id=<?php echo $row['id']; ?>" >
                          <button style="color: red; border: 3px solid black; border-radius: 9px;">
                            <i class="fa fa-eye"></i>
                          </button>
                        </a>
                      </td>
                    </tr>
                    <?php
                  }
                } else {
                  echo "<tr><td colspan='6'>No enquiries found</td></tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
include 'footer.php';
$conn->close();
?>
