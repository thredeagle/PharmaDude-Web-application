<?php
session_start();
require '../php/connect.php';
$complaintid=$_GET['id'];
$sql="delete from complaint where complaintid='$complaintid'";

if($r=mysqli_query($conn,$sql))
{
	?>
	<script type="text/javascript">
		window.location.href="viewc.php";
	</script>
	<?php
}
?>