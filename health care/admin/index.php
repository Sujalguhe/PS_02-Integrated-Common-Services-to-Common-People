<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login |  Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <style>
    .auth-form-light {
      background: #fff;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    .brand-logo img {
      width: 50%;
    }
    .form-control-lg {
      padding: 12px 20px;
      font-size: 1rem;
      border-radius: 4px;
    }
    .btn-gradient-primary {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      border: none;
      color: #fff;
    }
    .btn-facebook {
      background: #3b5998;
      color: #fff;
      border: none;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left p-5">
              
              <h4 class="text-center">Integrated Health Hub</h4>
              <h6 class="font-weight-light text-center">Sign in to continue</h6>
              <form class="pt-3" action="login.php" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="mt-3 d-grid gap-2">
                  <input type="submit" name="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">

                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    
                  </div>
                 
                </div>
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <script src="assets/js/jquery.cookie.js"></script>
  <!-- endinject -->
</body>
</html>
