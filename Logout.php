<!DOCTYPE html>
<html>
<head>
	<title>Log In/ Sign Up</title>
	<link rel="stylesheet" type="text/css" href="logout.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
</head>
<body>

<div class="container_lo">
	<div class="login-box">
	
	<div class="row_lo">
		<!--Start Nof log in form -->
		<div class="col-md-6" login-left>
			<h2>Log In Here</h2>
			<form action="validation.php" method="post">
				<div class="form-group"> 
					<lebel>Username</lebel>
					<input type="text" name="user" class="form-control" required>
				</div>

				<div class="form-group"> 
					<lebel>Password</lebel>
					<input type="password" name="password" class="form-control" required>
				</div>

				<button type="submit" class="btn btn-primary">LogIn</button>
			</form>
			
		</div>
			</div>
		
<!--End of log in form -->
<!--Start of Rigister form -->
			<div class="col-md-6" login-right>
			<h2>Register Here</h2>
			<form action="registration.php" method="post">
				<div class="form-group"> 
					<lebel>Username</lebel>
					<input type="text" name="user" class="form-control" required>
				</div>

				<div class="form-group"> 
					<lebel >Password</lebel>
					<input type="password" name="password" class="form-control" required>
				</div>

				<button type="submit" class="btn btn-primary">Register</button>
			</form>
			
		</div>
		<!--End of Register in form -->
	</div>
</div>

</body>
</html>