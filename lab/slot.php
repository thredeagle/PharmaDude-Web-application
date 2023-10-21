<?php 
session_start();


require "../php/connect.php";
$id=$_POST['tbookingid'];
$slot=$_POST['slot'];
$sql="update testbooking set slot='$slot' where tbookingid='$id'";
echo $sql;
if(mysqli_query($conn,$sql))
	{
		
			   ?>
			   <script>
			    window.location.replace('treq.php');
			  </script>

			  <?php
		
    }
else
	{
		   ?>
   <script>
    alert("Error Occoured");
      window.location.replace('treq.php');
  </script>

  <?php
	}

?>