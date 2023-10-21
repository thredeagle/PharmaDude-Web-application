<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="pharmadude";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error)
{
echo "connection error:";
}

 ?>