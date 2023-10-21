<?php
require "../php/connect.php";
$a=$_GET['id'];
$sql="update login set status='-1' WHERE username='$a'";
$b=mysqli_query($conn,$sql);
?>
<script>
window.location.href="scverify.php";
</script>
<?php
?>
