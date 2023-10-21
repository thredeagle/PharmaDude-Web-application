<?php
session_start();
require '../php/connect.php';
$pid=$_GET['id'];
	$email=$_SESSION['email'];
	$sql="delete from cart where pid='$pid'";

		if($a=mysqli_query($conn,$sql))
		{
		   ?>
		     <script type="text/javascript">
                 alert("Item Removed From Cart");
                 window.location.href="index.php";
                 </script>
          <?php
        }
        else{
            echo $sql;
        }       

	?>