<?php
	include_once "lib/php/functions.php";

	$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Added to Cart page</title>
	<? include "parts/meta.php"; ?>	
</head>
<body>
	<? include "parts/navbar.php"; ?>
	
	<div class="container">
		<div class="card soft">
			<h2>You added <?= $product->title ?> to your cart!</h2>
			<div class="display-flex">
				<div class="flex-none">
					<a href="product_list.php">Continue Shopping</a>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">
					<a href="product_cart.php">Go To Cart</a>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>