<?php
session_start();
require 'php/connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="insert into feedback(name,email,message) values ('$name','$email','$message')";

if($r=mysqli_query($conn,$sql))
{
	?>
	<script type="text/javascript">
		window.location.href="index.php";
	</script>
	<?php
}
?>