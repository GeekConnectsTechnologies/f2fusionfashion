<?php
  //include('login.php'); // Includes Login Script
  //if(isset($_SESSION['login_user'])){
  //header("location: ../landing_page/index.php"); // Redirecting To Profile Page
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>F2 Fusion Fashion | Admin Panel</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../backendassets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../backendassets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../backendassets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../backendassets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../backendassets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../backendassets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../backendassets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../backendassets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../backendassets/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" >
                <div class="form-group">
                  <input class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  
            	<!--<?php echo $error ?>-->
            	    <input type="submit" name="submit" value="Login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >
                  <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a>-->
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
  <script src="../backendassets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../backendassets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../backendassets/js/off-canvas.js"></script>
  <script src="../backendassets/js/hoverable-collapse.js"></script>
  <script src="../backendassets/js/template.js"></script>
  <script src="../backendassets/js/settings.js"></script>
  <script src="../backendassets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
