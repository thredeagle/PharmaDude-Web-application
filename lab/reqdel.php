<?php 
session_start();


require "../php/connect.php";
$id=$_GET['id'];
$sql="update testbooking set status=-1 where tbookingid='$id'";
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