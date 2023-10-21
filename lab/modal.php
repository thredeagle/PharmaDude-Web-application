<?php
require '../php/connect.php';
$stock=$_POST['addstock'];
$sql="update products set stock=stock+$stock";
$rslt=mysqli_query($conn,$sql);
?>
<script>
window.location.href="addprod.php";
</script>
