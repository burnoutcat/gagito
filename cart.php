<?php

require_once "lib/php/helper.php";
require_once "element/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart | Gagito</title>

	<meta name="viewport" content="width=device-width">

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

	<div class="cart-text title-text container">
		<p>MY CART</p>
		<hr>
	</div>

	<div class="cart-window container flex-parent">

		<div class="cart-item-wrapper flex-child">


		</div><!-- cart-item-wrapper (left) -->

		<div class="cart-checkout-window cart">
			<div class="cart-checkout-wrapper">
				<h1>Subtotal</h1>
			</div>

			<hr>

			<div class="cart-checkout-detail"></div>
			<div class="cart-checkout-button">
				<button class="button-wide-dark" onclick="location.href='payment.php'" type="button" class="button" style="margin-top: 2em;">Next</button>
			</div>
		</div>		


	</div><!-- cart-window -->

	<?php include "element/main-footer.php" ?> <!-- footer -->

</body>
</html>