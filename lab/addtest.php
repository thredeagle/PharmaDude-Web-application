<?php
require 'header.php'; 
require '../php/connect.php';   
 $sql="select * from category,labtest where category.categoryid=labtest.categoryid";
 $sql1="select type from category WHERE categoryname='Test'";
 $rslt1=mysqli_query($conn,$sql);
$rslt=mysqli_query($conn,$sql1);
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Manage Tests</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Manage Tests</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
           


<section class="section">
      <div class="row">
        <div class="col-lg-12">

        
        <div class="card">
            <div class="card-body">
              <h2 class="text-center pt-5">Add Tests</h2>

              <!-- General Form Elements -->
              <form action="addtestphp.php" method="POST" enctype="multipart/form-data">
                <div class="row  p-3">
                  
                 
                </div>

                <div class="col-sm-8 offset-2 ">
                    <select name="test" class="form-control" required>
                    <option disabled="disabled" selected="selected">Enter Test</option>
                    <?php
                       while($x=mysqli_fetch_assoc($rslt))
                        {
                          ?>
                   <option><?php echo $x['type']; ?></option>
                    <?php
                        }
                    ?>
                    
                    </select> 
                  </div>
              
                  <br>

                  <div class="col-sm-8 offset-2 ">
                    <input type="text" name="description" class="form-control" placeholder="Enter Description">
                    
                  </div>

                  <br>

                
                  <div class="col-sm-8 offset-2 ">
                    <input type="text" name="rate" class="form-control" placeholder="Enter Test Rate">
                    
                  </div>

                  <br>

                  <div class="col-sm-8 offset-2 ">
                   <input type="file" name="image" class="form-control" id="img" >
                  </div>
                  <br>

                  <div class="col-sm-8 offset-2 ">
                      Home Service Availability<br><br>
                      <input type="radio" name="ans" value="ans1">Available &nbsp;&nbsp;
                      <input type="radio" name="ans" value="ans2">Not Available
                 
                  </div>

        

                </div>
                <div class="row mb-3 text-center">
                  
                  <div class="col-sm-6 offset-sm-3">
                    <input type="submit" class="btn btn-info" >
                    
                  </div>
                </div>
             

              </form><!-- End General Form Elements -->
              </div>
            </div>
          
          <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Products</h4>
            
              <table class="table datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Test Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Test Rate</th>
                    <th scope="col">HomeService</th>
                    <th scope="col">Image</th>
                
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    while($f=mysqli_fetch_assoc($rslt1)){  $em=$f['testid'];?>
                    <th scope="row"><?php echo $f['testid']; ?></th>
                    <td><?php echo $f['type']; ?> </td>
                    <td><?php echo $f['description'];?></td>
                    <td><?php echo $f['testrate'];?></td>
                    <td><?php echo $f['homeservice'];?></td>
                    <td><?php echo $f['image'];?></td>
                   
                    
                    <td><div class="btn-group">
                    <a class="btn btn-success" href="upt.php?id=<?php echo $em; ?>">Update</a>&nbsp;
                       <a class="btn btn-danger" href="deltest.php?id=<?php echo $em; ?>" onclick="{if(confirm('Are you sure?')==false)return false}" >Delete</a>
                   </div></td>
                   </tr>
                  <?php } ?><tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>


  <!-- ======= Footer ======= -->
 <!-- End Footer -->
 <?php
 require 'footer.php';
 ?>