<?php 
session_start();
$m=$_SESSION['email'];


require "../php/connect.php";



$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$payment=$_POST['radios'];

//echo $name.$phone.$address.$payment;




		if($payment=='netbanking')
		{
			$_SESSION['name']=$name;
            $_SESSION['address']=$address;
            $_SESSION['phone']=$phone;
			   ?>
			   <script>
				   alert("NETBANKING");
			    window.location.replace('pay.php');
			  </script>

			  <?php
		}
		else if($payment='cod')
		{
			$sum=mysqli_query($conn,"select sum(prate) FROM cart,products where cart.pid=products.pid and cart.userid='$m'");
			$sss=mysqli_fetch_array($sum);
			$sql="INSERT INTO orders( name, phone,address, emailid, paymentmode,price) VALUES ('$name','$phone','$address','$m','$payment','$sss[0]')";

			


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
						alert("Order Placed");
					 	window.location.replace('myorders.php');
				   </script>
				   <?php
					}
				}
			}
			else
			{
				echo "Failed";
			}
		}
?>