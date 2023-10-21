<?php
require "../php/connect.php";
require "header.php";
$sql="select * from orders where status=0";
$a=mysqli_query($conn,$sql);
$num=mysqli_num_rows($a);

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>View Requests</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item active">Requests</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">View Delivery Requests</h5>

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
                  <td><a class="btn btn-success"  href="hreqin.php?id=<?php echo $em; ?>">Accept</a></td>


        

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