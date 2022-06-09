<?php
require('header.inc.php');
?>

		<!-- breadcrumb-area start -->
		<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Login</h1>
							<ul>
								<li><a href="index.php">home</a> <span class="divider">|</span></li>
								<li>Login</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area end -->
		<!-- login-area start -->
		<div class="login-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="login-content login-margin">
							<h2 class="login-title">create a new account</h2>
							<p>Create your own Unicase account.</p>
							<form action="#">
								<label>Email Address</label>
								<input type="text" />
								<input class="login-sub" type="submit" value="sign up" />
							</form>
							<div class="sign-up-today">
								<h2 class="login-title">sign up today and you'll be able to:</h2>
								<ul>
									<li>
										<span>
											<i class="fa fa-check-square-o"></i>
											<span>speed your way through the checkout</span>
										</span>									
									</li>
									<li>
										<span>
											<i class="fa fa-check-square-o"></i>
											<span>track your order easily</span>
										</span>									
									</li>
									<li>
										<span>
											<i class="fa fa-check-square-o"></i>
											<span>keep a record of your all purchase</span>
										</span>									
									</li>
								</ul>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- login-area end -->

<?php
require('footer.inc.php');
?>