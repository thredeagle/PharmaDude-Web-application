<?php
session_start();
require '../php/connect.php';
$pid=$_GET['id'];
	$email=$_SESSION['email'];
	$sql="insert into cart(pid,userid) values('$pid','$email')";

		if($a=mysqli_query($conn,$sql))
		{
		   ?>
		     <script type="text/javascript">
                 alert("Cart Updated");
                 window.location.href="index.php";
                 </script>
          <?php
        }
        else{
            echo $sql;
        }       

	?>