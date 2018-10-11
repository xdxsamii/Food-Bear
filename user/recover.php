
<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "users");

if ($_POST)
{
	$uemail=$_POST['uemail'];
	$sql = "SELECT id, email, password FROM users where email='$uemail'";
   $result = $connect->query($sql);


if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
echo "Email: " . $row["email"]. " Your Password is:" . $row["password"]. "<br>";
    
 }
}
else{
	// echo "<script>alert('This Email doesn't Exist!);</script>";
	// header("location:pass_recover.php");
	echo "<script>
alert('This Email does not Exist!');
window.location.href='pass_recover.php';
</script>";
}
}
 
?>
