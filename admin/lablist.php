<?php
require('../php/connect.php');
require('header.php');
$sql="select * from login,lab, district where login.username=lab.email and status=0 and district.distid=lab.distid";
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
              <h5 class="card-title">List of Labs</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                    <th scope="col">Pincode</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $n=1;
                     while($x=mysqli_fetch_assoc($rslt))
                     {
                         ?>
                         <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td><?php echo $x['name']?></td>
                    <td><?php echo $x['address']?></td>
                    <td><?php echo $x['city']?></td>
                    <td><?php echo $x['dname']?></td>
                    <td><?php echo $x['pincode']?></td>
                    <td><?php echo $x['email']?></td>
                    <td><?php echo $x['phone']?></td>
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