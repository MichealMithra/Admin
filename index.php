<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
include("auth.php"); //include auth.php file on all secure pages

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="utf-8"> -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <!-- <link href="css/boxicons.min.css" rel="stylesheet"> -->
  <!-- <link href="quill/quill.snow.css" rel="stylesheet"> -->
  <!-- <link href="quill/quill.bubble.css" rel="stylesheet"> -->
  <!-- <link href="remixicon/remixicon.css" rel="stylesheet"> -->
  <!-- <link href="simple-datatables/style.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="MI">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  <div class="form">
  <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
  <p>This is secure area.</p>
</div>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     
      <li class="nav-item">
        <a class="nav-link collapsed"  href="insert.php">
          <i class="bi bi-journal-text"></i><span>Insert</span>
        </a>
      </li><!-- End Insert Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="view.php">
          <i class="bi bi-menu-button-wide"></i><span>View</span>
        </a>
      </li><!-- End View Nav -->

      <!--<li class="nav-item">
        <a class="nav-link collapsed" href="register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li> End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

     

      

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main" >

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
              <p>Welcome to Dashboard.</p></h5>

              <!-- General Details -->
              <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <div class="form">
              <p><a href="index.php">Home</a></p>
              <p><a href="insert.php">Insert New Record</a></p>
              <p><a href="view.php">View Records</a></p>
              <p><a href="logout.php">Logout</a></p>
            </div>
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

           
            </div>
          </div>

        </div>

       
      </div>
    </section>


  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Admin</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="apexcharts/apexcharts.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="chart.js/chart.umd.js"></script>
  <script src="echarts/echarts.min.js"></script>
  <script src="quill/quill.js"></script>
  <script src="simple-datatables/simple-datatables.js"></script>
  <script src="tinymce/tinymce.min.js"></script>
  <script src="php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
