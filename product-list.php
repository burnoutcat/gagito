<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Products | Gagito</title>
	<meta name="viewport" content="width=device-width">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,700|Roboto+Condensed:200,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="common/common.css">
	<link rel="stylesheet" href="common/site.css">
	<link rel="stylesheet" href="css/index-style.css">

	<script src="lib/jquery-3.4.1.min.js"></script>
	<script src="js/helper.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product.js"></script>

	<script>
		function filterToggle(){
			var x = document.getElementById("all-product-filter-mobile");
			if (x.style.display === "block") {
				x.style.display = "none";
			}

			else {
				x.style.display = "block";
			}
		}
	</script>

</head>
<body>



	<?php include "element/main-header.php" ?><!--  header -->
	<?php include "element/promotion.php" ?> <!-- promotion -->

	<?php include "element/list_load.php"; ?> <!-- load data -->


	<div class="breadcrumbs container">
	<nav class="nav-crumbs">
		<ul>
			<li>
				<a href="main.php">HOME</a>
			</li>
			<li>
				<a href="product-list.php">All Products</a>
			</li>
		</ul>
		
	</nav>
</div>

	

	<div class="product-list-title-text container">
		<h1>SHOP: <span id='return'>
			<?php 
			if(isset($_GET['c'])) {
				echo "{$_GET['c']}"
				;} 
			else {
				echo "ALL PRODUCTS";
			};

			 ?></span></h1>
	</div>


	
			

	
	<div class="all-product-window image-wrapper flex-parent">
		<div class="all-product-filter">
			<div class="all-product-filter-textwrapper">
				<nav class="filter-categories all-product-title">										

					<h1>Categories</h1>
						<a href="#" class="form-button list-filter" data-value="Headphones">Headphones</a>
						<a href="#"class="form-button list-filter" data-value="In-Ear Monitors">In-Ear Monitors</a>
						<a href="#"class="form-button list-filter" data-value="Speakers">Speakers</a>
						<a href="#"class="form-button list-filter" data-value="Amplifier">Amplifier & Music Player</a>
					<h1>Brands</h1>
						<a href="#"class="form-button brand-filter" data-value="AKG">AKG</a>
						<a href="#"class="form-button brand-filter" data-value="Fitear">Fitear</a>
						<a href="#"class="form-button brand-filter" data-value="InEarz">InEarz</a>
						<a href="#"class="form-button brand-filter" data-value="KEF">KEF</a>
						<a href="#"class="form-button brand-filter" data-value="Master & Dynamic">Master & Dynamic</a>
						<a href="#"class="form-button brand-filter" data-value="Sony">Sony</a>
						<a href="#"class="form-button brand-filter" data-value="Sonos">Sonos</a>


				</nav>
				</nav>
			</div>
		</div>
		<div class="flex-child mobile-wrapper">

			<form id="list-search-form" class="list-search-form" style="margin-right: 10%;position: relative;">
				<input type="search" class="input-form list-search" style="width: 100%;font-size: 1em;margin-block-end: 3em;text-align: left;"placeholder="Search for Products">
				<img src="img/search.svg" alt="" class="search-image" style="position: absolute;top: 15%;right: 3%;height: 20px;filter: opacity(0.5);">
			</form>

			<div class="all-product-text title-text flex-parent">
				<div class="flex-child all-product-text-title">
					<p>Products List</p>
				</div>


				<div class="flex-child">
					<button class="filter-button button-wide-dark flex-child" onclick="filterToggle()" type="button" class="button">Filter</button>
				</div>



				<div class="flex-none">
					<div class="form-select-wrapper flex-parent flex-align-center">
						<span style="color:gray;font-family: Open Sans,sans-serif;font-size: 0.9em;text-transform: initial;margin-inline-end: 0.5em; white-space: nowrap;">Sort By :</span>
						<select class="list-sort form-select">
							<option value="1">Newest</option>
							<option value="2">Oldest</option>
							<option value="3">Least Expensive</option>
							<option value="4">Most Expensive</option>
						</select>
					</div>
				</div>
			</div>

			<div class="all-product-filter-mobile" id="all-product-filter-mobile">
				<hr>
			<div class="all-product-filter-textwrapper">
				<nav class="filter-categories all-product-title">


					<h1>Categories</h1>
						<a href="#" onclick="filterToggle()"  class="form-button list-filter" data-value="Headphones">Headphones</a>
						<a href="#" onclick="filterToggle()" class="form-button list-filter" data-value="In-Ear Monitors">In-Ear Monitors</a>
						<a href="#" onclick="filterToggle()" class="form-button list-filter" data-value="Speakers">Speakers</a>
						<a href="#" onclick="filterToggle()" class="form-button list-filter" data-value="Amplifier">Amplifier & Music Player</a>

					<h1>Brands</h1>
						<a href="#" onclick="filterToggle()" class="form-button brand-filter" data-value="AKG">AKG</a>
						<a href="#" onclick="filterToggle()" class="form-button brand-filter" data-value="Fitear">Fitear</a>
						<a href="#" onclick="filterToggle()" class="form-button brand-filter" data-value="InEarz">InEarz</a>
						<a href="#" onclick="filterToggle()" class="form-button brand-filter" data-value="KEF">KEF</a>
						<a href="#" onclick="filterToggle()" class="form-button brand-filter" data-value="Master & Dynamic">Master & Dynamic</a>
						<a href="#" onclick="filterToggle()" class="form-button brand-filter" data-value="Sony">Sony</a>
						<a href="#" onclick="filterToggle()" class="form-button brand-filter" data-value="Sonos">Sonos</a>
				</nav>
				</nav>
			</div>
		</div>

			

			<div class="all-product-list row gap xs-medium flex-child">
				<div class="row gap xs-medium ">
					<!--  .col-md-4.col-sm-6*12>a[href=product-item.php].card.product-item>(div.product-image>img[scr=https://via.placeholder.com/200].product-image)+div.product-text-wrapper>(div.product-brand>h3{Lorem})+(div.product-name>h2{Product $})+(div.product-price>h1{\$200}) -->
				</div> <!-- row gap xs-large -->
			</div><!-- all-product-list -->
		</div>
	</div><!-- all-product-window -->

	<?php include "element/main-footer.php" ?> <!-- footer -->

</body>
</html>