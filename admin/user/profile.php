<?php
require('header.php');
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
    </div>
    
    <section class="section profile">
      <div class="row">
        <!-- <div class="col-xl-4"> -->

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="<?php echo '../uploads/scollector/'.$f['profilepic'];?>"  class="rounded-circle">
              <h2 ><?php echo $f['name']; ?></h2>
         
      <!--         <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div> -->

        <div class="col-xl-10 offset-1">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label " >Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $f['name']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" >Address</div>
                    <div class="col-lg-9 col-md-8">
                        <?php 
                        echo $f['address'];
                        echo "<br>";
                        echo $f['city'];
                        echo "<br> "; 
                        echo $f['dname'];
                        ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" >DOB</div>
                    <div class="col-lg-9 col-md-8"><?php echo $f['dob']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" >Gender</div>
                    <div class="col-lg-9 col-md-8"><?php echo $f['gender']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" >Pincode</div>
                    <div class="col-lg-9 col-md-8"><?php echo $f['pincode']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" >Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $f['phone']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" >Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $f['email']; ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="php/update.php" method="POST">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label" >Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                      <img src="<?php echo '../uploads/user/'.$f['profilepic'];?>" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label" >Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullname" value="<?php echo $f['name']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label" >Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="email" value="<?php echo $f['email']; ?>" disabled>
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                      <label for="phone" class="col-md-4 col-lg-3 col-form-label" >Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $f['phone']; ?>">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="dob" class="col-md-4 col-lg-3 col-form-label" >DOB</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dob" type="date" class="form-control" id="DOB" value="<?php echo $f['dob']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="gender" class="col-md-4 col-lg-3 col-form-label" >Gender</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="gender" type="text" class="form-control" id="gender" value="<?php echo $f['gender']; ?>">
                      </div>
                    </div>

                    

                    <div class="row mb-3">
                      <label for="address" class="col-md-4 col-lg-3 col-form-label" >Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="address" value="<?php echo $f['address']; ?>">
                      </div>
                    </div>

                    

                    <div class="row mb-3">
                      <label for="city" class="col-md-4 col-lg-3 col-form-label" >City</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="city" type="text" class="form-control" id="city" value="<?php echo $f['city']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="district" class="col-md-4 col-lg-3 col-form-label" >District</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="district" type="text" class="form-control" id="district" value="<?php echo $f['distid']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="pincode" class="col-md-4 col-lg-3 col-form-label" >Pincode</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="pincode" type="text" class="form-control" id="pincode" value="<?php echo $f['pincode']; ?>">
                      </div>
                    </div>

                    


                   

                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="passed.php" method="POST">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main>
<?php
require ('footer.php');
?>