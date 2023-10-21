<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<!-- Head -->
<head>

    <title>Login</title>

    <!-- Meta-Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

        <!-- Font Icon -->
        <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

    <!-- google fonts -->
 <style>
.form-submit {
  width: 50%;
  border-radius: 5px;
  /*-moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;*/
  box-sizing: border-box;
  font-size: 14px;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  border-radius: 24px;
  outline: none;
  color: white;
  transition: .5s;
  /*background-image: -moz-linear-gradient(to left, #74ebd5, #9face6);
  background-image: -ms-linear-gradient(to left, #74ebd5, #9face6);
  background-image: -o-linear-gradient(to left, #74ebd5, #9face6);
  background-image: -webkit-linear-gradient(to left, #74ebd5, #9face6);
  background-image: linear-gradient(to left, #74ebd5, #9face6);
*/ }
 .form-submit:hover{
  background-color:#2ecc71 ;
  transition: .5s;

  }
 
 .wthree-field input:focus{
  
    color:black;
 }
  

.signup-content {
    background: #000000a3;
    padding: 10px 85px;
}


  .loginhere {

  font-weight: 500;
  text-align: center;
  margin-top: 10px;
  margin-bottom: 5px; }


 </style>

</head>
<!-- //Head -->

<!-- Body -->
<body style="background-image: url('../images/bck.png'); justify-content: center;justify-content: fil;">
    

    <section class="main">

        <div class="bottom-grid">
            
        </div>
        <div class="signup-content " >
        <div class="content-w3ls">
            <div class="text-center icon">
            <div class="logo">
            <h1  style="color:white">Login</h1>
            <h1><a  style="text-decoration: none;color: #62E3E4;">Pharma<span style="color: #F54785;">Dude</span></a>&nbsp</h1>
                <h2><img src="../images/download1.png" height="80" width="80"></h2><br>
           

            <div class="content-bottom">
                <form action="../../php/php_login.php" method="POST" id="signup-form" class="signup-form" onsubmit="return validate()">
                    <div class="field-group">
                       
                        <div class="wthree-field">
                            <input name="name" id="email" type="email" value="" placeholder="Username" required>
                            <span id="ermail"></span>
                        </div>
                    </div>
                    <div class="field-group">
                      
                        <div class="wthree-field">
                            <input name="password" id="password" type="Password" placeholder="Password">
                            <span id="erpass"></span>
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button type="submit" class="form-submit" >Login</button>
                        
                    </div>
                     
                
              <!--   <p class="loginhere">
                    <a href="#" style="text-decoration:none;  color:white;" class="loginhere-link">Forgot password?</a>
                </p> -->

                <p class="loginhere">
                    <a href="../user.php" style="text-decoration:none;  color:white;" class="loginhere-link">Not yet Registered ? Create new Account</a>
                </p>
            </div>
                </form>
            </div>
        </div>
       
    </section>

    <script type="text/javascript" src="../js/regvalidatelog.js"></script>

</body>
<!-- //Body -->

</html>
