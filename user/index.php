
<?php
require ('header.php');


?>
<main id="main" class="main">

<ul class="nav nav-tabs" style="margin: 20px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#homem">Products</a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Tests</a>
      </li>
    </ul>
    <div id="homem" class="container tab-pane card">
        <!-- <div style="overflow-x: auto;margin: 10px;"> -->
    <div class="pagetitle">
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
     <div class="row">
        
      

     
    
    <?php

   
    while($d=mysqli_fetch_assoc($rslt1))
    {
      $em=$d['pid'];
      
     $email=$_SESSION['email'];
     $c="select * from cart where pid='$em' and userid='$email'";
     $ab=mysqli_query($conn,$c);

    ?>

        <div class="col-4" style="padding: 12px;">
            <div class="col-lg-12">
        

                <div class="card mb-3"  style="height: 100%;">
                    <div class="row g-0">
                          <div class="col-md-12">
                            <img src="<?php echo '../uploads/product/'.$d['image'];?>" class="img-fluid" alt="..." width="100%">
                          </div>
                          <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $d['pname']," "; echo $d['type'];?></h5>


                                

                                <h5 class="card-title"><?php echo $d['description'];?></h5>

                                <?php
                                $ex=$d['prate']+300;
                                 ?>


                                <div class="row">
                                <div class="col-lg-7 col-md-5 label" style="color:white;">MRP</div>
                                  <div class="col-lg-5 col-md-7"><font size="5 px" color="blue"><strike><?php echo "₹",$ex; ?></strike></font></div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-7 col-md-5 label">MRP</div>
                                  <div class="col-lg-5 col-md-7"><?php echo "₹",$d['prate'];?></div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-7 col-md-5 label">Quanity</div>
                                  <div class="col-lg-5 col-md-7"><?php echo $d['quantity']," ";echo $d['unit'];?></div>
                                </div>

                

                                <div class="row">
                                  <div class="col-lg-7 col-md-5 label">Stock Available</div>
                                  <div class="col-lg-5 col-md-7"><?php 
                                  if($d['stock']==0) 
                                  echo  "Out Of Stock";else
                                  echo $d['stock'];?></div>
                                
                                </div>

                                

                              <br>
                              <?php

                              if(mysqli_num_rows($ab)==0)
                              {
                                ?>
                                 <a href="cartin.php?id=<?php echo $em;?>" class="btn btn-primary btn-sm"><i class="bi bi-cart-plus-fill"></i> &nbsp;Add To Cart</a>
                  
                                <?php
                                }else{ 

                              ?>
                                <!-- <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                <a href="cart.php" class="btn btn-warning btn-sm"><i class="bi bi-cart-plus-fill"></i> &nbsp;Go To Cart</a>
                               
                              <?php } ?>
                              
                            </div> 
                          </div>
                    </div>
                </div><!-- End Card with an image on left -->

            </div>
        </div>



            <?php

          }
          ?>
      
      </div>
   </section>
    </div>


    <div id="menu2" class="container tab-pane card">

<div class="pagetitle mt-5">
      <h1>Tests</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Tests</li>
        </ol>
      </nav>
    </div>

<section class="section dashboard">
<div class="row">



<?php
  while($e=mysqli_fetch_assoc($rslt2))
   {
     

    ?>

        <div class="col-4" style="padding: 12px;">
          <div class="col-lg-12">
      
      
      <div class="card mb-3"  style="height:100%;">
        <div class="row g-0">
                <div class="col-md-12">
                  <img src="<?php echo '../uploads/test/'.$e['image'];?>" class="img-fluid" alt="..." width="100%">
                </div>
                <div class="col-md-12">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $e['type'];?></h5>


                    <h5 class="card-title"><?php echo $e['description'];?></h5>

                    
                    <?php
                                $fx=$e['testrate']+300;
                                 ?>


                                <div class="row">
                                <div class="col-lg-7 col-md-5 label" style="color:white;">MRP</div>
                                  <div class="col-lg-5 col-md-7"><font size="5 px" color="green"><strike><?php echo "₹",$fx; ?></strike></font></div>
                                </div>

                      <div class="row">
                        <div class="col-lg-7 col-md-5 label">Test Rate</div>
                        <div class="col-lg-5 col-md-7"><?php echo "₹",$e['testrate'];?></div>
                      </div>

                      <div class="row">
                        <div class="col-lg-7 col-md-5 label">Laboratory</div>
                        <div class="col-lg-5 col-md-7 ">
                          <?php $l=$e['labid'];
                          $a=mysqli_query($conn,"select name,address,city from lab,labtest where lab.labid=labtest.labid");
                        $en=mysqli_fetch_assoc($a);
                           echo $en['name']."<br>".$en['address']."<br>";
                           echo $en['city'];
                         ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-7 col-md-5 label">HomeService Availability</div>
                        <div class="col-lg-5 col-md-7 "><?php echo $e['homeservice'];?></div>
                      </div>
                      






                     
                    <br>
                       <a class="btn btn-success btn-sm" href="testbook.php?id=<?php echo $em;?>"><i class="bx bxs-shopping-bag"></i>&nbsp;Book Now</a>

                    
                  </div> 
                </div>
              </div>
            </div>

          </div>
   </div>



          <?php

        }
        ?>
        </div>
</section>    
    </div>      
</body>
</html>



  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

 <!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  </footer>

 