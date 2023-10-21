<?php
require "../php/connect.php";
$tid=$_POST['tbookingid'];
$res=$_POST['result'];
$sql="update testbooking set result='$res',status=3 where tbookingid='$tid'";
echo $sql;
$rslt=mysqli_query($conn,$sql); 
?>

<script>
    alert("Result Updated");
    window.location.replace('treqc.php');
</script>

