<!DOCTYPE html>
<html>
<head>

	<title>Shoes Unlimited</title>
	<link rel="stylesheet" type="text/css" href="Logi&Signup/style.css">
	
	<!-- jquery start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>	
    <!-- Jquery end -->

</head>
<body>
	<section>
		<div class="container">
			<div class="user signinBx">
				<div class="imgBx">
					<img src="Logi&Signup/img/img3.jpg">
						</div>
							<div class="formBx">
								<form action="Logi&Signup/recaptcha/recaptcha_Conf.php" method="POST" id="form">
									<h2>Sign In</h2>
									<input type="text" name="userName" id="userName" placeholder="Username">
									<input type="password" name="password" id="password" placeholder="Password">
									
									<div class="g-recaptcha" data-sitekey="6LfOaMwaAAAAAOVgL-vwP6WDUoDsDhpVd4cxOgfG"></div>
									
									<input type="submit" id="signInBtn" name="signInBtn" value="Login">
									<p class="signUp"> Don't have an account? <a href="#" onclick="toggle();">Sign Up!</a></p>
								</form>
							</div>
						</div>
						<div class="user signupBx">
							
							<div class="formBx">

								<form action="Logi&Signup/recaptcha/recaptcha_Conf.php" method="POST" id="forms">

									<h2>Create an Account</h2>
									
									<input type="text" name="unameup" id="unameup" placeholder="Username">
									<input type="email" name="emailup" id="emailup" placeholder="Email">
									<input type="password" name="passup" id="passup" placeholder="Password">
									<input type="password" name="conf_passup" id="conf-passup" placeholder="Confirm-Password">
									
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
<style>.error {color: red;}</style>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="js/verifySignup.js" type="text/javascript" ></script>
<script src="js/verifySignin.js" type="text/javascript"></script>
</body>
</html>
