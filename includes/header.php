<div class="navbar navbar-default navbar-fixed-top"> 
	<div class="container"> 
		<div class="navbar-header"> 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
			</button> 
			<a class="navbar-brand" href="index.php">E-Store</a> 
		</div> 
		<div class="collapse navbar-collapse" id="myNavbar"> 
			<ul class="nav navbar-nav navbar-right"> 
				<?php  
				if (isset($_SESSION['email'])){
				 ?> 

				<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> 
				<li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
				<li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
				 
					<?php
				} else { 
				?> 
				
				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
				<li><a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li> 
				<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>  
					<?php 
				} 
				?> 
			</ul> 
		</div> 
	</div> 
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body">
      	<div class="text">Don't have an account?<a href="signup.php" style="text-decoration: none;"> Register</a></div>
      	<br>
        <form action="validation.php" method="POST">
                     <div class="form-group">
                       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                       
                     </div>
                       <div class="form-group">
                         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="true" pattern=".{6,}">
                         
                       </div>
                          <button type="Login" class="btn btn-primary">Login</button>
                </form>
      </div>
      <div class="modal-footer">
        <a href="#" style="float: left; text-decoration: none;">Forget Password?</a>
      </div>
    </div>

  </div>
</div>