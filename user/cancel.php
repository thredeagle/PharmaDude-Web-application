<?php
require '../php/connect.php';
$oid=$_GET['id'];
$sql="update orders set status=-1 where orderid='$oid'";
// echo $sql;
if($a=mysqli_query($conn,$sql))
{ ?>
<script>
 window.location.href='myorders.php';
</script>
<?php }
else
echo $sql;
?> 