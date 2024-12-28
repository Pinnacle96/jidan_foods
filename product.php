<?php
include('includes/header.php');
//session_start();
error_reporting(0);
?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Nutritious Food</p>
						<h1>Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150" id="product">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/Layer 1.jpg" alt=""></a>
						</div>
						<h3>Jidan Nutrimix</h3>
						<p class="product-price"><span>Weanimix is a nutritious food blend typically made from a combination of cereals (such as, Vitamin A maize, millet, sorghum), legumes (such as, soybeans, groundnuts), ginger, tigernut, dates fruit, fishmeal.</span> 500g </p>
						<a href="nutrimix.php" class="cart-btn"><i class="fas fa-book"></i> Read more..</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/Layer 3.jpg" alt=""></a>
						</div>
						<h3>Jidan Weanimix</h3>
						<p class="product-price"><span>Weanimix is a nutritious food blend typically made from a combination of cereals (such as, Vitamin A maize, millet, sorghum), legumes (such as, soybeans, groundnuts), ginger, tigernut, dates fruit, fishmeal.</span> 1kg </p>
						<a href="weanimix.php" class="cart-btn"><i class="fas fa-book"></i> Read more..</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/Layer 4.jpg" alt=""></a>
						</div>
						<h3>Jidan Weanimix Cereal</h3>
						<p class="product-price"><span>Weanimix is a nutritious food blend typically made from a combination of cereals (such as, Vitamin A maize, millet, sorghum), legumes (such as, soybeans, groundnuts), ginger, tigernut, dates fruit, fishmeal.</span> 500g </p>
						<a href="weanimixcereal.php" class="cart-btn"><i class="fas fa-book"></i> Read more..</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	

	<?php include('includes/footer.php'); ?>