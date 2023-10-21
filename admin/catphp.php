<?php
require '../php/connect.php';
$category=$_POST['category'];
$type=$_POST['type'];
$sql="insert into category(categoryname,type) values('$category','$type')";
$rslt=mysqli_query($conn,$sql);
?>
<script>
    alert("Category Inserted");
    window.location.replace('category.php');
</script>