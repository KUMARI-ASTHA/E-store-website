<footer style="padding-top: 0%; background-color:#222; border-color:#080808; border-radius: none;"> 
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<H4>Information</H4>
			</div>
			<div class="col-md-4">
				 <H4>My Account</H4>
			</div>
			<div class="col-md-4">
				<H4>Contact Us</H4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<p><a href="about.php" style="text-decoration: none; color: #fff;">About Us</a></p>
			</div>
			<div class="col-md-4">

				<?php  
				if (isset($_SESSION['email'])){
				 ?> 
				 	<p><a href="home.php" style="text-decoration: none; color: #fff;">Login</a></p>
				 	<?php
				} else { 
				?> 
					<p><a href="" data-toggle="modal" data-target="#myModal" style="text-decoration: none; color: #fff;">Login</a></p>

				<?php 
				}

				?>
			</div>
			<div class="col-md-4">
				<p>Contact: +91-123-000000</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<p><a href="contact.php" style="text-decoration: none; color: #fff;">Contact us</a></p>
			</div>
			<div class="col-md-4">
				<?php  
				if (isset($_SESSION['email'])){
				 ?> 
				 	<p><a href="home.php" style="text-decoration: none; color: #fff;">Sign Up</a></p>

				 <?php
				} else { 
				?> 
					<p><a href="signup.php" style="text-decoration: none; color: #fff;">Sign Up</a></p>
				<?php 
				}

				?>
			</div>
		</div>
	</div>
	</div>
</footer>



