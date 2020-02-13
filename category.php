<?php

require_once "lib/php/helper.php";
require_once "element/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>All Category | Gagito</title>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,700|Roboto+Condensed:200,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="common/common.css">
	<link rel="stylesheet" href="common/site.css">
	<link rel="stylesheet" href="css/index-style.css">
	<script src="js/helper.js"></script>
	<script src="js/product.js"></script>

</head>
<body>

	<?php include "element/main-header.php" ?><!--  header -->
	<?php include "element/promotion.php" ?> <!-- promotion -->



	<div class="category-title-window image-wrapper" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)),url(img/cat-2.jpg) center;background-attachment:fixed;">

		<div class="category-title-text align-center row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<p>Categories</p>
			</div>
			<div class="col-lg-6" style="content: ''"></div>
		</div>
	</div>

	<div class="recommend-window container">

		<div class="recommend-text title-text flex-parent">
			<p>ALL categories</p>
		</div>

		<?php include "element/category.php" ?> <!-- Recommend Catagory --> 

	</div> <!-- recommend-window -->


	<div class="all-category-window container">

		<div class="all-category-text title-text" style="margin: 2em 0;">
			<p>Headphones</p>
		</div>

		<div class="row gap xs-large ">
 			<?php

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `product`
				WHERE category = 'Headphones'
				ORDER BY rand()
				LIMIT 4
				"
			);

			echo array_reduce($result,
				'productListTemplate');

			?>
		</div>

		<div class="all-category-text title-text" style="margin: 2em 0;">
			<p>Speakers</p>
		</div>
		<div class="row gap xs-large add-margin-2 ">
			<?php

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `product`
				WHERE category = 'Speakers'
				ORDER BY rand()
				LIMIT 4
				"
			);

			echo array_reduce($result,
				'productListTemplate');

			?>
		</div>



	
	</div> <!-- All Catagory Window -->

	<?php include "element/main-footer.php" ?> <!-- footer -->


</body>
</html>