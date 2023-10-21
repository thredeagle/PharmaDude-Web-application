<?php
require "../php/connect.php";
$a=$_GET['id'];
// echo $a;
$sql="delete from products WHERE pid='$a'";
$b=mysqli_query($conn,$sql);
?>
<script>
window.location.href="addprod.php";
</script>

