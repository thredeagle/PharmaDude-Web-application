<?php
require 'header.php'; 
require '../php/connect.php'; 
$tid=$_GET['id'];   
 $sql2="SELECT * FROM labtest,category WHERE testid='$tid' AND category.categoryid=labtest.categoryid";  
 $sql="select * from category,labtest where category.categoryid=labtest.categoryid";
 $sql1="select * from category WHERE categoryname='Test'";
 $rslt1=mysqli_query($conn,$sql);
 $rslt2=mysqli_query($conn,$sql2);
$rslt=mysqli_query($conn,$sql1);
$d=mysqli_fetch_assoc($rslt2);
$x=mysqli_fetch_assoc($rslt1);  


?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Manage Products</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Manage Test</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
           


<section class="section">
      <div class="row">
        <div class="col-lg-12">

        
        <div class="card">
            <div class="card-body">
              <h2 class="text-center pt-5">Update Test</h2>

              <!-- General Form Elements -->
              <form action="updatet.php" method="POST">
                
                <div class="row">
                <div class="col-md-6 ">
                    Enter Test type<br>  
                    <select name="tests" class="form-select" required>
                        <?php
                        while($x=mysqli_fetch_assoc($rslt))
                            {
                            
                            ?>
                            <option value="<?php echo $x['categoryid'];?>" <?php if($d['categoryid']==$x['categoryid'])echo "selected"?>><?php echo $x['type']; ?></option>
                        <?php
                            }
                        ?>
                        
                    </select> 
                  </div>
              
                  <br>



                    <input type="hidden" name="testid" class="form-control" value="<?php echo $d['testid']; ?>">
                    
                 

                  <br>

                  <div class="col-md-6 ">
                  Enter Test Description
                    <input type="text" name="description" class="form-control" value="<?php echo $d['description']; ?>">
                    <br>
                  </div>

                  

                        

                  <div class="col-md-6 ">
                  Enter Test Rate
                    <input type="text" name="mrp" class="form-control" value="<?php echo $d['testrate']; ?>">
                    <br>
                  </div>

                  <br>

                  <div class="col-md-6 ">
                  Home Service Availability
                    <input type="text" name="hservice" class="form-control" value="<?php echo $d['homeservice']; ?>">
                    <br>
                  </div>

                  <br>
                        
                </div>
                <div class="row mb-3 text-center">
                  
                  <div class="col-sm-6 offset-sm-3">
                    <input type="submit" class="btn btn-info">
                    
                  </div>
                </div>
                      </div>
             

              </form><!-- End General Form Elements -->
              </div>
            </div>
          
                        
      </div>
    </section>
    


  <!-- ======= Footer ======= -->
 <!-- End Footer -->
 <?php
 require 'footer.php';
 ?>