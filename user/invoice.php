<?php
session_start();
require "../php/connect.php";
$email=$_SESSION['email'];
$sql="select * from cuser,district where email='$email' and cuser.distid=district.distid";
$result=mysqli_query($conn,$sql);
$f=mysqli_fetch_assoc($result);

$s="select * from cart where userid='$email'";
$rslt=mysqli_query($conn,$s);
$num=mysqli_num_rows($rslt);
 




 $sql1="select * from category,products where category.categoryid=products.categoryid";
 $rslt1=mysqli_query($conn,$sql1);
$d=mysqli_fetch_assoc($rslt1);

$sql3="select * from category,labtest where category.categoryid=labtest.categoryid";

$rslt2=mysqli_query($conn,$sql3);
$e=mysqli_fetch_assoc($rslt2);
?>

<html lang="en">
<head>
<style>
   
 

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

  <title>User Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
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

</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../login/images/download1.png" alt="error">
        <span class="d-none d-lg-block" >User Panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

     

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="cart.php" >
            <i class="bi bi-cart"></i>
            <span class="badge bg-primary badge-number"><?php echo $num; ?></span>
          </a><!-- End cart Icon -->

         

        </li><!-- End Notification Nav -->

      
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo '../uploads/user/'.$f['profilepic'];?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $f['name'];?></span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>
                <?php echo $f['name'];?>

              </h6>
              <span>Customer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="viewc.php">
                <i class="bi bi-journal-text"></i>
                <span>View Complaint</span>
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
    <a class="nav-link collapsed" data-bs-target="#forms-nav"  href="treqau.php">
      <i class="bi bi-journal-text"></i><span>My Bookings</span>
    </a>
   
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav"  href="myorders.php">
      <i class="bi bi-cart"></i><span>My Orders</span>
    </a>
   
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav"  href="complaint.php">
      <i class="bi bi-journal-text"></i><span>Complaint</span>
    </a>
   
  </li><!-- End Forms Nav -->

 

 
  

</ul>

</aside><!-- End Sidebar-->
<main id="main" class="main">
  <?php
  $book=$_GET['id'];
   $n=mysqli_query($conn,"select testbooking.name,testbooking.address,testbooking.emailid,testbooking.phone from testbooking,labtest,lab,category where testbooking.testid=labtest.testid and labtest.labid=lab.labid and category.categoryid=labtest.categoryid and testbooking.tbookingid='$book'");
  $na=mysqli_fetch_assoc($n);
  $n=mysqli_query($conn,"select * from testbooking,labtest,lab,category where testbooking.testid=labtest.testid and labtest.labid=lab.labid and category.categoryid=labtest.categoryid and testbooking.tbookingid='$book'");
  while($em=mysqli_fetch_assoc($n)){

  ?>

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

    <div class="container-fluid">
        <div id="ui-view" data-select2-id="ui-view">
            <div>
                <div class="card">
                    <div class="card-header">Test Result
                        <strong></strong>
                        <a style="float:right;" class="btn btn-sm btn-primary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
                            <i class="fa fa-print"></i> Print Report</a>
                            

                    </div>
                    <br>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-4">
                                <h6 class="mb-3">Laboratory Details</h6>
                                <div>
                                    <strong><?php echo $em['name']?></strong>
                                </div>
                                <div>License Number: <?php echo $em['licenseno']?></div>
                                <div>Address:<?php echo $em['address']."<br>".$em['city'];?></div>
                                <div>Email: <?php echo $em['email']?></div>
                                <div>Phone: <?php echo $em['phone']?></div>
                                
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-3">Patient Details</h6>
                                <div>
                                  
                               
                                    <strong><?php echo $na['name'];?></strong>
                                </div>
                                <div>Address:<?php echo $na['address'];?></div>
                              
                                <div>Email: <?php echo $na['emailid'];?></div>
                                <div>Phone: <?php echo $na['phone'];?></div>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-3">Booking Details:</h6>
                                
                                <div>orderdate:<?php echo " ".$em['bookingdate'];?></div>
                                <div>Slot:<?php echo " ".$em['slot'];?></div>
                                
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Item</th>
                                        <th>Description</th>
                                      
                                        <th class="right">Test Rate</th>
                                        <th class="right">Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        <td class="left"><?php echo $em['type'];?></td>
                                        <td class="left"><?php echo $em['description'];?></td>
                                        <td class="right"><?php 

                                        $d=$em['testrate']+300;
                                        echo "₹".$d.".00";?></td>
                                        <td class="right"><?php echo $em['result'];?></td>
                                    </tr>
                                  
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5" style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left">
                                                <strong>Test Rate</strong>
                                            </td>
                                            <td class="right"><?php echo "₹".$d.".00";?></td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <strong>GST(10%)</strong>
                                            </td>
                                            <td class="right"><?php 

                                              $g=($em['testrate']*10)/100;
                                              echo "₹".$g.".00";?></td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <strong>Discount (20%)</strong>
                                            </td>
                                            <td class="right"><?php echo "₹".$em['testrate'];?></td>
                                        </tr>
                                       
                                        <tr>
                                            <td class="left">
                                                <strong>Total</strong>
                                            </td>
                                            <td class="right">
                                                <strong><?php $t=$em['testrate']+$g;echo "₹".$t;?></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>
 
    </section>

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <p style="color:black;text-align:center;">&nbsp;<space>&copy; 2022 PharmaDude. All rights reserved | Design by Dominic</space>	</p>


</body>

</html>

  