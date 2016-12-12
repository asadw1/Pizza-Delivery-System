<!DOCTYPE html>

<html>

<head>

<title>Login | Pizza Service!! | Best Pizza </title>

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

							<a href="checkout.html">

								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>

							</a>	

							<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

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

						<li><a href="index.html">Home</a></li>|

						<li><a href="menu.php">Menu</a></li>|

						<li><a href="order.php">Order Online</a></li>|

						<!-- <li><a href="contact.html">contact</a></li> -->

						<div class="clearfix"></div>

					</ul>

				</div>

				<div class="login-section">

					<ul>

						<li><a href="login.html">Login</a>  </li> |

						<li><a href="register.html">Register</a> </li> |

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

	<div class="content">

	<div class="container">
		<div class="login-page">	
		
				<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.html">Create an Account</a>
			   </div>
			    <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
				<h3>REGISTERED CUSTOMERS</h3>
				<h4>Login here: </h4>
				<form action="data.php" method="post">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" placeholder="Enter Username" name="uname" required>
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					 <input type="password" placeholder="Enter Password" name="psw" required>
        
				  </div>
				  <a class="forgot" href="http://csce4444.com/web/forgotpassword.php">Forgot Your Password?</a>
				  <input type="submit" value="Login">
			    </form>
				
				
				
				</div>

				  </div>
			   </div>	
		</div>  
			</div>
			


<!--**********************************-->

<div class="clearfix"></div>

		<div class="contact-section" id="contact">

			<div class="container">

				<div class="contact-section-grids">

			
				

					<div class="col-md-3 contact-section-grid">

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