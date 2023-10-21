<?php
require "../php/connect.php";
require "header.php";
$sql="select * from orders where status=1 ";
$a=mysqli_query($conn,$sql);
$num=mysqli_num_rows($a);

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Update Status</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item active">Update Status</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Delivery Status Update</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Phone</th>
                  <th scope="col" >Email</th>
                   <th scope="col">Payment Mode</th>
                  <th scope="col" >Order Date</th>
                  <th scope="col" >Total Price</th>
                  <th scope="col" >Action</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $n=1;
             
                while($row=mysqli_fetch_assoc($a))
                {
                    $em=$row['orderid'];
                  ?>
                  <tr>
                    <th scope="row"><?php echo $n; $n=$n+1;?></th>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['address']?></td>
                  <td><?php echo $row['phone'];?></td>
                  <td><?php echo $row['emailid'];?></td>
                  <td><?php echo $row['paymentmode'];?></td>
                  <td><?php echo $row['orderdate'];?></td>
                  <td><?php echo $row['price'];?></td>
                  <td><a class="btn btn-success"  href="sin.php?id=<?php echo $em; ?>">Delivered</a></td>


        

              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
        <!-- End Table with stripped rows -->

      </div>
    </div>

  </div>
</div>

<div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Service Status Update</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Phone</th>
                  <th scope="col" >Email</th>
                  <th scope="col" >Booking Date</th>
                  <th scope="col" >Slot</th>
                  

                </tr>
              </thead>
              <tbody>
                <?php
                $n=1;
                $sql="select * from testbooking where status=2";
                $a=mysqli_query($conn,$sql);
                while($row1=mysqli_fetch_assoc($a))
                {
                    $es=$row1['tbookingid'];
                  ?>
                  <tr>
                    <th scope="row"><?php echo $n; $n=$n+1;?></th>
                    <td><?php echo $row1['name']?></td>
                    <td><?php echo $row1['address']?></td>
                  <td><?php echo $row1['phone'];?></td>
                  <td><?php echo $row1['emailid'];?></td>
                  <td><?php echo $row1['bookingdate'];?></td>
                  <td><?php echo $row1['slot'];?></td>
                  <td><a class="btn btn-success"  href="hsin.php?id=<?php echo $es; ?>">Collected</a></td>


        

              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
        <!-- End Table with stripped rows -->

      </div>
    </div>

  </div>
</div>
</section>





</main><!-- End main -->

<?php
require "footer.php";
?>