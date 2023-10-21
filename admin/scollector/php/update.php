<?php
session_start();
require "../../php/connect.php";
$email=$_SESSION['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];


$sql="update scollector set name='$name' , address='$address' , dob='$dob' , city='$city' , distid='$district' , pincode='$pincode' , phone='$phone' where email='$email'";
$rslt=mysqli_query($conn,$sql); 
?>

<script>
    alert("Profile Updated");
    window.location.replace('../profile.php');
</script>

