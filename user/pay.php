<?php
  require "header.php";
  require "../php/connect.php";
  $m=$_SESSION['email'];
  $s="select sum(prate) as rate FROM cart,products where cart.pid=products.pid and cart.userid='$m'";
  $res=mysqli_query($conn,$s);
  $a=mysqli_fetch_assoc($res);
  $apikey="rzp_test_7Kd3Gf7E8sxTT9";


?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Payment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Pay</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section">
        <div class="row">
          <div class="col-lg-6">

            <div class="card">
              <div class="card-body">
                <h1 class="card-title">Payment</h1>
                <form>
                  <div class="row mb-2">
                    <label for="inputText" class="col-sm-3 col-form-label">Advance amount : </label>
                    <div class="col-sm-8">
                      <input type="number" disabled="" name="title" value="<?php echo $a['rate'] ; ?>" class="form-control">
                    </div>
                  </div>
                 
                 
                  <div class="col-sm-10">
                    <button type="button" onclick="pay(<?php  echo $a['rate'];?>)" class="btn btn-primary ">Pay</button>
                  </div>
                </form>


              </div>
          </div>
      </div>
  </div>
</section>



  </main><!-- End #main -->

<?php
  require "footer.php";
?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
	
	function pay(amt){
		var options = {
		"key": "<?php echo $apikey?>", // Enter the Key ID generated from the Dashboard
		"amount": amt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
		"currency": "INR",
		"name": "PharmaDude",
		"description": "Payment",
		"image": "../login/images/download.png",
		//"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
		"callback_url": "success.php?amt="+amt,
		"prefill": {
			"name": "<?php echo $f['name']?>",
			"email": "<?php echo $f['email']?>",
			"contact": "<?php echo $f['phone']?>"
		},
		"notes": {
			"address": "Razorpay Corporate Office"
		},
		"theme": {
			"color": "#3399cc"
		}
	};
	var rzp1 = new Razorpay(options);
	rzp1.open();
}
</script>