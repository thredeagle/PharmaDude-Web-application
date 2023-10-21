<?php
session_start();
include "connect.php";
$email=$_POST['name'];
$pass=$_POST['password'];
$sql="select * from login where username='$email'";
$rslt=mysqli_query($conn,$sql);
$num=mysqli_num_rows($rslt);
if($num==0)
{
    ?>
    <script>
        alert("Account not found!!");
        window.location.href="../login/signin/login.php";
    </script>
    <?php
}
else
{
  $data=mysqli_fetch_assoc($rslt);

  
  if($pass!=$data['password'])
  {
      ?>
    <script>
        alert("Password does not match!!");
        window.location.href="../login/signin/login.php";
    </script>
    <?php
  }
  else
  {
    $_SESSION['email']=$email;
    if($data['utype']=='l')
   {
      
     
      ?>
      <script>
          window.location.href="../lab/index.php";
      </script>
      <?php
    }
   
   else if($data['utype']=='a')
    {
       
       ?>
       <script>
           window.location.href="../admin/index.php";
       </script>
       <?php
     }

     else if($data['utype']=='u')
    {
       
       ?>
       <script>
           window.location.href="../user/index.php";
       </script>
       <?php
     }

     else if($data['utype']=='s')
    {
       
       ?>
       <script>
           window.location.href="../scollector/index.php";
       </script>
       <?php
     }

  }
  
}


?>