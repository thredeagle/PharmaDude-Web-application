<?php
require 'header.php'; 
require '../php/connect.php';   
 $sql="select * from category,products where category.categoryid=products.categoryid";
 $sql1="select type from category WHERE categoryname='Product'";
 $rslt1=mysqli_query($conn,$sql);
$rslt=mysqli_query($conn,$sql1);
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
              <h2 class="text-center pt-5">Add Products</h2>

              <!-- General Form Elements -->
              <form action="addphp.php" method="POST" enctype="multipart/form-data">
                <div class="row  p-3">
                  
                 
                </div>

                <div class="col-sm-8 offset-2 ">
                    <select name="product" class="form-control" required>
                    <option disabled="disabled" selected="selected">Enter Product</option>
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
                    <input type="text" name="pname" class="form-control" placeholder="Enter Product Name">
                    
                  </div>

                  <br>

                  <div class="col-sm-8 offset-2 ">
                    <input type="text" name="description" class="form-control" placeholder="Enter Description">
                    
                  </div>

                  <br>

                  <div class="col-sm-8 offset-2 ">
                    <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
                    
                  </div>

                  <br>
                  <div class="col-sm-8 offset-2 ">
                    <input type="text" name="unit" class="form-control" placeholder="Enter Unit">
                    
                  </div>

                  <br>

                  <div class="col-sm-8 offset-2 ">
                    <input type="text" name="mrp" class="form-control" placeholder="Enter MRP">
                    
                  </div>

                  <br>

                  <div class="col-sm-8 offset-2 ">
                    <input type="text" name="stock" class="form-control" placeholder="Enter Stock">
                    
                  </div>

                  <br>
                  <div class="col-sm-8 offset-2 ">
                   <input type="file" name="image" class="form-control" id="img" >
                  </div>
                  <br>

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
                    <th scope="col">Product Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit</th>
                    <th scope="col">MRP</th>
                    <th scope="col">Stock</th>
                  
                    <th scope="col">Image</th>
                
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    while($f=mysqli_fetch_assoc($rslt1)){  $em=$f['pid'];?>
                    <th scope="row"><?php echo $f['pid']; ?></th>
                    <td><?php echo $f['pname']; ?> </td>
                    <td><?php echo $f['type']; ?> </td>
                    <td><?php echo $f['description'];?></td>
                    <td><?php echo $f['quantity'];?></td>
                    <td><?php echo $f['unit'];?></td>
                    <td><?php echo $f['prate'];?></td>
                    <td><?php echo $f['stock'];?></td>
                   
                    <td><?php echo $f['image'];?></td>
                    <td><div class="btn-group">
                       
                       <!-- Basic Modal -->
              <button type="button"  class="btn btn-primary btn-sm-2" onclick="document.addfrm.pid.value=<?php echo $f['pid'];?>" data-bs-toggle="modal" data-bs-target="#basicModal" >
               Add Stock
              </button>
               &nbsp;
                    <a class="btn btn-success" href="upp.php?id=<?php echo $em; ?>">Update</a>&nbsp;
                       <a class="btn btn-danger" href="delproduct.php?id=<?php echo $em; ?>" onclick="{if(confirm('Are you sure?')==false)return false}" >Delete</a>
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


    <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Stock</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form name="addfrm" action="modal.php" method="POST"> 
                    <div class="modal-body">
                     
                       <input type="hidden" name="pid"  value="">
                       <input type="number" name="addstock" class="form-control" placeholder="Add Stock"> 
                

                     
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div><!-- End Basic Modal-->


  <!-- ======= Footer ======= -->
 <!-- End Footer -->
 <?php
 require 'footer.php';
 ?>