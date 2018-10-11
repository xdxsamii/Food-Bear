<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "users");
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$first_name = mysqli_real_escape_string($connect, $_REQUEST['fname']);
$last_name = mysqli_real_escape_string($connect, $_REQUEST['lname']);
$email = mysqli_real_escape_string($connect, $_REQUEST['mail']);
$password = mysqli_real_escape_string($connect, $_REQUEST['pass']);

$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email','$password')";
if(mysqli_query($connect, $sql)){
    header("location: show.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
// close connection
mysqli_close($connect);

// if (isset($_POST["submit"])) {
	
//  	$first_name= mysql_real_escape_string($_POST['fname']);
//  	$last_name=mysql_real_escape_string($_POST["lname"]);
//  	$email=mysql_real_escape_string($_POST["mail"]);
//  	$Password=mysql_real_escape_string($_POST["pass"]);
//  	$Password2=mysql_real_escape_string($_POST["pass2"]);
//  if($Password==$Password2){
//  	$Password = md5 ($Password);
//  	$sql = "INSERT INTO users (first_name,last_name,email,password) VALUES ('$first_name','$last_name','$email','$Password')";

//  	mysqli_query($connect,$sql); 
//  	$_SESSION['message'] = "you are logged in"; 
//  	$_SESSION['first_name'] = $first_name;
//  	header("location:show.php");
//  }
//  else{
//  	$_SESSION['message']="password not matched";
//  }
	

	

 	# code...
 // }
?>