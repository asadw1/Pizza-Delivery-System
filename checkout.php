<?php	
// This script exclusively handles SESSION variable initialization
// Meaning that this page is only accessible to the user when logged into the site

	session_start();

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	
	$name =$_SESSION ['login_user'];
	
	} else {
   
	header('location: index.html');

	}
?>

<!DOCTYPE html>
<html>
<head>
<title>RECEIPES Bootstarp responsive Website Template| Checkout :: w3layouts</title>
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
							<a href="checkout.php">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty"></a></p>
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
						<li><a href="indexlogin.php">Home</a></li>|
						<li><a href="menu.php">Menu</a></li>|
						<li><a href="order.php">Order Online</a></li>|
						<li><a href="contact.html">Contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li>
						<div class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
						<?php
						echo $name;

						?>
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
							<li><a href="logout.php">Log out </a></li>
						  </ul>
						</div>
						</li>
					</ul>
				
				
				
				</div>
				
						<div class="clearfix"></div>
					</ul>
				</div>
	
			</div>
		</div>
		</div>
		

	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<!-- checkout -->
<div class="cart-items">
	<div class="container">
			 <h1>Your Order Details and Price</h1>
				<style type="text/css">
				table, th, td {
				   border: 2px solid black;
				}
				table{ width: 900px;}
				</style>

	
		
			  </div>	
						<!-- Checkout button -->
						<a href="PlaceOrder.php" class="btn btn-success btn-md"> Checkout</a>
		 </div>
		 </div>

<!-- checkout -->
	
	<!--<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
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
					<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Subscribe Newsletter</h4>
						<p>To get latest updates and food deals every week</p>
						<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<input type="submit" value="submit">
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>-->
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<!--<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2016  All rights  Reserved </p>
		</div>
	</div> -->
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

<?php 

/*
*
* Description: This PHP handles
*
*
*
*
*
*/
//ini_set('display_errors', 'On'); 	// Comment out for live/release mode
error_reporting(E_ALL);
// Custom code to pull order data from DB and display price to user
$servername = "localhost";
$username = "user_eg";
$password = "13669618";
$currentdb="Database_Project";
$connection=  mysqli_connect('localhost', $username, $password, $currentdb ); 

//check the connection
if (mysqli_connect_errno())
{
	echo 'Error: Could not connect to database. Please try again later.';
	exit;
}

$query = mysqli_query($connection, "SELECT * FROM Cart WHERE username = '$name' LIMIT 1");

// Associative array mapping 8 of the necessary Pizza crust/type combinations to prices
static $Types = array(

"10OR" => 8.99,
"10GF" => 9.99,
"12OR" => 9.99,
"12TH" => 9.99,
"12PN" => 10.99,
"14OR" => 11.99,
"14TH" => 11.99,
"14PN" => 12.99,
);

echo '<div class= "container">';
echo"<table>
	  <tr>
	    <th>orderid</th>
	    <th>username</th>
	    <th>Method</th>
	    <th>Pizza</th>
	    <th>Toppings</th>
	    <th>Total</th>
	  </tr>
	    <tr>
	    <th></th>
	    <th></th>
	    <th></th>
	    <th></th>
	    <th></th>
	    <th></th>
	  </tr>";

// Total Cost of the Pizza; will be updated below
$cost =0;	  

// Get row data from the mySQL 'Cart' table
// We need to display to the front-end to ensure correct querying behavior from the Cart table
while($row = mysqli_fetch_array($query))
{
	echo "<tr>";
	echo "<td>" . $row['orderid'] . "</td>";
	echo "<td>" . $row['username'] . "</td>" ;
	echo "<td>" . $row['Method'] . "</td>";
	echo "<td>" . $row['Pizza'] . "</td>";
	echo "<td>" . $row['Toppings'] . "</td>";
	echo "</tr>";

	// Construct order string from row data above for price calculation

	$pizzaType = $row['Pizza']; 
	$toppings = $row['Toppings'];

	// Simple check, did we pull a long string with the last two columns concatenated? YES. 
	echo $pizzaType . $toppings; // YES, this works

	// Compute price of pizza and parse the order string from line 325
	foreach($Types as $key => $value)
	{
		if($pizzaType === $key)
		{
			$cost+=$key;
			if(substr_count($toppings, '-') == 3)
			{
				$cost = $cost + (1.5*3);
			} 
			else if(substr_count($toppings, '-') == 2)
			{
				$cost = $cost + (1.5*2);
			}
			else if(substr_count($toppings, '-') == 1)
			{
				$cost = $cost + (1.5);
			} else;
		}
	} 
	echo "<h3>Total pizza cost: $" . $cost . "</h3>";
}
echo "</table>";
echo '</div>';

mysqli_close($connection);

?>

</body>
</html>
