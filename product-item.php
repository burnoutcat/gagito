<?php

require_once "lib/php/helper.php";
require_once "element/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Detail | Gagito</title>
	
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

			<?php

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `product`
				WHERE id = {$_GET['id']}
				"
			);

			// print_p($result);

			echo array_reduce($result,
				'productItemTemplate');

			echo array_reduce($result,
				'productFeatureTemplate');

			echo array_reduce($result,
				'productSpecTemplate');

			?>
			
	
	<div class="recommend-product-window container" style="margin-top: 6em;margin-bottom: 2em;">

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
				WHERE id <> {$_GET['id']}
				AND category = '{$result[0]->category}'
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