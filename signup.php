<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>rental and parking management system</title>
	<style>
		body {
		background-image: url('images/signup_back.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		}
	</style>
  </head>
  <body >
		<div class="row" >

		  <div class="col-6 row justify-content-center align-items-center" style="color: black;">
		  	<img src="images/bashaLagbe1.png" alt="">
		  	<!-- <h1 style="font-size: 3rem; color: #2ecc71">rental and parking <br> management system</h1> -->
		  </div>
			
		  <div class="col-5" style="margin-top: 50px">
		  	<form action="confirmSignup.php" method="POST">
			  	<?php if(isset($_SESSION['NID_match']) ){?>
					<div class="alert alert-warning" role="alert">
						Allready Use this NID
					</div>
				  <?php unset($_SESSION['NID_match']);} ?>
				<?php if(isset($_SESSION['Email_match']) ){?>
					<div class="alert alert-warning" role="alert">
						Allready Use this Email
					</div>
				  <?php unset($_SESSION['Email_match']);} ?>
				<?php if(isset($_SESSION['Reg_error']) ){?>
					<div class="alert alert-warning" role="alert">
						Registration Unsuccessfull.
					</div>
				<?php unset($_SESSION['Reg_error']);} ?>
				  <!-- first name input -->
				<div class="row justify-content-between align-items-center">
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: red;"><h3>First Name</h3></label>
				    <input required style="width:10ppx" type="text" id="form2Example1" class="form-control" name="first_name" />
				  </div>

				  <!-- last name input -->
				  <div class="form-outline mb-4 ">
				  	<label class="form-label" for="form2Example2" style="color: red;"><h3>Last Name</h3></label>
				    <input required style="width:10ppx"type="text" id="form2Example2" class="form-control" name="last_name" />
				  </div>
				  </div>
				<!-- user name input -->
				<div class="row justify-content-between align-items-center">
                <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: red;"><h3>NID Number</h3></label>
				    <input required type="text" id="form2Example1" class="form-control" name="nid" />
				  </div>

                  <!-- Email input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: red;"><h3>Email address</h3></label>
				    <input required type="email" id="form2Example1" class="form-control" name="email" />
				  </div>
				</div>
				<div class="row justify-content-between align-items-center">
				  <!-- Password input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example2" style="color: red;"><h3>Password</h3></label>
				    <input required type="password" id="form2Example2" class="form-control" name="Password" />
				  </div>
				  
                  <!-- Contact Number -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: red;"><h3>Contact Number</h3></label>
				    <input required type="text" id="form2Example1" class="form-control" name="contruct" />
				  </div>
				</div>

				  <!-- Submit button -->
				  <div class="row justify-content-center align-items-center">
				  <button style="width: 200px"type="submit" class="btn btn-primary btn-block mb-4">Confirm</button>
				  </div>
				
				  <!-- Register buttons -->
				  <div class="text-center">
				    <a class="btn btn-outline-primary" href="index.php">allready have a acount? Login</a>
				  </div>
				</form>
		  </div>

		</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

