<?php
session_start();
require '../php/connect.php';
$orderid=$_GET['id'];
$sql="update orders set status=1 where orderid='$orderid'";

if($r=mysqli_query($conn,$sql))
{
	?>
	<script type="text/javascript">
		window.location.href="hreq.php";
	</script>
	<?php
}
?>