<?php
//include('../login/session.php');
//if (!isset($_SESSION['login_user'])) {
  //  header("location: ../login/index.php");
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
  <link rel="stylesheet" href="../backendassets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../backendassets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../backendassets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../backendassets/images/favicon.png" />
</head>
<body onload="salutation()">
  <div class="container-scroller">
    
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="../backendassets/images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../backendassets/images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text" id="salutation"></h1>
            <h3 class="welcome-sub-text" id="quote"></h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          
          
          
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../backendassets/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../backendassets/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Pankaj Shahdadpuri</p>
                
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
              <a class="dropdown-item" href="../login/logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Landing Page</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Video Call Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Header Video</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Brand Video</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Client Testimonial</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Engagement to Reception</a></li>
              </ul>
            </div>
          </li>
          
        
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../backendassets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../backendassets/vendors/chart.js/Chart.min.js"></script>
  <script src="../backendassets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../backendassets/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../backendassets/js/off-canvas.js"></script>
  <script src="../backendassets/js/hoverable-collapse.js"></script>
  <script src="../backendassets/js/template.js"></script>
  <script src="../backendassets/js/settings.js"></script>
  <script src="../backendassets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../backendassets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../backendassets/js/dashboard.js"></script>
  <script src="../backendassets/js/Chart.roundedBarCharts.js"></script>

  <script>
    function salutation()
    {
        const date = new Date();
        let hour = date.getHours(); 
        if(hour>=17)
        {
            document.getElementById("salutation").innerHTML = "Good Evening Pankaj";
        }   
        else if (hour>=12)
        {
            document.getElementById("salutation").innerHTML = "Good Afternoon Pankaj";
        }
        else
        {
            document.getElementById("salutation").innerHTML = "Good Morning Pankaj";
        }

        const quote = ["Fashion is the armor to survive the reality of everyday life.", "Style is something each of us already has, all we need to do is find it.", "Fashions fade, style is eternal.", "Fashion is a language that creates itself in clothes to interpret reality.", "In difficult times, fashion is always outrageous.","Life is too short to wear boring clothes", "Life isn't perfect but your outfit can be"];
        const random = Math.floor(Math.random() * quote.length);
        document.getElementById("quote").innerHTML = quote[random];
        console.log(random, months[random]);
    }
  </script>
  <!-- End custom js for this page-->
</body>

</html>