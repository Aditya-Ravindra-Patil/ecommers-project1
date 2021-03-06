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
						<div class="login-content">
							<h2 class="login-title">Login</h2>
							<p>Hello,Welcome to your account</p>
							<div class="social-sign">
								<a href="#"><i class="fa fa-facebook"></i> Sign in with facebook</a>
								<a class="twitter" href="#"><i class="fa fa-twitter"></i> Sign in with twitter</a>
							</div>
							<form action="#">
								<label>Email Address</label>
								<input type="text" />
								<label>Password</label>
								<input type="password" />
								<div class="login-lost">
									<span class="log-rem">
										<input type="checkbox" />
										<label>Remember me!</label>
									</span>
									<span class="forgot-login">
										<a href="#">Forgot your password?</a>
									</span>
								</div>
								<input class="login-sub" type="submit" value="Login" />
							</form>
						</div>
					</div>
					<div class="col-md-6">
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