<?php
session_start();

require "../php/connect.php";
$type=$_POST['tests'];
    echo $type;

 

$testid=$_POST['testid'];
$description=$_POST['description'];
$mrp=$_POST['mrp'];
$homeservice=$_POST['hservice'];

$sql="update labtest set categoryid='$type', description='$description' ,testrate='$mrp',homeservice='$homeservice' where testid='$testid'";
echo $sql;
$rslt=mysqli_query($conn,$sql); 
?>

<script>
    alert("Test Updated");
    window.location.replace('addtest.php');
</script>

