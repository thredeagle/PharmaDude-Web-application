    <?php 
session_start();
$m=$_SESSION['email'];

require "../php/connect.php";


$testid=$_POST['testid'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$hservice=$_POST['radios'];
$date=$_POST['date'];

//echo $name.$phone.$address.$payment;

$sql="INSERT INTO testbooking( testid,name, phone,address, emailid,bookingdate) VALUES ('$testid','$name','$phone','$address','$m','$date')";



if(mysqli_query($conn,$sql))
	{
		if($hservice=='yes')
		{
			   ?>
			   <script>
			    window.location.replace('payt.php');
			  </script>

			  <?php
		}
		else if($hservice='no')
		{
			   ?>
				<script>

				alert("Test Booked");
				window.location.replace('treqau.php');
				</script>

				<?php
		}
	}
else
	{
		   ?>
   <script>
    alert("Error Occoured");
      window.location.replace('cart.php');
  </script>

  <?php
	}

?>