<!DOCTYPE html>
<html>
<head>

	<title>Shoes Unlimited</title>
	<link rel="stylesheet" type="text/css" href="Logi&Signup/style.css">

</head>
<body>
	<section>
		<div class="container">
			<div class="user signinBx">
				<div class="imgBx">
					<img src="Logi&Signup/img/img3.jpg">
						</div>
							<div class="formBx">
								<form action="Logi&Signup/recaptcha/verifForm.php" method="POST">
									<h2>Sign In</h2>
									<input type="text" name="userName" placeholder="Username">
									<input type="password" name="password" placeholder="Password">
									
									<div class="g-recaptcha" data-sitekey="6LfOaMwaAAAAAOVgL-vwP6WDUoDsDhpVd4cxOgfG"></div>
									
									<input type="submit" id="signInBtn" name="signInBtn" value="Login">
									<p class="signUp"> Don't have an account? <a href="#" onclick="toggle();">Sign Up!</a></p>
								</form>
							</div>
						</div>
						<div class="user signupBx">
							<div class="formBx">
								<form action="Logi&Signup/recaptcha/verifForm.php" method="POST">
									<h2>Create and Account</h2>
									<input type="text" name="" placeholder="Username">
									<input type="email" name="" placeholder="Email">
									<input type="password" name="" placeholder="Password">
									<input type="password" name="" placeholder="Confirm-Password">
									
									<div class="g-recaptcha" data-sitekey="6LfOaMwaAAAAAOVgL-vwP6WDUoDsDhpVd4cxOgfG"></div>
									
									<input type="submit" id="signupBtn" name="signupBtn" value="Sign Up">
									<p class="signup"> Already have an account? <a href="" onclick="toggle();">Sign In!</a></p>
								</form>
							</div>
							<div class="imgBx">
								<img src="Logi&Signup/img/img2.jpg">
						</div>
					</div>
				</div>
	</section>

	<script type="text/javascript">
		function toggle(){
			var container = document.querySelector('.container');
			container.classList.toggle('active');
		}
	</script>
	 <script src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>
