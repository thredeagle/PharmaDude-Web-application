
<?php
require ('header.php');
$m=$_SESSION['email'];
$orde=mysqli_query($conn,"select * from orders where emailid='$m' order by orderdate desc");

?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>My Orders</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">My Orders</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

    <div class="row">
       

        <div class="col-lg-10 offset-1">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><b>Orders List</b></h5>

              <!-- Accordion without outline borders -->
              <div class="accordion accordion-flush" id="accordionFlushExample">
              <?php
               
                while($orderrow=mysqli_fetch_assoc($orde))
                {

                  $oid=$orderrow['orderid'];

                    ?>


                    <div class="accordion-item mb-1">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $orderrow['orderid'];?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $orderrow['orderid'];?>">
                    <div class="row">
                      <div class="col" style="width: 60% !important;">
                     
                         <h2 style="text-transform: capitalize;"><?php echo $orderrow['name'];?></h2>
                    
                    <p>Address: <b><?php echo $orderrow['address'];?></b></p>
                    <?php if($orderrow['status']!=-1){ ?>
                   <a class="btn btn-success btn-sm"> <?php  if($orderrow['status']==0)
                                    {echo "Ordered";}
                                    else if($orderrow['status']==1)
                                    {echo "In Progress";}
                                    
                                    else{echo "Delivered";} ?></a>
                                   
                                    <?php } ?>
                                    <?php if($orderrow['status']==-1){ ?>
                                      <font color="red"><strike>Cancelled</strike></font><?php
                                    } ?>
                  
                                  
                    </div>  
                    

                    

                    <div class="col"  style="width: 50%  !important; align-items: right;">
                         <h2 style="text-transform: capitalize;"><br></h2>
                    <p>Date: <b><?php echo $orderrow['orderdate'];?></b></p>

                    <p>Payment: <b><?php echo $orderrow['paymentmode'];?></b></p>                    
                    
                    </div>  

                      </div>
    
                   
                        
                    </button>
                  </h2>
                  <div id="flush-collapse<?php echo $orderrow['orderid'];?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="row">
                        <div class="col-lg-12">

                        <div class="">
                            <div class="card-body">
                            <h5 class="card-title">Items Details</h5>
<?php $st=$orderrow['status'];?>
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Quantity</th>

                                </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                  $osql="select * from products,orderitems,orders where orders.emailid='$m' and orderitems.orderid=orders.orderid AND orderitems.pid=products.pid and orderitems.orderid='$oid'";
                                  $s=mysqli_query($conn,$osql);
                                //  echo $osql;
                                  $n=1;
                                  while($orow=mysqli_fetch_assoc($s))
                                  {
                                    
                                  ?>
                                <tr>
                                    <td><?php echo $n++;?></td>
                                    <td><?php echo $orow['pname'];?></td>
                                    <td><?php echo $orow['description'];?></td>
                                    <td><?php echo $orow['prate'];?></td>
                                    <td><?php echo $orow['quantity']." ".$orow['unit'];?></td>
                                    <td><?php if($st==1 || $st==0){?><a class="btn btn-danger btn-sm" href="cancel.php?id=<?php echo $oid;?>">Cancel </a><?php } ?></td>
                                    
                                  </tr>

                                <?php 
                                }

                                ?>
                              
                                <tr>
                                    <th scope="row"></th>
                                    <th></th>
                                    
                                    <th>Total</th>
                                    <th><?php echo $orderrow['price'];?></th>
                                    <th></th>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                            </div>
                        </div>

                      
                        </div>

                      
                    </div>
                  </div>
                </div>

                    <?php
                    
                }
              ?>
                <!-- <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div> -->
               
              </div><!-- End Accordion without outline borders -->

            </div>
          </div>

        </div>
      </div>
 
    </section>

  </main><!-- End #main -->
  <?php
  require ('footer.php');
  ?>

  