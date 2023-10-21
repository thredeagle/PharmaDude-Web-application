<?php
require '../php/connect.php';
require 'header.php';
$testid=$_GET['id'];
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Checkout</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Checkout</li>
                </ol>
        </nav>
    </div>
  <section class="section">
      <div class="row">
        <div class="col-lg-12">
<div class="card">
            <div class="card-body">
              <h2 class="card-title">CheckOut</h2>

              <!-- Horizontal Form -->
              <form action="bookin.php" method="POST">
                <div class="row mb-3">
                  <input type="hidden" name="testid" value="<?php echo $testid;?>"> 
                  <label for="naem" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" >
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="address" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="address"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="date" class="col-sm-2 col-form-label">Test Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" min="<?php echo date('Y-m-d') ?>">  
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Need Home Service?</legend>
                  <div class="col-sm-10">
                    <div class="form-check"style="padding: left 3px;">
                      <input class="form-check-input" type="radio" name="radios" value="yes" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Yes
                      </label>   
                    </div>
                    <div class="form-check" style="padding: left 3px;">
                      <input class="form-check-input" type="radio" name="radios" value="no">
                      <label class="form-check-label" for="gridRadios2">
                        No
                      </label>
                    </div>
                   
                  </div>
                </fieldset>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
</div>
</section>
</main>