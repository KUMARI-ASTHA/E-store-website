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
	<div class="container">
		<center>
			<table class="table table-hover" style="margin-top: 100px;">
  				<thead>
    				<tr>
      					<th scope="col">Item Number</th>
      					<th scope="col">Item Name</th>
      					<th scope="col">Price</th>
      					<th></th>
      				</tr>
  				</thead>
 				 <tbody>

 				 	<?php
                                  $connection = mysqli_connect("localhost","root","","estore")or die(mysqli_error($connection));
                                  $rt = $_SESSION['user_id'];
                                  $query = "SELECT * FROM users_items where user_id = '$rt'";
                                 $result= mysqli_query($connection,$query)or die(mysqli_error($connection));
                                 $num = mysqli_num_rows($result);
                                while($detail = mysqli_fetch_array($result))  

                                	
                                 {  ?>
                                 	<tr>
                                 		<td> <?php echo ''.$detail['item_id'].''; ?> </td>

                                 	<?php
                                 		$iname = $detail['item_id'];
                                 		$query1 = "SELECT * FROM items where pid = '$iname'";
                                 		 $result1 = mysqli_query($connection,$query1)or die(mysqli_error($connection));
                                 		 $num1 = mysqli_num_rows($result1);
                                 		 $detail1 = mysqli_fetch_array($result1)

                                 	?>

                                 		<td> <?php echo ''.$detail1['name'].''; ?> </td>
                                 		<td> <?php echo ''.$detail1['price'].''; ?> </td>
                                 	</tr>

     
               <?php } ?>


   				</tbody>
			</table>
		</center>
		<a href=" success.php" class="btn btn-primary pull-right">Confirm Order</a>
	</div>
</body>
</html>