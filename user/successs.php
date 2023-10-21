<?php 
session_start();
$m=$_SESSION['email'];
$amt=$_GET['amt'];

require "../php/connect.php";



$name=$_SESSION['name'];
$phone=$_SESSION['phone'];
$address=$_SESSION['address'];


//echo $name.$phone.$address.$payment;




			
			$sql="update testbooking set rate=$amt where testbooking.emailid='$m'";
            echo $sql;
			


			//echo $sql;
			if(mysqli_query($conn,$sql))
			{ 
				$orderss=mysqli_query($conn,"select max(orderid) FROM orders");
				$o=mysqli_fetch_array($orderss);
				$orderid=$o[0];

				$sql3="insert into orderitems(quantity,orderid,pid) select '1','$orderid',pid from cart where userid='$m'";
               
				//echo $sql3;
				if(mysqli_query($conn,$sql3))
				{
					mysqli_query($conn,"update products,cart set stock=stock-1 where products.pid=cart.pid");
					if(mysqli_query($conn,"delete from cart where userid='$m'"))
					{?>
						<script> 
						alert("Booking Updated");
					 window.location.replace('treqau.php');
				   </script>
				   <?php
					}
				}
			}
			else
			{
				echo "Failed";
			}
		
?>