<?php 

function productListTemplate($carry,$item){
	return $carry.<<<HTML


<div class="product-item col-md-3 col-sm-6">
	 	<a href="product-item.php?id=$item->id">
	 		<div class="fav">
					<input type="checkbox" id="fav $item->id" class="hidden">
				<label for="fav $item->id">&hearts;</label>
	 		</div>
	 		<div class="product-image"><img src="$item->image_main" alt="" class="product-image"></div>
	 		<div class="product-text-wrapper">
	 			<div class="product-brand">
	 				<h3>$item->brand</h3>
	 			</div>
	 			<div class="product-title">
	 				<h2>$item->name</h2>
	 			</div>
	 			<div class="product-price">
	 				<h1>USD $item->price</h1>
	 			</div>
	 		</div>
	 	</a>
</div>

HTML;
}

function productItemTemplate($carry,$item) {
$otherimages = array_reduce(
	explode(",", $item->image_other),
	function($c,$i){return $c."<img src='img/$i' alt='' class='media-image'>";}
);
return $carry.<<<HTML

<div class="breadcrumbs container">
	<nav class="nav-crumbs">
		<ul>
			<li>
				<a href="main.php">HOME</a>
			</li>
			<li>
				<a href="product-list.php">All Product</a>
			</li>
			<li>
				<a href="product-list.php?c=$item->category">$item->category</a>
			</li>
			<li><span>$item->name</span></li>
		</ul>
		
	</nav>
</div>

<div class="product-item-main-window container">
	<div class="row gap xs-medium product-item-main-wrapper">

		<div class="product-item-image col-lg-7 col-md-6 col-sm-12">
			<div class="product-imagemain">
				<img src="$item->image_main" class="media-image" alt="Sony-wh1000xm3">
			</div>
			<div class="product-thumbs">
				<img src="$item->image_main" alt="" class="media-image">
					$otherimages
			</div>
		</div>
		<div class="product-item-main-wrapper col-lg-5 col-md-6 col-sm-12">
			<div class="product-item-main-title">
				<div class="product-brand">
					<p>$item->brand</p>
				</div>
				<div class="product-title">
					<p>$item->name</p>
				</div>
			</div>
			<div class="product-item-main-description">
				<h1>DESCRIPTION</h1>
				<p>$item->description</p>
			</div>
			<div class="product-item-main-purchase-wrapper flex-align-center">
				<div class="product-price">
			 		<p>$ $item->price</p>
				</div>
				<div class="product-quantity flex-parent">
					<button class="button-small-light minus-button" onclick="location.href='#'" type="button" class="button">-</button>
					<input type="text" name="name" value="1" style="margin: 0 1em">
					<button class="button-small-light plus-button" onclick="location.href='#'" type="button" class="button">+</button>
				</div>	
			</div>
			<div class="product-addtocart">
					<button class="button-wide-dark js-add-to-cart" data-id="$item->id" onclick="document.getElementById('cart-window').style.display='block'" type="button" class="button" style="margin-top: 2em;width: 100%;">ADD TO CART</button>
				</div>
		</div>
	</div>
</div>

<div class="product-item-detail-wrapper container">
	<div class="product-item-main-description">
		<h1>PRODUCT DESCRIPTION</h1>
		<p>$item->description</p>
	</div>
</div>



<div class="on-page-cart-window" id='cart-window'>
	<div class="product-item-cart">
		<h1>item added to cart</h1>
		<hr style="width: 100%; margin:1em 0 1em 0;">
	</div>
	<div class="product-1 flex-parent add-margin-2">
		<div class="cart-item-img">
			<img src="$item->image_main" alt="">
		</div>
		<div class="cart-item-textwrapper">
			<div class="cart-item-name">
				<h1>$item->name</h1>
				<h2>$item->brand</h2>
			</div>

			<div class="cart-item-price">
				<h1>$ $item->price</h1>
				<h2>Free Ground Shipping</h2>
			</div>
		</div>
	</div>
	<div class="on-page-cart-button" >
		<button class="button-wide-dark" onclick="document.getElementById('cart-window').style.display='none'" type="button" class="button" style="width: 100%;background-color: #888686;border: initial;margin-block-end: 1em;margin-block-start: 1em;">Contiune Shopping</button><br>
		<button class="button-wide-dark" onclick="location.href='cart.php'" type="button" class="button" style="width: 100%;">Go To Cart</button>
	</div>
	
</div>


HTML;

}


function productFeatureTemplate($carry,$item) {
	$featureList = array_reduce(
		explode(",",$item->feature),
		function($c,$i){return $c."<div class='product-item-feature-list col-lg-3 col-md-3 col-sm-6'>$i</div>";}
	);
return $carry.<<<HTML
	<div class="product-item-feature container align-center">
		<h1 style="margin-bottom: 1em;">FEATURES</h1>
		<div class="row gap xs-medium">
				$featureList
		</div>
	</div>

HTML;

}

function productSpecTemplate($carry,$item){
	return $carry.<<<HTML
	<div class="product-spec-window container">
		<div class="product-spec-title product-item-feature align-center">
			<h1>TECH SPECS</h1>
		</div>
		<div class="product-spec-name align-center">
			<h1>$item->brand $item->name</h1>
		</div>
		<div class="product-spec-detail">
			<div class="flex-child">
				<hr>
				<dt>Brand</dt>
					<dd>$item->brand</dd>
				<hr>
				<dt>Category</dt>
					<dd>$item->category</dd>
				<hr>
				<dt>Model Number</dt>
					<dd>$item->model_number</dd>
				<hr>
				<dt>Driver</dt>
					<dd>$item->driver</dd>
				<hr>
				<dt>Freq. Response</dt>
					<dd>$item->freq_response</dd>
			</div>
			<div class="flex-child">
				<hr>
				<dt>Name</dt>
					<dd>$item->name</dd>
				<hr>
				<dt>File Support</dt>
					<dd>$item->file_support</dd>
				<hr>
				<dt>Dimension</dt>
					<dd>$item->dimension</dd>
				<hr>
				<dt>Weight</dt>
					<dd>$item->weight oz.</dd>
				<hr>
				<dt>Color</dt>
					<dd>$item->color</dd>
			</div>
		</div>
	</div>

	<div class="product-item-detail-image align-center container">
		<img src='img/$item->image_banner' alt="placeholder" style="width: 100%; height: auto; margin-top: 1em; max-width: 800px;">	
	</div>

HTML;
}

function cartItemTemplate($carry,$item) {
	return $carry.<<<HTML
	<div class="product-1 flex-parent">
		<div class="cart-item-img">
			<img src="$item->image_main" alt="">
		</div>
		<div class="cart-item-textwrapper">

			<div class="cart-item-name">
				<h1>$item->name</h1>
				<h2>$item->brand</h2>
			</div>

			<div class="cart-item-price">
				<h1>$ $item->price</h1>
				<h2>Free Ground Shipping</h2>
			</div>

			<div class="product-quantity flex-parent">
				<button class="button-small-light minus-button" onclick="location.href='#'" type="button" class="button">-</button>
				<input type="text" name="name" value="1">
				<button class="button-small-light plus-button" onclick="location.href='#'" type="button" class="button">+</button>
			</div>	
			<a href="#">delete</a>
		</div>
	</div>

	<hr>
HTML;
}

 ?>
