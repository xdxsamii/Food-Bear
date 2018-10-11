
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
</br>
	<h1><i>FOOD BEAR</i></h1>
	<div class= "loginbox">
		<img src="rifat.jpg" class="rifat">
		<h2>Log in Here</h2>

		
		<form action="log.php" method="post">
			<p> Email </p>
			<input type="text" name="email" placeholder="Enter email" required>
			<p> Password </p>
			<input type="pass" name="pass" placeholder="Your Password" requireds>
			<input type="submit" name="" value="Log In">
			<br> </br>
			<a href="pass_recover.php">Forget Password</a>
		</br></br>
			<a href="signup.php">Sign Up Here</a>
		</form>
	</div>
</body>
</html>