<?php
require('header.inc.php');
?>

		<!-- breadcrumb-area start -->
		<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Wishlist</h1>
							<ul>
								<li><a href="index.php">home</a> <span class="divider">|</span></li>
								<li><a href="cart.php">Shopping cart</a> <span class="divider">|</span></li>
								<li>Wishlist</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area end -->
		<!-- wishlist-area start -->
		<div class="wishlist-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="wishlist-content">
							<form action="#">
								<div class="wishlist-table table-responsive">
									<table>
										<thead>
											<tr>
												<th class="product-remove"><span class="nobr">Remove</span></th>
												<th class="product-thumbnail">Image</th>
												<th class="product-name"><span class="nobr">Product Name</span></th>
												<th class="product-price"><span class="nobr"> Unit Price </span></th>
												<th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
												<th class="product-add-to-cart"><span class="nobr">add-to-cart </span></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="product-remove"><a href="#">×</a></td>
												<td class="product-thumbnail"><a href="#"><img src="img/cart/2.jpg" alt="" /></a></td>
												<td class="product-name"><a href="#">Lorem ipsum dolor</a></td>
												<td class="product-price"><span class="amount">£125.00</span></td>
												<td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
												<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
											</tr>
											<tr>
												<td class="product-remove"><a href="#">×</a></td>
												<td class="product-thumbnail"><a href="#"><img src="img/cart/3.jpg" alt="" /></a></td>
												<td class="product-name"><a href="#">Lorem ipsum dolor</a></td>
												<td class="product-price"><span class="amount">£90.00</span></td>
												<td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
												<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
											</tr>
										</tbody>
									</table>
								</div>	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- wishlist-area end -->

<?php
require('footer.inc.php');
?>