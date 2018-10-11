
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
</br>
	<h1><i>Admin Log in Portal</i></h1>
	<div class= "loginbox">
		<img src="rifat.jpg" class="rifat">
		<h2>Log in Here</h2>

		<?php
		
		if ($_POST){
		$username = $_POST['username'];
		$password=$_POST['pass'];
   if( $username !== "admin" || $password!=="admin" ) {
      
      // echo "Invalid Inputs";
  }
  else{
  	
      header("location:portal.php");
      exit();
   }
}
?>

		
		<form action="" method="POST">
			<p> User Name </p>
			<input type="text" name="username" placeholder="enter username">
			<p> Password </p>
			<input type="Password" name="pass" placeholder="Your Password">
			<input type="submit" name="" value="Log In">
		</br> 
		</form>
	</div>
</body>
</html>