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
<div class="container-fluid" style="padding-top: 70px">
	<div class="row" >
			<div class="col-md-4 col-sm-6 " >
				<div class="panel panel-default" >
					<div class="panel-heading"><h5>#1</h5></div>
						<div class="panel-body">
			        		<center><img src="images/1.jpg" class="img-responsive" style="height: 200px" ></center>
				    		<CAPTION>
								<p>Redmi Go (Blue, 16 GB, 1 GB RAM);<br> Rs.5,138.00</p>
								<div class="text-center">
									<a href="cart_add.php?id=1" name="add" value="add"><button type="submit" class="btn btn-primary" style="width: 100%;">Add to cart</button></a>
								</div>
				    		</CAPTION>  
						</div>
   		        	</div>
   		        </div>
   		    <div class="col-md-4 col-sm-6 " >
        		<div class="panel panel-default">
        			<div class="panel-heading"><h5>#2</h5></div>
        			<div class="panel-body">
   				     <center><img src="images/2.jpg" class="img-responsive" style="height: 200px"></center>
				     <CAPTION>
				     	<p>Samsung Galaxy A2 Core 16GB (Blue, 1GB RAM);<br> Rs.6,110.00</p>
					 <div class="text-center">
					 <a href="cart_add.php?id=2" name="add" value="add"><button  type="submit" class="btn btn-primary" style="width: 100%;">Add to cart</button></a>
					</div>
				     </CAPTION>             				 	 	 	
   			    </div></div>
   		    </div>
   		    <div class="col-md-4 col-sm-6 ">
   				<div class="panel panel-default">
   					<div class="panel-heading"><h5>#3</h5></div>
   					<div class="panel-body">
   				     <center><img src="images/3.jpg" class="img-responsive"style="height: 200px"></center>
			         <p>Nokia 3.2 (Charcoal, 2GB RAM); <br>Rs.7,585.00</p>
					 <div class="text-center">
					 <a href="cart_add.php?id=3" name="add" value="add"><button type="submit" class="btn btn-primary" style="width: 100%;">Add to cart</button></a>
					</div>
				              </div>				 	 	 	
   			    </div>
   		   </div>
   	    </div>
   	    <div class="row">
   				
   					<div class="col-md-4 col-sm-6 ">
   						<div class="panel panel-default">
   							<div class="panel-heading"><h5>#4</h5></div>
   							<div class="panel-body">
   				            <center><img src="images/4.jpg" class="img-responsive" style="height: 200px"></center>
				            <CAPTION>
					        <p>Oppo R15 Pro ( 6GB RAM, 128GB Storage);<br> Rs.8,999.00</p>
					        <div class="text-center">
					        <a href="cart_add.php?id=4" name="add" value="add"><button type="submit" class="btn btn-primary" style="width: 100%;" >Add to cart</button></a>
					        </div>
				            </CAPTION>             				 	 	 	
   			            </div></div>
   		            </div>
   		           <div class="col-md-4 col-sm-6">
   					     <div class="panel panel-default">
   					     	<div class="panel-heading"><h5>#5</h5></div>
   					     	<div class="panel-body">
   				             <center><img src="images/5.jpg" class="img-responsive"style="height: 200px"></center>
				             <CAPTION>
					         <p>Apple iPhone 5s 16 GB Refurbished 4G Mobile;<br> Rs.6,500.00</p>
					         <div class="text-center">
					         <a href="cart_add.php?id=5" name="add" value="add"><button type="submit" class="btn btn-primary" style="width: 100%;" >Add to cart</button></a>
					         </div>
				             </CAPTION>             				 	 	 	
   			             </div></div>
   		            </div>
   		            <div class="col-md-4 col-sm-6 ">
   					     <div class="panel panel-default">
   					     	<div class="panel-heading"><h5>#6</h5></div>
   					     	<div class="panel-body">
   				             <center><img src="images/6.jpg" class="img-responsive" style="height: 200px"></center>
				             <CAPTION>
					         <p>Lava Z51 (Sapphire Green, 16 GB)  (1 GB RAM);<br> Rs.4,799.00</p>
					         <div class="text-center">
					           <a href="cart_add.php?id=6" name="add" value="add"><button type="submit" class="btn btn-primary" style="width: 100%;"  >Add to cart</button></a>
					         </div>
				             </CAPTION>             				 	 	 	
   			             </div></div>
   		            </div>
   		        </div>
   		    </div>




    <?php include 'includes/footer.php'; ?>
</body>
</html>

	    
	
			