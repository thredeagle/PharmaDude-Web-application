<?php
session_start();
require '../php/connect.php';

$target_dir = "../uploads/test/";
$pic=basename($_FILES["image"]["name"]);
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


  $check = getimagesize($_FILES["image"]["tmp_name"]);
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
if ($_FILES["image"]["size"] > 1000000) {
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
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$test=$_POST['test'];
$description=$_POST['description'];
$rate=$_POST['rate'];
$email=$_SESSION['email'];
$answer=$_POST['ans'];
if($answer=="ans1")
{
    $hservice="Yes";
}else
{
    $hservice="No"; 
}
$sql2=mysqli_query($conn,"select categoryid from category where type='$test'");
$f=mysqli_fetch_assoc($sql2);
$categoryid=$f['categoryid'];
$sql1="select labid from lab where email='$email'";
$rslt1=mysqli_query($conn,$sql1);
$x=mysqli_fetch_assoc($rslt1);
$labid=$x['labid'];
$sql="insert into labtest(labid,categoryid,description,testrate,homeservice,image) values('$labid','$categoryid','$description','$rate','$hservice','$pic')";
$rslt=mysqli_query($conn,$sql);
?>
<script>
    alert("Test details Inserted Seccessfully");
    window.location.replace('addtest.php');
</script>