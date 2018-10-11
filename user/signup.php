

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up Form</title>
	<link rel="stylesheet" href="signup.css">
</head>
<bodys>

	<div class= "signupbox">
		
		<h2>Sign up Here</h2>
		<form method="post" action="customer.php">
			<p> First name </p>
			<input type="text" name="fname" placeholder="first name" required>
			<p> Last name </p>
			<input type="text" name="lname" placeholder="last name" required>
			<p> Your Email </p> 
			<input type="text" name="mail" placeholder="your email" required>
			<p> Password </p>
			<input type="Password" name="pass" placeholder="Password" required>
			</br></br>
			<input type="submit" name="submit" value="Done">
		</form>
	</div>
</body>
</html>

