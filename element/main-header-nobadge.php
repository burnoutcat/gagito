<header class="navbar-dark navbar">
	<div class="navbar-wrapper wrapper flex-wrap flex-align-center flex-parent">

		<input type="checkbox" id="nav-menu" class="hidden">
		<label for="nav-menu">&equiv;</label>

		<a href="main.php" class="site-logo flex-child">
			<img src="img/site-logo-white.png" alt="Gagito_logo_white">
		</a>

		<div class="search-mobile flex-parent">
			<a href="product-list.php">
				<img src="img/search.svg" alt="search" style="height: 20px;">
			</a>
			<a href="cart.php" onclick="clearStorage()" class="badge-parent badge-cart">
				<img src="img/shoppingcart.svg" alt="cart" style="height: 20px;">
			</a>
		</div>
		
		<script>
			function clearStorage(){
				sessionStorage.clear();
			}
		</script>

		


		<nav class="nav flex-none nav-pills">
			<ul>
				<li><a href="category.php">Category</a></li>
				<li><a href="product-list.php">Products</a></li>
				<li><a href="product_admin.php">Admin</a></li>
				<li><a href="product-list.php" class="mobile-hide">
					<img src="img/search.svg" alt="search" style="height: 20px;">
					</a>
				</li>
				<li><a href="cart.php" onclick="clearStorage()" class="badge-parent badge-cart mobile-hide">
					<img src="img/shoppingcart.svg" alt="cart" style="height: 20px;">
					</a>
				</li>
			</ul>
		</nav>

	</div>
</header>