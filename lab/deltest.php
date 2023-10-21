<?php
require "../php/connect.php";
$a=$_GET['id'];
// echo $a;
$sql="delete from labtest WHERE testid='$a'";
$b=mysqli_query($conn,$sql);
?>
<script>
window.location.href="addtest.php";
</script>

