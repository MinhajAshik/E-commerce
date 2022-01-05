<?php
session_start();
$product_ids=array();

//session destroy();

$connect = mysqli_connect('localhost','root','','cart');

//check if the cart button has submitted

if(filter_input(INPUT_POST, 'add-to-cart'))
{
  if(isset($_SESSION['shopping_cart']))
  {
    $count=count($_SESSION['shopping_cart']);

    $product_ids=array_column($_SESSION['shopping_cart'],'id');
    if (!in_array(filter_input(INPUT_GET, 'id'),$product_ids)) {
      $_SESSION['shopping_cart'][$count]=array
      
    }
  }
}



?>

























<!DOCTYPE html>
<html>
<head>
	
	<title>E-commerce Website </title>
	
    <link rel="stylesheet"  href="style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    
	<link rel="stylesheet"  href="style.css"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
      
      
    </ul>
  </div> 
</nav>











<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>