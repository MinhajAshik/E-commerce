



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<title>E-commerce Website </title>
    <link rel="stylesheet"  href="style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
    <title>All Products</title>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Prototype</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="cartsystem.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">SignOut</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="profile.php">User Id</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger"></span></a>
      </li>
      
      
    </ul>
  </div> 
</nav>
<div class="row mt-2 pb-3">
<?php
	include("validation.php");
	$stmt= $conn->prepare("Select * from usertable");
	$stmt->execute();
	$result=$stmt->get_result();
	while($row=$result->fetch_assoc()):
	
	?>
	<div class="col-sm-6 col-md-4 col-lg-3 mb-2">
		<div class="card-deck">
			<div class="card p-2 border-secondary mb-2">
					<div class="card-body p-1">
					<h4 class="card-text text-center text-info"><?= $row['name'] ?></h4>
					<h5 class="card-text text-center text-danger"><?= number_format($row['password'])?></h5>

					
				</div>

				
			
			</div>
		</div>
	</div>
	<?php endwhile;?>
</div> 
</div>























<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




</body>
</html>