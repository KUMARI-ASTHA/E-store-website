<?php

require("includes/common.php");

$email = mysqli_real_escape_string($con, $_POST['email']);

$password = mysqli_real_escape_string($con, $_POST['password']);
$user_password = MD5($password);

$query = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $user_password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num == 0){
	echo "<span>Please enter correct E-mail id and Password</span>";
    header( "refresh:3; url=index.php" );
} 
else
{  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: home.php');
}

?>