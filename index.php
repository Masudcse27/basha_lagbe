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
		background-image: url('images/background.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		}
	</style>
  </head>
  <body >

		<div class="row"  >

		  <div class="col-5 row justify-content-center align-items-center" style="color: red;">
		  	<h1><img src="images/bashalagbe.png" alt=""></h1>
		  	<!-- <h1 style="text-align: center">rental and parking <br> management system</h1> -->
		  </div>

		  <div class="col-7 row justify-content-center align-items-center " style=": 50px;height: 500px; color:white; " >
		  	
		  <form action="confirmLogin.php" method="POST">
				  <!-- Email input -->
				  <?php if(isset($_SESSION['loginErorr']) ){?>
					<div class="alert alert-warning" role="alert">
						Wrong Email or Password
					</div>
				  <?php } unset($_SESSION['loginErorr']) ?>
				  <?php if(isset($_SESSION['reg_suc']) ){?>
					<div class="alert alert-success" role="alert">
						Registration successfull
					</div>
				  <?php } unset($_SESSION['reg_suc']) ?>
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" ><h3>Email address</h3></label>
				    <input type="email" id="form2Example1" class="form-control" name="User" />
				  </div>

				  <!-- Password input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example2" ><h3>Password</h3></label>
				    <input type="password" id="form2Example2" class="form-control" name="Password" />
				  </div>

				  <!-- 2 column grid layout for inline styling -->
				  

				  <!-- Submit button -->
				  <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>

				  <!-- Register buttons -->
				  <div class="text-center">
				    <a class="btn btn-success btn-block" href="signup.php" >Create New Account</a>
				  </div>
				</form>
		  </div>

		</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

