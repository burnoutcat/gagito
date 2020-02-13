<?php 

require_once "lib/php/helper.php";
require_once "element/templates.php"

 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gagito Component</title>

	<meta name="viewport" content="width=device-width">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,700|Roboto+Condensed:200,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="common/common.css">
	<link rel="stylesheet" href="common/site.css">
	<link rel="stylesheet" href="css/index-style.css">

	<script src="lib/jquery-3.4.1.min.js"></script>
	<script src="js/helper.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product.js"></script>


</head>
<body>

	<?php include "element/main-header.php" ?><!--  header -->
	<?php include "element/promotion.php" ?> <!-- promotion -->


	<div id="main-carosel" class="carousel image-wrapper">

		<div class="carosel-wrapper row">
			<div class="carosel-overlap col-md-5 col-sm-12">
				<div class="carosel-overlap-text-wrapper active">
					<h1>Count down to 2019 Gagito Sales Event</h1>
					<h2>High-end headphones, amplifiers, music players and DACs.Wireless Hi-Fi sound systems and home theaters.</h2>
				</div>
				<div class="carosel-overlap-text-wrapper">
					<h1>2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, dolor.</h1>
					<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
				</div>
				<div class="carosel-overlap-text-wrapper">
					<h1>3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, dolor.</h1>
					<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
				</div>
				<div class="carosel-overlap-text-wrapper">
					<h1>4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, dolor.</h1>
					<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
				</div>			
				<div class="carosel-overlap-buttom">
					<button class="button-wide-dark" onclick="location.href='product-list.php'" type="button" class="button" style="margin-top: 2em;">MORE</button>
				</div>
			</div>
			<div class="col-sm-7" style="content:''"></div>
		</div>


		<div class="slides" style="filter: brightness(0.8);">
			<div class="slide center" style="background:url(img/sale-event-1.png) center; background-size: cover;"></div>
			<div class="slide" style="background:url(img/sale-event-2.png) center; background-size: cover;"></div>
			<div class="slide" style="background:url(img/sale-event-3.png) center; background-size: cover;"></div>
			<div class="slide" style="background:url(img/sale-event-4.png) center; background-size: cover;"></div>
		</div>
		<div class="controls">
			<div class="control-left">&lt;</div>
			<div class="control-right">&gt;</div>
			<div class="control-pagination">
				<div class="control-dot">&bullet;</div>
				<div class="control-dot">&bullet;</div>
				<div class="control-dot">&bullet;</div>
				<div class="control-dot">&bullet;</div>
			</div>
		</div>
	</div>

		<script>
			new Carousel({
				el:$(".carousel").eq(0),
				timing:6000
			})
		</script>

		<div class="container">

			<?php include "element/category.php" ?>

		</div>

		<div class="container row">
				<?php 

						$result = makeQuery(
							makeConn(),
							"
							SELECT * 
							FROM `product`
							"
						);

							echo array_reduce($result,
							'productListTemplate');

	
					 ?>
		 </div>

		 <div class="container confirmation-title-text">
			<h1>THANK YOU FOR YOUR ORDER</h1>
			<h2>Your Order Number <span id="showid"></span> is confirmed</h2>
			<p>Thank you for shipping with us! Your order is being processed, and once your payment is confirmed, we will send you an email. You can check your order status in My Orders page. Once again, thank you for choosing Gagito. </p>
			<div class="cart-checkout-button">
				<button class="button-wide-dark" onclick="clearStorage();location.href='main.php'" type="button" class="button" style="margin-top: 2em;">Continue Shopping</button>
			</div>
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

		 <?php include "element/main-footer.php" ?>



</body>
</html>