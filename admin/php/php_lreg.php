<?php
require "connect.php";

$target_dir = "../uploads/lab/";
$pic=basename($_FILES["profilepic"]["name"]);
$target_file = $target_dir . basename($_FILES["profilepic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


  $check = getimagesize($_FILES["profilepic"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["profilepic"]["size"] > 1000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["profilepic"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['password'];

$c="SELECT * FROM lab WHERE email='$email'";
     $a=mysqli_query($conn,$c);
     $num=mysqli_num_rows($a);

     echo $num;

     if($num>0)
     {
          ?>
          <script>
               alert("Email already found pls try login!");
               window.location.href="../login/lab.php";
          </script>
     
          <?php
     }
     else
     {
      $sql="insert into lab(name, address,city,distid,pincode,email,phone,profilepic) VALUES ('$name','$address','$city','$district','$pincode','$email','$phone','$pic')";
      //echo $sql;      
      if(mysqli_query($conn,$sql))   
              {
                $sql1="insert into login(username,password,utype) VALUES ('$email','$pass','l') ";
                echo $sql1;
                if(mysqli_query($conn,$sql1))
                {
                    ?>
                    <script>
                      alert("Registered");
                      //window.location.replace('../login/signin/login.php');
                  </script>
                    <?php
                 }
                else
                  {
                    echo "Login Error!!";
                  }
              }
                
              else
              {
                        ?>
                        <script>
                      alert("Error Occured!");
                      // window.location.replace('../login/lab.php');
                  </script>

                      <?php

              }
                  
        }?>