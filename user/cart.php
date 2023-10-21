<?php
require ('../php/connect.php');
require ('header.php');
$pid=$_GET['id'];
echo $pid;
$email=$_SESSION['email'];
$sql="select * from cart,products where  cart.userid='$email' and products.pid=cart.pid";
$rslt=mysqli_query($conn,$sql);  

?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>My Cart</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Cart</li>
                </ol>
        </nav>
    </div>
 
    <?php
                  while($f=mysqli_fetch_assoc($rslt))
                        {
                          $em=$f['pid'];
                 
              ?>

    <div class="card mb-3">
            <div class="row g-1">
            <div class="col-md-4">
            <!-- <img src="../uploads/product/" class="img-fluid rounded-start" alt="..."> -->
                <img src="<?php echo '../uploads/product/'.$f['image'];?>" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
           
                  <h5 class="card-title"><?php echo $f['pname'];?></h5>
                
                          
                  <h4 class="card-title"><?php echo $f['description'];?></h4>
              
            
                <?php
                $ex=$f['prate']+300;

                ?>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" style="color:white;">MRP</div>
                    <div class="col-lg-9 col-md-8"><font color="red" size="5 px"><strike><?php echo "₹",$ex; ?></strike></font></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" >MRP</div>
                    <div class="col-lg-9 col-md-8"><?php echo "₹",$f['prate']; ?></div>
                  </div>
                          

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Quantity</div>
                    <div class="col-lg-9 col-md-8"><?php echo $f['quantity'];echo " "; echo $f['unit']; ?></div>
                  </div>

                  

                  

                  <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Stock Available</div>
                                  <div class="col-lg-9 col-md-8"><?php 
                                  if($f['stock']==0) 
                                  echo  "Out Of Stock";else
                                  echo $f['stock'];?></div>
                                
                                </div>
                  
                  

               <br>
                
                        <a href="cartdel.php?id=<?php echo $em;?>" class="btn btn-danger btn-sm"><i class="bx bxs-trash"></i> &nbsp;Remove</a>
                        

                </div>


                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                

            </div>
          </div>
            </div>
    </div>
    <?php
                        }
                        ?>
  <div align="center">  <a class="btn btn-primary btn-sm-3" href="checkout.php"><i class="ri-luggage-cart-line"></i>&nbsp;Place Order</a></div>
</main>
<?php
require ('footer.php');
?>