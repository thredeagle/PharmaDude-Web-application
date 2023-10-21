<?php
session_start();
require '../php/connect.php';
$orderid=$_GET['id'];
$sql="update orders set status=2 where orderid='$orderid'";

if($r=mysqli_query($conn,$sql))
{
	?>
	<script type="text/javascript">
		window.location.href="status.php";
	</script>
	<?php
}
?>