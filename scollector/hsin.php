<?php
session_start();
require '../php/connect.php';
$id=$_GET['id'];
$sql="update testbooking set status=3 where tbookingid='$id'";

if($r=mysqli_query($conn,$sql))
{
	?>
	<script type="text/javascript">
		window.location.href="status.php";
	</script>
	<?php
}
?>