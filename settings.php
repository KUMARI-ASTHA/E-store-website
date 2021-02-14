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
	
	<div class="container" >
		<div class="row row_style">
			<div class="col-md-6 col-md-offset-3"  >
			
				<div class="panel-heading"><h3>Change Password</h3></div>
				 	    <div class="panel-body">
				 	         <form action="settings_script.php" method="post">
				 	         	<div class="form-group">
				 	 	 		<input type="password" name="old-password"  class="form-control" placeholder="Old Password" required="true">
                                </div>
                                <div class="form-group"> 
                            	<input type="password"  name="password" class="form-control" placeholder="New Password" required="true">
                                </div>
                                <div class="form-group"> 
                            	<input type="password" name="password1" class="form-control" placeholder="Re-type New Password" required="true">
                                </div>
                                <button type="Change" class="btn btn-primary" >Change</button> 
                            </form>
                           </div>

                    </div>
                </div>
            </div>

           
        </div>
    </div>

</body>
</html>
				
				 
				 	      

