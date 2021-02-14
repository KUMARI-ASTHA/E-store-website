<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: home.php');
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
	<?php  include 'includes/header.php'; ?>

	<div class="container">
		<div class="row row_style">
			<div class="col-md-6" >
				<div class="panel-body">
	               	<img src="images/12.jpg" class="img-responsive" style= " height: 500px; width:500px;">
	            </div>
	        </div>
	        <div class="col-md-6 " style="float: right;">
				         <div class="panel panel-default">
				 	       <div class="panel-heading"><h4>SIGN UP</h4></div>
				 	         <div class="panel-body">

				 	 	 <form action="user_registration_script.php" method="post">

				 	 	 	<div class="form-group">
				 	 	 		<input type="text" name="name" class="form-control" placeholder="Name" required="true">
                            </div>
                            <div class="form-group"> 
                            	<input type="Email" name="email" class="form-control" placeholder="Email" required="true">
                            </div>
                            <div class="form-group"> 
                            	<input type="password" name="password" class="form-control" placeholder="Password" required="true">
                            </div>
                            <div class="form-group"> 
                            	<input type="text" name="contact" class="form-control" maxlength="10" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group"> 
                            	<input type="text" name="city" class="form-control" placeholder="City" required="true">
                            </div>
                            <div class="form-group"> 
                            	<input type="text" name="address" class="form-control"  placeholder="Address" required="true">
                            </div>
                            <button type="Login" class="btn btn-primary" style="float: right;">Submit </button>
                         </form>
                     </div>&nbsp&nbsp
                 </div>
            </div>
        </div>
    </div>	               
		<?php include 'includes/footer.php'; ?>
		
		</body>
</html>
          

    

   
                  
               






                         
                       

                     
                       
                          
               

				 	
				 	 
        
             

            
            
         

      

