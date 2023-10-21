<?php

require 'header.php'; 
require '../php/connect.php';   
$email=$_SESSION['email'];
$e="select labid from lab where email='$email'"; 
$m=mysqli_query($conn,$e);
$a=mysqli_fetch_assoc($m);
$j=$a['labid'];


$s="SELECT * FROM testbooking,category,labtest where testbooking.testid=labtest.testid and category.categoryid=labtest.categoryid and labtest.labid='$j' and testbooking.status=2";
 $rslt=mysqli_query($conn,$s);

?>

<main id="main" class="main">

<div class="pagetitle">
  <h1> Test Requests</h1> 
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Test Requests</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
           


<section class="section">
<div class="col-lg-12">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Accepted by Sample Collector</h4>
  
    <table class="table datatable">
      <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Customer Name</th>
          <th scope="col">Address</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Test Type</th>
          <th scope="col">Test Rate</th>
          <th scope="col">Slot</th>
          <th scope="col">Booking Date</th>
          <th scope="col">HomeService</th>
          <th scope="col">Status</th>

          
      
        </tr>
      </thead>
      <tbody>
      <tr>
          <?php
          while($f=mysqli_fetch_assoc($rslt)){  $em=$f['tbookingid'];?>
          <th scope="row"><?php echo $f['tbookingid']; ?></th>
          <td><?php echo $f['name']; ?> </td>
          <td><?php echo $f['address']; ?> </td>
          <td><?php echo $f['phone'];?></td>
          <td><?php echo $f['emailid'];?></td>
          <td><?php echo $f['type'];?></td>
          <td><?php echo $f['testrate'];?></td>
          <td><?php echo $f['slot'];?></td>
          <td><?php echo $f['bookingdate'];?></td>
          <td><?php echo $f['homeservice'];?></td>
          <td><font color="green">Sample Collector Accepted</font></td>

         
          
       
         </tr>
        <?php } ?>
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>
</div>
</section>
</main>


<?php
require 'footer.php';
?>
