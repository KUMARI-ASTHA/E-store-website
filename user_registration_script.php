<?php
	require("includes/common.php");

	$name = mysqli_real_escape_string($con, $_POST['name']);

	$email = mysqli_real_escape_string($con, $_POST['email']);

	$password = mysqli_real_escape_string($con, $_POST['password']);
	$user_password = MD5($password);

	$contact = mysqli_real_escape_string($con, $_POST['contact']);

	$city = mysqli_real_escape_string($con,$_POST['city']);

	$address =mysqli_real_escape_string($con, $_POST['address']);

	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	$regex_num = "/^[6789][0-9]{9}$/";

  	$query = "SELECT * FROM users WHERE email='$email'";
  	$result = mysqli_query($con, $query)or die($mysqli_error($con));
  	$num = mysqli_num_rows($result);
  
  if ($num != 0) {
    echo "<span>Email Already Exists</span>";
    header('refresh:3; url=signup.php');
  } else if(strlen($password)<6){
  	echo "Password should have at-least 6 characters.";
  	header('refresh:3; url=signup.php');
  } else if (!preg_match($regex_email, $email)) {
    echo "<span>Not a valid Email Id</span>";
    header('refresh:3; url=signup.php');
  } else if (!preg_match($regex_num, $contact)) {
    echo"<span>Not a valid phone number</span>";
    header('refresh:3; url=signup.php');;
  } else {
    
    $query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $user_password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: home.php');
  }
?>