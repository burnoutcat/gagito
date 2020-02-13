<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Check Out | Gagito</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,700|Roboto+Condensed:200,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="common/common.css">
	<link rel="stylesheet" href="common/site.css">
	<link rel="stylesheet" href="css/index-style.css">

	<script src="lib/jquery-3.4.1.min.js"></script>
	<script src="js/helper.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product.js"></script>
	<script src="js/cart.js"></script>

</head>
<body>

	<?php include "element/checkout-header.php" ?>

	<div class="checkout-text title-text container">
		<p>Check Out</p>
		<hr>
	</div>


	<div class="checkout-window container flex-parent">
		<div class="checkout-window-input">
			
			<div class="new-address input-card">
				<fieldset>
					<div class="checkout-input-title title-text">
						<span>Shipping Address</span>
					</div>


					<label class="checkout-input flex-parent" for="Name">
						<span class="input-label">Name</span>
						<span class="text-input-long">
							<input class="input-form" type="text" name="name" placeholder="">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="Address">
						<span class="input-label">Address</span>
						<span class="text-input-long">
							<input class="input-form" type="text" name="address" placeholder="">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="Address">
						<span class="input-label"></span>
						<span class="text-input-long">
							<input class="input-form" type="text" name="address" placeholder="(OPTIONAL)">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="City">
						<span class="input-label">City</span>
						<span class="text-input-long">
							<input class="input-form" type="text" name="City" placeholder="">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="State">
						<span class="input-label">State</span>
						<span class="text-input-long">
							<input class="input-form" type="text" name="State" placeholder="">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="Zip Code">
						<span class="input-label">Zip Code</span>
						<span class="text-input-short">
							<input class="input-form" type="text" name="zipcode" placeholder="">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="email">
						<span class="input-label">Email</span>
						<span class="text-input-short">
							<input class="input-form" type="text" name="email" placeholder="">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="phone">
						<span class="input-label">Phone</span>
						<span class="text-input-short">
							<input class="input-form" type="text" name="phone" placeholder="(OPTIONAL)">
						</span>
					</label>

				</fieldset>
			</div><!-- new-address -->

			<hr class="add-margin-1">
				
			<div class="new-payment input-card">
				<fieldset>
					<div class="checkout-input-title title-text">
						<span>Payment Options</span>
					</div>

		

	
					 <label class="checkout-input flex-parent" for="ccname">
						<span class="input-label">Name</span>
						<span class="text-input-long">
							<input class="input-form" type="text" name="ccname" placeholder="">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="ccnum">
						<span class="input-label">Card Number</span>
						<span class="text-input-long">
							<input class="input-form" type="text" name="ccnum" placeholder="">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="ccexp">
						<span class="input-label">Exp. Date</span>
						<span class="text-input-short">
							<input class="input-form" type="text" name="ccexp" placeholder="">
						</span>
					</label>
					<label class="checkout-input flex-parent" for="cccvv">
						<span class="input-label">CVV</span>
						<span class="text-input-short">
							<input class="input-form" type="text" name="cccvv" placeholder="">
						</span>
					</label>

					<hr>


				</fieldset>
			</div> 
			<!-- new-payment -->

			
		</div> <!-- checkout-window -->

		<div class="flex-child">

			<div class="item-summary">
				<div class="checkout-input-title title-text add-margin-1">
						<span>Order Summary</span>
				</div>

				<hr class="add-margin-1">


				<div class="cart-item-wrapper"></div>
				<hr>
				<div class="cart-checkout-detail"></div>
				<div class="cart-checkout-button">
					<button class="button-wide-dark" onclick="location.href='confirmation.php'" type="button" class="button" style="margin-top: 2em;">Place Order</button>
				</div>

			</div>

			
		</div>

	

			
		</div>

	</div>

<?php include "element/main-footer.php" ?> <!-- footer -->



</body>
</html>