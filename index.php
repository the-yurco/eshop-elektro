<?php
include('templates/header.php');
include('templates/banner.php');
?>

<div class="container">
	<div class="main-content">
		<div class="products-grid">
			<div id="product1" class="col-md-4 product simpleCart_shelfItem text-center">
				<div class="product-image-image">
					<a href="single.php"><img src="./images/product.jpg" alt="Elektro produkt" /></a>
				</div>
				<div class="product-details">
					<a id="product-name1" class="product_name" href="single.php">Elektro produkt</a>
					<p class="product-price">
						<a class="item_add" href="#">
							<i class="fas fa-cart-plus"></i> <span id="product-price1" class="item_price">$299</span>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>



<?php include('templates/footer.php'); ?>