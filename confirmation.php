<?php

require_once "lib/php/helper.php";
require_once "element/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script>

		// Random ID Generator
		function idGenerator(max){};
		idGenerator.prototype.rand = 
		Math.floor(Math.random()*Math.floor(100000000));

		idGenerator.prototype.getID = function(){
			return this.rand;
		};

		var idGen = new idGenerator();

		// Show Date and Time
		var dt = new Date();
		var DD = ("0" + dt.getDate()).slice(-2);
		var MM = ("0" + (dt.getMonth()+1)).slice(-2);
		var YYYY = dt.getFullYear();
		var hh = ("0" + dt.getHours()).slice(-2);
		var mm = ("0" + dt.getMinutes()).slice(-2);
		var ss = ("0" + dt.getSeconds()).slice(-2);

		var timeString = YYYY + "/" + MM + "/" + DD + " " + hh + ":" + mm + ":" + ss; 

		console.log(timeString);
	

		document.addEventListener("DOMContentLoaded", function() {
  			idGen.getID();
			document.getElementById("showid").innerHTML = idGen.getID();
			document.getElementById("showtime").innerHTML = timeString;
		});

	</script>

	<title>Order Confirmed</title>
	<?php include "element/head.php" ?>



</head>
<body>
	<?php include "element/main-header-nobadge.php" ?>
	<?php include"element/promotion.php" ?>

	<div class="confirmation-window container">

		<div class="flex-child confirmation-title-text">
			<h1>THANK YOU FOR YOUR ORDER</h1>
			<h2>Your Order Number <span id="showid"></span> is confirmed</h2>
			<p>Thank you for shipping with us! Your order is being processed, and once your payment is confirmed, we will send you an email. You can check your order status in My Orders page. Once again, thank you for choosing Gagito. </p>
			<div class="cart-checkout-button">
				<button class="button-wide-dark" onclick="clearStorage();location.href='main.php'" type="button" class="button" style="margin-top: 2em;">Continue Shopping</button>
			</div>
		</div>


		<div class="item-summary confirmation-summary">
			<div class="title-text add-margin-1">

					<p><b>Your Order</b> (placed on <span id="showtime"></span>)</p>
			</div>

			<hr class="add-margin-1">


			<div class="cart-item-wrapper"></div>
			<hr>
			<div class="cart-checkout-detail"></div>

		</div>

	</div>

	<div class="recommend-product-window container add-margin-2">

		<div class="recommend-product-text title-text flex-parent">
			<p>Customers Also Bought</p>
			<a href="product-list.php"> More &rsaquo;</a>
		</div>

		<div class="recommend-product-list">
			<div class="row gap xs-medium">
			<?php

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `product`
				ORDER BY rand()
				LIMIT 4
				"
			);

			echo array_reduce($result,
				'productListTemplate');

			?>
			</div>
		</div> <!-- recommend-product-list -->
	</div>



<?php include "element/main-footer.php" ?> <!-- footer -->
	
</body>
</html>