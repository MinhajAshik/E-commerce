


<!Doctype html>
<html>
<head>
	<title>E-commerce Website </title>
    <link rel="stylesheet"  href="style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>
<body>

<div class="top-nav-bar">
<div class="search-box">
	<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
	<i class="fa fa-times" id="cls-btn" onclick="closemenu()"></i>
<img src="images/prototype.png" class="logo">
<input type="text" class="form-control">
<span class="input-group-text">
<i class="fa fa-search"></i>
</span>	
</div>
<div class="menu-bar">
	<ul>
		<li><a href="#"><i class="fa fa-shopping-basket"></i>  Cart</a></li>
		<li><a href="login.php">Sign up</a></li>
		<li><a href="login.php">Log In</a></li>
	</ul>
	

</div>
</div>	
<section class="header">
	<div class="side-menu" id="side-menu">
		<ul>
			<li>On Sale<i class="fa fa-angle-right"></i>
            <ul>
            	<li>Tshirt</li>
            	<li>Watch</li>
            	<li>Jersey</li>
				<li>Jersey</li>

            </ul>
			</li>
			<li>Mobiles<i class="fa fa-angle-right"></i>
            <ul>
            	<li>samsung galaxy 10s plus</li>
            	<li>iphone 11</li>
            	<li>Nokia 2.2</li>
            	<li>Xiaomi redmi 7plus</li>

            </ul>
			</li>
			<li>Dresses<i class="fa fa-angle-right"></i>
            <ul>
            	<li>Tshirt</li>
            	<li>Sweater</li>
            	<li>Jacket</li>
            	<li>Suit</li>
            </ul>
			</li>
			<li>Accessories<i class="fa fa-angle-right"></i>
            <ul>
            	<li>Smart Watch</li>
            	<li>Keyboard</li>
            	<li>Mouse</li>
            	<li>Lamp</li>
            </ul>
			</li>
			<li>Home decor<i class="fa fa-angle-right"></i>
            <ul>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            </ul>
			</li>
		    <li>Books<i class="fa fa-angle-right"></i>
            <ul>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            </ul>
			</li>
			<li>Furniture<i class="fa fa-angle-right"></i>
            <ul>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            </ul>
			</li>
			<li>Footwear<i class="fa fa-angle-right"></i>
            <ul>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            </ul>
			</li>
			<li>Computer<i class="fa fa-angle-right"></i>
            <ul>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            	<li>Sub menu 3</li>
            </ul>
			</li>
		</ul>
		
	</div>
	<div class="slider">
		<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/slider.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="Images/slider2.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="Images/slider3.jpg" class="d-block w-100" >
    </div>
     <div class="carousel-item">
      <img src="Images/slider4.jpg" class="d-block w-100" >
    </div>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
    <li data-target="#slider" data-slide-to="3"></li>
  </ol>
</div>
	</div>
	
</section>

<!-------------------featured-categories--------------->
<section class="featured-categories">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="Images/Junayedsir.jpg">
				
			</div>
			<div class="col-md-4">
				<img src="Images/Tshirt.png">
				
			</div>
			<div class="col-md-4">
				<img src="Images/smartwatch.png">
				
			</div>
			
		</div>

	</div>

</section>


<!---------------------------On Sale---------------->
<section>
	<div class="container">
		<div class="title-box">
			<h2>On Sale</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/raju.jpg"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <h3>Tshirt</h3>
	    		  <h5>$2.50</h5>
			      </div>
			</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/Tshirt.png"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <h3>Tshirt</h3>
	    		  <h5>$2.50</h5>
			      </div>
			</div>
			</div>
						<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/Junayedsir.jpg"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <h3>Sweater</h3>
	    		  <h5>$20000.50</h5>
			      </div>
			</div>
			</div>
						<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/smartwatch.png"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <h3>Fitness Watch</h3>
	    		  <h5>$2.50</h5>
			      </div>
			</div>
			</div>


		</div>
	
	</div>
</section>



<!-----------------------New Products------------------------------------------------->


<section class="new-products">
	<div class="container">
		<div class="title-box">
			<h2>New Arrival</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/raju.jpg"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <h3>Fitness Watch</h3>
	    		  <h5>$2.50</h5>
			      </div>
			</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/Tshirt.png"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <h3>Tshirt</h3>
	    		  <h5>$2.50</h5>
			      </div>
			</div>
			</div>
						<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/Junayedsir.jpg"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <h3>Sweater</h3>
	    		  <h5>$20000.50</h5>
			      </div>
			</div>
			</div>
						<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/raju.jpg"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <h3>Tshirt</h3>
	    		  <h5>$2.50</h5>
			      </div>
			</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/smartwatch.png"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <h3>Fitness Watch</h3>
	    		  <h5>$2.50</h5>
			      </div>
			</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/Tshirt.png"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <h3>Tshirt</h3>
	    		  <h5>$2.50</h5>
			      </div>
			</div>
			</div>
						<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/Junayedsir.jpg"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <h3>Sweater</h3>
	    		  <h5>$20000.50</h5>
			      </div>
			</div>
			</div>
						<div class="col-md-3">
				<div class="product-top">
				<a href="product.html"><img src="Images/smartwatch.png"></a>
				  <div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>
					</button>
					<button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
					</button>
				   </div>
				  <div class="product-bottom text-center">
			      <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <i class="fa fa-star-half-o"></i>
	    		  <h3>Apple watch</h3>
	    		  <h5>$2.50</h5>
			      </div>
			</div>
			</div>



		</div>
	
	</div>



	
</section>


<!-------Website Features---------------------------------------------->

<section class="website-features">
	<div class="container">
		<div class="row">
			<div class="col-md-3 featture-box">
				<img src="Images/features.png">
				<div class="feature-text">
					<p><b>100% Original items</b> are available anytime anywhere</p>
					
				</div>
			</div>
			<div class="col-md-3 featture-box">
				<img src="Images/untitled.png">
				<div class="feature-text">
					<p><b>Return within 1 week</b> of recieving with cashback</p>
					
				</div>
			</div>
			<div class="col-md-3 featture-box">
				<img src="Images/untitled1.png">
				<div class="feature-text">
					<p><b>Get free delivery</b> in anywhere in Dhaka</p>
					
				</div>
			</div>
			<div class="col-md-3 featture-box">
				<img src="Images/untitled3.png">
				<div class="feature-text">
					<p><b>Pay online through multiple</b>  payment option</p>
					
				</div>
			</div>
			
		</div>
	</div>	
	
</section>
<!----------------------------Footer--------------------->
<section class="footer">
	<div class="container tex-center">
		<div class="row">
			<div class="col-md-3">
				<h1>Useful links</h1>
				<p>Privacy Policy</p>
				<P>Terms of Use</P>
				<p>Return Policy</p>
				<p>Discount Coupons</p>
				
			</div>
			<div class="col-md-3">
				<h1>Company</h1>
				<a href="aboutus.html"><p>About Us</p></a>
				<a href="Ass3.php"><P>Contact Us</P></a>
				<p>Career</p>
				<p>Affiliate</p>
				
			</div>
			<div class="col-md-3">
				<h1>Follow Us On</h1>
				<p><i class="fa fa-facebook-official"></i>Facebook</p>
				<P><i class="fa fa-youtube-play"></i>Youtube</P>
				<p><i class="fa fa-linkedin"></i>Linkedin</p>
				<p><i class="fa fa-twitter"></i>Twitter</p>
				
			</div>
			<div class="col-md-3 footer-image">
				<h1>Download App</h1>
				<img src="Images/get.png">
	
			</div>
			
		</div>
		<hr>
		<p class="copyright">Made with <i class="fa fa-heart-o"></i>by noobe Cse students</p>
		
	</div>
	
</section>









<script>
	function openmenu()
	{
		document.getElementById("side-menu").style.display="block";
		document.getElementById("menu-btn").style.display="none";
		document.getElementById("cls-btn").style.display="block";
	}
	function closemenu()
	{
		document.getElementById("side-menu").style.display="none";
		document.getElementById("menu-btn").style.display="block";
		document.getElementById("cls-btn").style.display="none";
	}
	



</script>




</body>
</html>	
