<?php
require 'header.php'; 
require '../php/connect.php'; 
$pid=$_GET['id'];
echo $pid;
 $sql2="select * from category,products where pid='$pid' AND category.categoryid=products.categoryid";  
 $sql="select * from category,products where  category.categoryid=products.categoryid";
 $sql1="select * from category WHERE categoryname='Product'";
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
      <li class="breadcrumb-item active">Manage Products</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
           


<section class="section">
      <div class="row">
        <div class="col-lg-12">

        
        <div class="card">
            <div class="card-body">
              <h2 class="text-center pt-5">Update Products</h2>

              <!-- General Form Elements -->
              <form action="updatep.php" method="POST" >
                <div class="row  p-3">
                  
                 
                </div>
                <div class="row">
                <div class="col-md-6 ">
                Enter Product type<br>  
                <select name="product" class="form-select" required>
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

                  <div class="col-md-6 ">
                    Enter Product Name
                    <input type="text" name="pname" class="form-control" value="<?php echo $d['pname']; ?>">
                    <br>
                  </div>


                    <input type="hidden" name="pid" class="form-control" value="<?php echo $d['pid']; ?>">
                    
                 

                  <br>

                  <div class="col-md-6 ">
                  Enter Product Description
                    <input type="text" name="description" class="form-control" value="<?php echo $d['description']; ?>">
                    <br>
                  </div>

                  

                  <div class="col-md-6 ">
                  Enter Product Quantity
                    <input type="text" name="quantity" class="form-control" value="<?php echo $d['quantity']; ?>">
                    <br>
                  </div>

                  <br>
                  <div class="col-md-6 ">
                  Enter Product Unit
                    <input type="text" name="unit" class="form-control" value="<?php echo $d['unit']; ?>">
                    <br>
                  </div>

                  <br>

                  <div class="col-md-6 ">
                  Enter Product Rate
                    <input type="text" name="mrp" class="form-control" value="<?php echo $d['prate']; ?>">
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
                    <input type="submit" class="btn btn-info" href="updatep.php?id=<?php echo $pid; ?>">
                    
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