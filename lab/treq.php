<?php

require 'header.php'; 
require '../php/connect.php';   
$email=$_SESSION['email'];
$e="select labid from lab where email='$email'"; 
$m=mysqli_query($conn,$e);
$a=mysqli_fetch_assoc($m);
$j=$a['labid'];


$s="SELECT * FROM testbooking,category,labtest where testbooking.testid=labtest.testid and category.categoryid=labtest.categoryid and labtest.labid='$j' and testbooking.status=-1";
 $rslt=mysqli_query($conn,$s);

?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Test Requests</h1> 
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
    <h4 class="card-title">Pending Requests</h4>
  
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
          <th scope="col">Action</th>

          
      
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
          <td style="width: 110%;"> <button type="button" class="btn btn-primary btn-sm" onclick="document.addfrm.tbookingid.value=<?php echo $f['tbookingid'];?>" data-bs-toggle="modal" data-bs-target="#basicModal" >
               Add Slot
              </button></td>
          <td><?php echo $f['bookingdate'];?></td>
          <td><?php echo $f['homeservice'];?></td>

         
          
          <td><div class="btn-group">
          <a class="btn btn-success" href="reqin.php?id=<?php echo $em; ?>">Accept</a>&nbsp;
             <a class="btn btn-danger" href="deltest.php?id=<?php echo $em; ?>" onclick="{if(confirm('Are you sure?')==false)return false}" >Reject</a>
         </div></td>
         </tr>
        <?php } ?><tr>
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>
</div>
</section>
</main>

<div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Time Slot </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form name="addfrm" action="slot.php" method="POST"> 
                    <div class="modal-body">
                     
                       <input type="hidden" name="tbookingid"  value="">
                       <input type="time"  name="slot" class="form-control" placeholder="Add Stock">
                       <label>Add Slot</label> 
                

                     
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div><!-- End Basic Modal-->
<?php
require 'footer.php';
?>
