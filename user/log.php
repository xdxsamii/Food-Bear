<?php 
session_start();

$connect = mysqli_connect("localhost", "root", "", "users");
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($connect,$_POST['email']);
      $password = mysqli_real_escape_string($connect,$_POST['pass']); 
      
      $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         header("location: show.php");
      }
      else {
         header("location:user.php");
      }
   }

 ?>