<?php
require('../php/connect.php');
require('header.php');
$sql="SELECT * FROM scollector,district WHERE email IN (SELECT username FROM login WHERE(status=0 AND utype='s')) and scollector.distid=district.distid";
$rslt=mysqli_query($conn,$sql);
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Admin Panel</li>
                </ol>
        </nav>
    </div>
    <section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sample Collector Verification</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                    <th scope="col">Pincode</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Verify</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $n=1;
                     while($x=mysqli_fetch_assoc($rslt))
                     {
                      $em=$x['email'];
                         ?>
                         <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td><?php echo $x['name']?></td>
                    <td><?php echo $x['address']?></td>
                    <td><?php echo $x['dob']?></td>
                    <td><?php echo $x['city']?></td>
                    <td><?php echo $x['dname']?></td>
                    <td><?php echo $x['pincode']?></td>
                    <td><?php echo $x['email']?></td>
                    <td><?php echo $x['phone']?></td>

                    
                    <td><div class="btn-group">
                        <a class="btn btn-success" href="accepts.php?id=<?php echo $em; ?>">Accept</a><br><br>
                        <a class="btn btn-danger" href="rejects.php?id=<?php echo $em; ?>" onclick="{if(confirm('Are you sure?')==false)return false}" >Reject</a>
                    </div></td>
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
</main>
<?php
require ('footer.php');
?>