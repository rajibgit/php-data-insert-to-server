<?php require "config/config.php"; ?>

<?php 

if((isset($_POST['submit']))){

    $fullname = $_POST['fullname'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

 $query = "INSERT INTO user(fullname,firstname,lastname,email,username,password) VALUES('$fullname','$firstname','$lastname','$email','$username','$password')";


 $result = mysqli_query($con,$query) or die("data cannot inserted. ".mysqli_error($con));


 if($result) echo "data submitted.";

}
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



	<title>phpcrud</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="text-align:center"></div>
			<div class="col-lg-8 col-lg-offset-2">
				<div class="col-lg-6 col-lg-offset-3">
					<h3>Signup</h3>
					<hr>
					<form name="signup" id="signup"action="<?<?php $_SERVER['PHP_SELF'] ?>" method="POST">
						<div class="form-group">
							<label for="fullname">Firstname</label>
							<input name="firstname" id="firstname"type="text" class="form-control"placeholder="firstname">
						</div><div class="form-group">
							<label for="fullname">Lastname</label>
							<input name="lastname" id="lastname"type="text" class="form-control"placeholder="lastname">
						</div><div class="form-group">
							<label for="fullname">Fullname</label>
							<input name="fullname" id="fullname"type="text" class="form-control"placeholder="fullname">
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input name="username" id="email" type="text" class="form-control"placeholder="username">
						</div>
						<div class="form-group">
							<label for="username">Email</label>
							<input name="email" id="email" type="email" class="form-control"placeholder="email">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input name="password" id="password" type="text" class="form-control"placeholder="password">
						</div>
						
						<div class="form-group">
							<button name="submit" id="submit"class="btn-primary btn-block">Sign Up</button>
							
						</div>
						
					</form>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</body>
</html>