<?php

require_once "lib/php/helper.php";
require_once "element/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Gagito | Quaility Products with Right Prices</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,700,900|Roboto+Condensed:200,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="common/common.css">
	<link rel="stylesheet" href="common/site.css">
	<link rel="stylesheet" href="css/index-style.css">
	
	<script src="lib/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/carousel2.js"></script>
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

	
	<div class="recommend-product-window container">

		<div class="recommend-product-text title-text flex-parent">
			<p>Recommended Products</p>
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

	<div class="recommend-window container">

		<div class="recommend-text title-text flex-parent">
			<p>recommended category</p>
			<a href="category.php"> More &rsaquo;</a>
		</div>

		<?php include "element/category.php" ?> <!-- Recommend Catagory -->

	</div> <!-- recommend-window -->



	<div class="promotion-wrapper promotion">
		<div class="promotion-window">
			<div class="row gap xs-medium">
				<div class="promption-image-wrapper col-lg-8 col-md-12 col-sm-12 ">
					<img src="img/banner-01.jpg" alt="placeholder">
				</div>
				<div class="promotion-text-wrapper col-lg-4 col-md-12 col-sm-12">
					<h1>0% APR for 24 Months</h1>
					<p>Buy the latest gadgets with Gagito Finance. Limited time only, 0% APR for 24 months with eligible purchase.</p>
				</div>

			</div>
			
		</div>
	</div>


	<div class="newsletter-window" style="background:url(img/gagito-background-1.png) center; background-size: cover;">
		<div class="card card-container align-center">
			<div class="newletter-text">
				<h1>Join the Newsletter</h1>
				<p>Gagito sends weekly emails notifying you of trend alerts, limited-time promotions, new product launches and exclusive event invitations.</p>
				<form>
					<input class="form-large" type="text" name="emails" placeholder="Email">
				</form>
				<button class="button-wide-dark" onclick="location.href='#'" type="button" class="button" style="margin-top: 2em;">Sign Up</button>
			</div>	
		</div>
	</div>

	<?php include "element/main-footer.php" ?> <!-- footer -->


</body>
</html>