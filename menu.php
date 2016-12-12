<?php
	session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	$name =$_SESSION ['login_user'];
	} 
	else {
	$temp=1;
	}
		
?>



<!DOCTYPE html>
<html>
<head>
<title>RECEIPES Bootstarp responsive Website Template| Popular-restaurent :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>		
<script src="js/simpleCart.min.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>NEED PIZZA? Call us TODAY!<span>972-000-7777 </span><label>(11AM to 11PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty card</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="index.html">HOME</a></li>|
						<li class="active"><a href="menu.php">MENU</a></li>|
						<li><a href="order.php">Order Online</a></li>|
						<!-- <li><a href="contact.html">Option 2 </a></li> -->
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<?php
						if (!$_SESSION['loggedin'])
						{
						echo '<li><a href="login.php">Login</a> </li> |';
						echo '<li><a href="register.html">Register</a> </li> |';
						}
						else 
						{
						?>
						<?php
						echo $name;
					
						}
						?>

						<li><a href="#">Contact Us</a></li>

						<div class="clearfix"></div>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
				</div>


	<!-- header-section-ends -->
	<!-- content-section-starts -->
	 <div class="popular-restaurents" id="Popular-Restaurants">
			<div class="container">
		<div class="col-md-8 top-cuisines">
					<div class="top-cuisine-head">
						<h3>Popular Pizzas</h3>
					</div>
					<div class="top-cuisine-grids">
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/P1.jpg" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/P2.jpg" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/P3.jpg" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order</label>
					    </div>
						<div class="top-cuisine-grid nth-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/P4.png" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order</label>
					    </div>
						
						<div class="top-cuisine-head">
							<h3>Drinks</h3>
							</div>
						
						
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/coke.jpg" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/dietcoke.jpg" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/DP.png" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order</label>
					    </div>
						<div class="top-cuisine-grid nth-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/Lipton.png" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order</label>
					    </div>
						
						<div class="top-cuisine-head">
							<h3>Sides</h3>
							</div>
						
						
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/side4.jpg" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/side1.jpg" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order  </label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/side2.jpg" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order    </label>
					    </div>
						<div class="top-cuisine-grid nth-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="image2/side3.jpg" class="img-responsive" alt="" style="width:170px;height:137px;"/> </a>
							<label>Order    </label>
					    </div>
						
						
						
						
						
						
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
	</div>
	</div>
	
	
	
	
	
	
	
	
	 
				
				<!------------------------------------------------->
	
	
	<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
			
					<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Follow Us On...</h4>
						<ul>
							<li><i class="fb"></i></li>
							<li class="data"> <a href="#">  Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="#">Twitter</a></li>
						</ul>
						<ul>
							<li><i class="in"></i></li>
							<li class="data"><a href="#"> Linkedin</a></li>
						</ul>
						<ul>
							<li><i class="gp"></i></li>
							<li class="data"><a href="#">Google Plus</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2014  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com" target="target_blank">W3Layouts</a></p>
		</div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>