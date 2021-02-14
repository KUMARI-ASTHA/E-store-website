<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div class="container" style="margin-top: 100px;">
		<center>
			<h4> Thank you for odering from estore. The order shall we delivered to you shortly.</h4>
			<hr>
			<h5>Order some more electronics items<a href="home.php"> here </a></h5>
		</center>
	</div>
</body>
</html>