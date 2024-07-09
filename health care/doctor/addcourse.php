<?php include 'header.php'; ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Course Registration</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Course</a></li>
          <li class="breadcrumb-item active" aria-current="page">New Course Registration</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="add_course.php">
              <div class="form-group">
                <label for="courseName">Course Name</label>
                <input type="text" class="form-control" id="courseName" name="courseName" placeholder="Course Name" required="">
              </div>
              <div class="form-group">
                <label for="courseDuration">Duration</label>
                <input type="text" class="form-control" id="courseDuration" name="courseDuration" placeholder="Duration" required="">
              </div>
              <div class="form-group">
                <label for="courseContent">Content</label>
                <input type="text" class="form-control" id="courseContent" name="courseContent" placeholder="Content (comma separated)" required="">
              </div>
              <div class="form-group">
                <label for="originalPrice">Original Price</label>
                <input type="number" class="form-control" id="originalPrice" name="originalPrice" placeholder="Original Price" required="">
              </div>
              <div class="form-group">
                <label for="discountedPrice">Discounted Price</label>
                <input type="number" class="form-control" id="discountedPrice" name="discountedPrice" placeholder="Discounted Price" required="">
              </div>
              <div class="form-group">
                <label for="collegePrice">College Price</label>
                <input type="number" class="form-control" id="collegePrice" name="collegePrice" placeholder="College Price" required="">
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
