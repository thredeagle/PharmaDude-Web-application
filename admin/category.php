<?php
require 'header.php';
require '../php/connect.php';
$sql="select * from category";
$rslt=mysqli_query($conn,$sql);


?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   <section class="section">
      <div class="row">
        <div class="col-lg-4 ">


          <div class="card">
            <div class="card-body">
              <h2 class="text-center pt-5">Add Category</h2>

              <!-- General Form Elements -->
              <form action="catphp.php" method="POST">
                <div class="row  p-3">
                 
             
                  <div class="form-group">
                    <select  name="category" class="form-select" required>
                    <option disabled="disabled" selected="selected">Enter Category</option>
                    <option>Test</option>
                    <option>Product</option>
                    <br><br>
                    </select> 
                  </div>
                  
                  <br><br>

                  <div class="col-sm-12 ">
                    <input type="text" name="type" class="form-control" placeholder="Enter Type">
                    
                  </div>

                </div>
                <div class="row mb-3 text-center">
                  
                  <div class="col-sm-6 offset-sm-3">
                    <input type="submit" class="btn btn-primary" >
                    
                  </div>
                </div>
             

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        <div class="col-lg-8">


  
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>
              
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Type</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $n=1;
                    while($f=mysqli_fetch_assoc($rslt)){ ?>
                    <th scope="row"><?php echo $n++; ?></th>
                    <td><?php echo $f['categoryname']; ?> </td>
                    <td><?php echo $f['type'];?>
                   </td>
                   </tr>
                  <?php } ?>
                 
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
          
        </div>
      </div>
   

    </form><!-- End General Form Elements -->

  </div>
</div>

</div>
                      
       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <!-- End Footer -->
 <?php
 require 'footer.php';
 ?>