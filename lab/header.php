<?php
session_start();
require "../php/connect.php";
$email=$_SESSION['email'];
$sql="select * from lab,district where email='$email' and lab.distid=district.distid";
$result=mysqli_query($conn,$sql);
$f=mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>

<style>
    /* .header {
      background-color: #0b0b0b75 !important;
    }
    .sidebar{
      background: #00000091 !important;
    } */
     /* .nav-link,.collapsed{
      background:#48494a00 !important;
      color:white !important;
    } 
     .card{
     background:#00000061 !important;
    }
    .text-center,.card-title,.table,.card-body,.bi-menu-button-wide,.nav-content,.white{
      color:white !important;
    }
     .sidebar-nav .nav-content a {
      color:white !important;
    }
    .bi-circle,.bi-grid,.bi-layout-text-window-reverse,.bi-journal-text,.bi-bar-chart,.bi-gem,.bi-list{
      color:white !important; 
    }   */

 

  </style>


  <script type="text/javascript">
  function validate()
  {
    if(!(document.pass.renewPassword.value == document.pass.newPassword.value))
    {
      document.getElementById('paswrd').innerHTML="*Should be same as password!";
      return false;
    }
    else
     return true;
  }
  </script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laboratory Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body >
<!-- style="background-image: url('../login/images/bck.png');background-repeat:no-repeat;background-size: cover;"
  ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../login/images/download.png" alt="error" height="50" width="50">
        <span class="d-none d-lg-block">Laboratory Panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <br>
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> --><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

       
      

       

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="<?php echo '../uploads/lab/'.$f['profilepic'];?>" alt="Profile" class="rounded-circle">
            <span style="text-transform: capitalize;" class="d-none d-md-block dropdown-toggle ps-2"><?php echo $f['name'];?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6 style="text-transform: capitalize;">
                <?php echo $f['name'];?>

              </h6>
              <span>Laboratory</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php ">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           

            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../php/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" href="profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li>

 

  <li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#forms-nav" href="addprod.php">
      <i class="bi bi-bar-chart"></i><span>Manage Products</span>
    </a>
   
  </li><!-- End Charts Nav -->

  <li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#forms-nav" href="addtest.php">
      <i class="bi bi-gem"></i><span>Manage Test</span>
    </a>
  
    <li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Test Requests</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="treq.php">
              <i class="bi bi-circle"></i><span>Pending </span>
            </a>
          </li>
          <li>
            <a href="treqa.php">
              <i class="bi bi-circle"></i><span>Accepted </span>
            </a>
          </li>
          <li>
            <a href="treqco.php">
              <i class="bi bi-circle"></i><span>Collected</span>
            </a>
          </li>

          <li>
            <a href="treqc.php">
              <i class="bi bi-circle"></i><span>Completed </span>
            </a>
          </li>

          
          <li>

            
          </ul>
    </li>
  </li>
</ul>



  

</ul>

</aside><!-- End Sidebar-->