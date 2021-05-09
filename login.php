
<!DOCTYPE html>
<html>
<head>
<title>RAG biz | Login page</title>
<meta name="theme-color" content="#105cae">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>


<!--==================================================
         		Login-section-start
================================================== -->
<section class="login__section">
	<div class="login__section--logo">
		<a href="index.php">
			<img src="images/logo.png" alt="logo">
		</a>
	</div>
	<div class="login__section--form">
		<div class="login__section--form--head">
			<h3 class="signInBtn active">Sign in</h3>
			<h3 class="signUpBtn">Sign up</h3>
		</div>

		<!-- sign-in-area -->
		<form action="#" method="POST" class="sign-in">
			<input type="text" name="email" placeholder="Email" required autocomplete="off">
			<input type="password" name="pass" placeholder="Passowrd" required autocomplete="off">
			<div class="login__section--form--forget">
				<div>
					<input type="checkbox" checked="checked" value="Bike"> Remember me<br>
				</div>
				<p>Forget Password</p>
			</div>
			<div class="submit_btn">
				<button type="submit" name="submitBtn" class="ripplelink cyan">Sign in man</button>
			</div>
		</form>

		<!-- sign-up-area -->
		<form action="#" method="POST" class="sign-up">
			<input type="text" name="user" placeholder="Name" required autocomplete="off">
			<input type="text" name="email" placeholder="Email" required autocomplete="off">
			<input type="Password" name="pass" placeholder="Password" required autocomplete="off">
			<div class="login__section--form--forget">
				<div>
					<input type="checkbox" checked="checked" value="Bike"> Remember me<br>
				</div>
				<p>Forget Password</p>
			</div>
			<div class="submit_btn">
				<button type="submit" name="submitBtn" class="ripplelink cyan">Sign in</button>
			</div>
		</form>
	</div>
</section>
<!--==================================================
         		Login-section-End
================================================== -->


<!-- script-area -->
<script src="js/main.js"></script>
</body>
</html>
