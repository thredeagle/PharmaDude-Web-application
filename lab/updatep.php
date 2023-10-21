<?php
session_start();

require "../php/connect.php";
$type=$_POST['product'];
echo $type;  

$pid=$_POST['pid'];
$pname=$_POST['pname'];
$description=$_POST['description'];
$quantity=$_POST['quantity'];
$unit=$_POST['unit'];
$mrp=$_POST['mrp'];
$homeservice=$_POST['hservice'];

$sql="update products set categoryid='$type',pname='$pname' , description='$description' , quantity='$quantity' , unit='$unit  ' ,prate='$mrp',homeservice='$homeservice' where pid='$pid'";
echo $sql;
$rslt=mysqli_query($conn,$sql); 
?>

<script>
    alert("Product Updated");
    window.location.replace('addprod.php');
</script>

