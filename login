<!DOCTYPE html>
<html>
<head>

	<title>User Login & Registration</title>
	
	<link rel="stylesheet"  href="loginstyle.css"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6" login-left>
				<h2>Login</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary"> Login </button>

				</form>
				
			</div>
			<div class="col-md-6" login-right>
				<h2>Registration</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary"> Sign Up </button>

				</form>
				
			</div>
			
		</div>
		
	</div>
	</div>
	
</body>
</html>