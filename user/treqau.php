<?php

require 'header.php'; 
require '../php/connect.php';   
$email=$_SESSION['email'];


$s="SELECT * FROM testbooking,category,labtest where testbooking.testid=labtest.testid and category.categoryid=labtest.categoryid and testbooking.emailid='$email'";
 $rslt=mysqli_query($conn,$s);

?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Bookings</h1> 
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">My Bookings</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
           


<section class="section">
<div class="col-lg-12">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">My Bookings</h4>
  
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
          <th scope="col">Print Result</th>

          
      
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
          <?php if($f['status']==2){ ?>
          <td class="text-success">Accepted </td> 

          <?php } 
           else if($f['status']==3){ 
            $j= $f['tbookingid'];?>
          <td class="text-primary">Completed</td><td> <a class="btn btn-primary btn-sm" href="invoice.php?id=<?php echo $j; ?>">Print</a></td> 
          <?php } 
          else {?>
          <td class="text-danger">pending</td> <?php } ?>
        

         
          
          <!-- <td><div class="btn-group">
          <a class="btn btn-success" href="reqin.php?id=<?php echo $em; ?>">Accept</a>&nbsp;
             <a class="btn btn-danger" href="deltest.php?id=<?php echo $em; ?>" onclick="{if(confirm('Are you sure?')==false)return false}" >Reject</a>
         </div></td> -->
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
                       <label>Time Slot</label> 
                

                     
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
