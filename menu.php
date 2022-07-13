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
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
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
            <img src="../backendassets/images/100x100_LOGO.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../backendassets/images/LOGO_fav.png" alt="logo" />
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
              <a class="dropdown-item" href="../login/logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout</a>
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
          <!--<li class="nav-item">
            <a class="nav-link" href="../landing_page/index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Landing Page</span>
            </a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#lp-content" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Landing Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lp-content">

              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../landing_page/index.php">Hero Image</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../landing_page/campaign.php">Campaigns</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../landing_page/viewacceimage.php">Accessories</a></li>
              </ul>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Video Call Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <!-- <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Header Video</a></li>
              </ul> -->
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../videopage/brandvideo.php">Brand Video</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../videopage/clienttestimonial.php">Client Testimonial</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../videopage/engtorecp.php">Engagement to Reception</a></li>
              </ul>
            </div>
          </li>

          

          <li class="nav-item">
            <a class="nav-link" href="../enquiry/landingpage.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Enquiry</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../enquiry/videocall.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Video Call Enquiry</span>
            </a>
          </li>

        </ul>
      </nav>