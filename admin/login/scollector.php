<?php
session_start();
require "../php/connect.php";
$sql="select * from district";
$rslt=mysqli_query($conn,$sql);
$num=mysqli_num_rows($rslt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Collector Registration - PharmaDude </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
         .signup-form span {
             color : red;
         }
         .signup-content {
            background: #00000087;
         }
         .navbar a, .navbar a:focus {
            padding: 25px 15px 23px 15px;

         }
         .form-control{
            padding: 20px 20px 32px 10px;
         }
     </style>
</head>
<body style="background-image: url(images/bck.png);">    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center row">
      <div class="container d-flex align-items-center justify-content-between">
  
        <h1 class="col-md-11"><img src="images/download1.png" height="70" width="70" >&nbsp;<a href="../index.html" style="text-decoration: none;color: #62E3E4;">Pharma<span style="color: #F54785;">Dude</span></a></h1>
       
  
  
         <nav id="navbar" class="navbar">
          <ul>
           
            <li><a class="nav-link " style="text-decoration: none;" href="../index.php">Home</a></li>
            <li class="dropdown"><a href="#"><span>Registration</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="user.php">User Registration</a></li>
               
                <li><a href="lab.php">Corporate Registration</a></li>
               
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
        
  
      </div>
    </header><!-- End Header -->
  <br>
  



    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="../php/php_sreg.php" id="signup-form" class="signup-form" onsubmit="return validate()" enctype="multipart/form-data">

                     <h2 class="form-title" style="text-transform:none;"><img src="images/employee.png" width="60" height="60">&nbsp;<font color="white">Sample Collector</font></h2><br>

                       <div class="row">

                        <div class="col-md-6">

                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                            <span id="ername"></span>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="city" id="city" placeholder="City" required/>
                            <span id="ercity"></span>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-input" name="pincode" id="pin" placeholder="Pincode" required/>
                            <span id="erpin"></span>
                        </div>

                    

                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                            <span id="erpass"></span>
                        </div>

                        <div class="form-group">
                        <input type="password" class="form-input" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required/>
                        <span id="erconpass"></span>
                        </div>

                </div>
                 
                <div class="col-md-6">

                   
                <div class="form-group">
                        <input type="text" class="form-input" name="address" id="address" placeholder="Address" required/>
                        <span id="eradd"></span>
                    </div>
                        
                    <div class="form-group">
                    <select class="form-input" name="district"  required>
                                                          <option disabled="disabled" selected="selected">District</option>
                                                         <?php
                                                         while($x=mysqli_fetch_assoc($rslt))
                                                         {
                                                             ?>
                                                             <option value="<?php echo $x['distid']; ?>"><?php echo $x['dname']; ?></option>
                                                             <?php
                                                         }
                                                         ?>
                                                         
                                                      </select>
                                                      <span id="erdist"></span>
                    
                    </div>


                    
                        
                    <div class="form-group">
                        <input type="number" class="form-input" name="phone" id="phone" placeholder="Contact Number" required/>
                        <span id="erph"></span>
                    </div>

                    <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                            <span id="ermail"></span>
                        </div>
         
                        <div class="form-group">
                                    <input type="file" name="profilepic" class="form-control" id="img" placeholder="paste your google map link" required="">
                                    </div>
                   

                   
            </div>
            <div class="col-md-12">

            <div class="form-group" style="margin-bottom: 0px;">
                                <span id="ercheck"></span>      
                                <input type="checkbox" name="agreeterm" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span><font color="white">I agree all statements in Terms of service</font></label>
                                    </div>
    
                                    <div class="form-group">
                                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" style="width: 47%;margin: auto;display: block;"/>
                                     </div>
    
                            </div>   
                            </div>   
                            
          </form> 
          <p class="loginhere">
                <font color="white">Have already an account?</font><a href="signin/login.php" style="text-decoration:none;color:white;">&nbsp;Login Here</a>
            </p>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/regvalidatescoll.js"></script>
</body>
</html>
