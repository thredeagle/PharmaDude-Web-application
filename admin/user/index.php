
<?php
require ('header.php');
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
     <div class="row">
        
      
     
    
    <?php

   
    while($d=mysqli_fetch_assoc($rslt1))
    {

    ?>

        <div class="col-4">
            <div class="col-lg-12">
        

                <div class="card mb-3">
                    <div class="row g-0">
                          <div class="col-md-12">
                            <img src="assets/img/card.jpg" class="img-fluid" alt="..." width="100%">
                          </div>
                          <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $d['pname']," "; echo $d['type'];?></h5>


                                <h5 class="card-title"><?php echo $d['description'];?></h5>

                                <div class="row">
                                  <div class="col-lg-7 col-md-5 label">Quanity</div>
                                  <div class="col-lg-5 col-md-7"><?php echo $d['quantity']," ";echo $d['unit'];?></div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-7 col-md-5 label">MRP</div>
                                  <div class="col-lg-5 col-md-7"><?php echo $d['prate'];?></div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-7 col-md-5 label">Stock Available</div>
                                  <div class="col-lg-5 col-md-7"><?php 
                                  if($d['stock']==0) 
                                  echo  "Out Of Stock";else
                                  echo $d['stock'];?></div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-7 col-md-5 label">HomeService Availability</div>
                                  <div class="col-lg-5 col-md-7"><?php echo $d['homeservice'];?></div>
                                </div>






                                <!-- <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                 <a class="btn btn-danger btn-sm" href="#">Buy Now</a>

                              
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



      <div class="row">

<?php
    while($e=mysqli_fetch_assoc($rslt2))
     {

      ?>

          <div class="col-4">
            <div class="col-lg-12">
        
        
        <div class="card mb-3">
          <div class="row g-0">
                  <div class="col-md-12">
                    <img src="assets/img/card.jpg" class="img-fluid" alt="..." width="100%">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $e['type'];?></h5>


                      <h5 class="card-title"><?php echo $e['description'];?></h5>

                        <div class="row">
                          <div class="col-lg-7 col-md-5 label">Test Rate</div>
                          <div class="col-lg-5 col-md-7"><?php echo $e['testrate'];?></div>
                        </div>

                        <div class="row">
                          <div class="col-lg-7 col-md-5 label">HomeService Availability</div>
                          <div class="col-lg-5 col-md-7 "><?php echo $e['homeservice'];?></div>
                        </div>
                        






                       
                      
                         <a class="btn btn-danger btn-sm" href="#">Book Now</a>

                      
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

  </main><!-- End #main -->
 <!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  </footer>

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






        
</body>
</html>

  