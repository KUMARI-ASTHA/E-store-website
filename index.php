<?php
session_start();
if (isset($_SESSION['email'])) {
header('location: home.php');
exit;
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


<div class="container-fluid" style="padding-top: 70px">
	<div class="row" >
			<div class="col-md-4 col-sm-6 " >
				<div class="panel panel-default" >
					<div class="panel-heading"><h5>Mobile 1</h5></div>
						<div class="panel-body">
			        		<center><img src="images/1.jpg" class="img-responsive" style="height: 200px" ></center>
				    		<CAPTION>
								<p>Redmi Go (Blue, 16 GB, 1 GB RAM);<br> Rs.5,138.00</p>
								<div class="text-center">
									<button type="submit" class="btn btn-primary" style="width: 100%;" onclick="myFunction()">Order Now!</button>
								</div>
				    		</CAPTION>  
						</div>
   		        	</div>
   		        </div>
   		    <div class="col-md-4 col-sm-6 " >
        		<div class="panel panel-default">
        			<div class="panel-heading"><h5>Mobile 2</h5></div>
        			<div class="panel-body">
   				     <center><img src="images/2.jpg" class="img-responsive" style="height: 200px"></center>
				     <CAPTION>
				     	<p>Samsung Galaxy A2 Core 16GB (Blue, 1GB RAM);<br> Rs.6,110.00</p>
					 <div class="text-center">
					 <button type="submit" class="btn btn-primary" style="width: 100%;" onclick="myFunction()">Order Now!</button>
					</div>
				     </CAPTION>             				 	 	 	
   			    </div></div>
   		    </div>
   		    <div class="col-md-4 col-sm-6 ">
   				<div class="panel panel-default">
   					<div class="panel-heading"><h5>Mobile 3</h5></div>
   					<div class="panel-body">
   				     <center><img src="images/3.jpg" class="img-responsive"style="height: 200px"></center>
			         <p>Nokia 3.2 (Charcoal, 2GB RAM); <br>Rs.7,585.00</p>
					 <div class="text-center">
					 <button type="submit" class="btn btn-primary" style="width: 100%;" onclick="myFunction()">Order Now!</button>
					</div>
				              </div>				 	 	 	
   			    </div>
   		   </div>
   	    </div>
   	    <div class="row">
   				
   					<div class="col-md-4 col-sm-6 ">
   						<div class="panel panel-default">
   							<div class="panel-heading"><h5>Mobile 4</h5></div>
   							<div class="panel-body">
   				            <center><img src="images/4.jpg" class="img-responsive" style="height: 200px"></center>
				            <CAPTION>
					        <p>Oppo R15 Pro ( 6GB RAM, 128GB Storage);<br> Rs.8,999.00</p>
					        <div class="text-center">
					        <button type="submit" class="btn btn-primary" style="width: 100%;" onclick="myFunction()">Order Now!</button>
					        </div>
				            </CAPTION>             				 	 	 	
   			            </div></div>
   		            </div>
   		           <div class="col-md-4 col-sm-6">
   					     <div class="panel panel-default">
   					     	<div class="panel-heading"><h5>Mobile 5</h5></div>
   					     	<div class="panel-body">
   				             <center><img src="images/5.jpg" class="img-responsive"style="height: 200px"></center>
				             <CAPTION>
					         <p>Apple iPhone 5s 16 GB Refurbished 4G Mobile;<br> Rs.6,500.00</p>
					         <div class="text-center">
					         <button type="submit" class="btn btn-primary" style="width: 100%;" onclick="myFunction()">Order Now!</button>
					         </div>
				             </CAPTION>             				 	 	 	
   			             </div></div>
   		            </div>
   		            <div class="col-md-4 col-sm-6 ">
   					     <div class="panel panel-default">
   					     	<div class="panel-heading"><h5>Mobile 6</h5></div>
   					     	<div class="panel-body">
   				             <center><img src="images/6.jpg" class="img-responsive" style="height: 200px"></center>
				             <CAPTION>
					         <p>Lava Z51 (Sapphire Green, 16 GB)  (1 GB RAM);<br> Rs.4,799.00</p>
					         <div class="text-center">
					           <button type="submit" class="btn btn-primary" style="width: 100%;"  onclick="myFunction()">Order Now!</button>
					         </div>
				             </CAPTION>             				 	 	 	
   			             </div></div>
   		            </div>
   		        </div>
   		    </div>
   		    <?php include 'includes/footer.php'; ?>
   		

   	<script>
		function myFunction() {
  			alert("You must be Logged In first to start Ordering.");
		}
	</script>
</body>
</html>				