<?php
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
<title></title>


<!-- Custom Theme files -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/radio.css" rel="stylesheet" type="text/css" media="all" />




<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  

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
					<p>NEED PIZZA? Call us TODAY!<span>972-000-7777</span><label>(11AM to 11PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Cart is empty. Order now!</a></p>
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
						<li class="active"><a href="order.php">Order Online</a></li>|
						<!-- <li><a href="contact.html">Option 2</a></li> -->
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
						<div class="clearfix"></div>
					</ul>
				</div>
			</div>
		</div>
		</div> <!--End of header-->

	<!-- header-section-ends -->
	<div class="order-section-page">
		<div class="ordering-form">
		<div class="panel-body" align="center"><h3>Build your Own Pizza!!</h3></div>
			<div class="container">
			
					 <div class="col-md-6 order-form-grids">	
						<div class="panel panel-default">
						<div class="modal-body">	
						<!-- <div class="panel-body" align="center"><h3>Build your Own Pizza!!</h3></div> -->
						
						<form action="cart.php" id="pizzaOrderForm" method="POST" class="form">
						<!--<form method="POST" class="form" action=""> -->
						<!--<div class="step" >Step 1</div> -->
						<div class="step" >
						
						<h3>Start your Order: </h3>
						
						 <div class="radio">
						 <label> 
						 <input type="radio" name="method" required value="Delivery" >Delivery </label>
						 </div>
						 <div class="radio"> 
						 <label> 
						 <input type="radio" name="method" required value="Carryout">Carryout </label>
						 </div>
						</div> 
						
						  
						<!-- <div class="step">Step 2</div> -->
						
						<div class="step">
						<h3>Choose the size of your Pizza: </h3>
						 <div class="radio"><label><input type="radio" name="size" required value="10">Small (10")</label></div>
						 <div class="radio"><label><input type="radio" name="size" required value="12">Medium (12")</label></div>
						 <div class="radio"><label><input type="radio" name="size" required value="14">Large (14")</label></div>
						</div>
						
						<div class="step">
						<h3>What Crust you like: </h3>
						 <div class="radio"><label><input type="radio" name="crust" required value="TH">Thin Crust</label></div>
						 <div class="radio"><label><input type="radio" name="crust" required value="OR">Original Crust</label></div>						
						</div>
						
						<div class="step">
						<h3>What type of sauce you like:</h3>
						<div class="radio"><label><input type="radio" name="sauce" required value="Xo">Original Sauce</label></div>
						<div class="radio"><label><input type="radio" name="sauce" required value="Xm">Marinara Sauce</label></div>							
						<div class="radio"><label><input type="radio" name="sauce" required value="Xw">Garlic Parmesan Sauce</label></div>	
						<div class="radio"><label><input type="radio" name="sauce" required value="Xz">Alfredo Sauce</label></div>														
						<div class="radio"><label><input type="radio" name="sauce" required value="Xq">BBQ Sauce</label></div>
						</div>
					
						
						<div class="step">
						<h3>Please Choose Up to 3 Toppings </h3>
						<h4>Meat Toppings: </h4>
						<div class="radio"><label><input id=t1 type="checkbox" name="topping[]" value="P">Pepperoni</label></div>
						<div class="radio"><label><input id=t2 type="checkbox" name="topping[]" value="S">Sausage</label></div>
						<div class="radio"><label><input id=t3 type="checkbox" name="topping[]" value="Y">Philly Steak</label></div>											 
						<div class="radio"><label><input id=t4 type="checkbox" name="topping[]" value="K">Bacon</label></div>											 
						<div class="radio"><label><input id=t5 type="checkbox" name="topping[]" value="H">Ham</label></div>											 
						<div class="radio"><label><input id=t6 type="checkbox" name="topping[]" value="B">Beef</label></div>											 
						<div class="radio"><label><input id=t7 type="checkbox" name="topping[]" value="Sa">Salami</label></div>
										
						<h4> Non-Meat Toppings: </h4>
						<div class="radio"><label><input id=t8 type="checkbox" name="topping[]" value="C">Mozzarella Cheese</label></div>
						<div class="radio"><label><input id=t9 type="checkbox" name="topping[]" value="D">Cheddar Cheese</label></div>
						<div class="radio"><label><input id=t10 type="checkbox" name="topping[]" value="Cs">Parmesan Asiago</label></div>
						<div class="radio"><label><input id=t11 type="checkbox" name="topping[]" value="Z">Banana Peppers</label></div>											 
						<div class="radio"><label><input id=t12 type="checkbox" name="topping[]" value="V">Green Olives</label></div>											 
						<div class="radio"><label><input id=t13 type="checkbox" name="topping[]" value="J">Jalapeno Peppers</label></div>											 
						<div class="radio"><label><input id=t14 type="checkbox" name="topping[]" value="N">Pineaple</label></div>
						<div class="radio"><label><input id=t15 type="checkbox" name="topping[]" value="R">Black Olives</label></div>
						<div class="radio"><label><input id=t16 type="checkbox" name="topping[]" value="M">Mushrooms</label></div>	
						<div class="radio"><label><input id=t17 type="checkbox" name="topping[]" value="Sp">Spinach</label></div>
						<div class="radio"><label><input id=t18 type="checkbox" name="topping[]" value="O">Onions</label></div>							
						</div> 					
						
						<script>

						$('input[type=checkbox]').change(function(e){
						   if ($('input[type=checkbox]:checked').length > 3) {
								$(this).prop('checked', false)
								alert("allowed only 3");
						   }
						})

						</script>
						
						
						
						
						
						
						</div> <!--close modal body -->
						<div class="modal-footer">
						<button type="button" class="action back btn btn-info">Back</button>
						<button type="button" id="register" class="action go btn btn-info">Next</button>
						<!-- <button type="" id="register" class="action go btn btn-info" onclick="return send();" >Next</button> -->
						<input type="Submit" id=submitbtn class="action submit btn btn-sucess" >
						</div> <!--close modal footer -->
						</form>
						</div>
						
						
						</div>	
				
				<div class="col-md-6 order-form-grids" >
					<img src="images/pizza2.jpeg" class="img-responsive" alt="" style="width:500px;height:300px;"/>
				</div>  
				
				
				</div>
			</div>	
				
		
			
	</div> <!--end of order-->
	

</body>
</html>
<script>

// Redirect user to home page after submitting order
/*function redirect() {
  window.location.replace("index.html");
  return false;
}

// Compute total cost of the order for the customer
function getTotalCostOfPizza()
{
	// Get/store form data
	var theForm = document.forms["pizzaOrderForm"];
	

	
	// Use associative array to map all Pizza item radio buttons to a price
	var pizzaItemPriceList = new Array();


}
// Checkbox and submit button validation
function validateChecks() {
		var chks = document.getElementsByName('topping[]');
		var checkCount = 0;
		for (var i = 0; i < chks.length; i++) {
			if (chks[i].checked) {
				checkCount++;
			}
		}

		// Must have a max of 3 toppings 
		if (checkCount > 3) {
			alert("Sorry, please choose max. 3 toppings!");
			return false;

		}

		// Cannot have zero toppings
			if (checkCount < 1) {
			alert("Sorry, please choose at least 1 topping!");
			return false;

		}
		return true;
	}
	function validate(form) {
		if(validateChecks()==false) {
			alert('Please fill all the required fields.');
			return false;
		}
		return true;
	}*/


	
	
	
$(document).ready(function()
{

	// // Validation for submit action with the checkbox logic
	// // Vallidate user has selected either 2 checkboxes from the list of meats and 1 from list of non-meats checkboxes
	// $(".meats,.nonmeats").click(function () 
	// {    
	//         if ($(this).attr('checked') == false) 
	//         {
	        		
	//             $('.action submit btn btn-sucess').attr("disabled", "disabled");
	//             //console.log("TEST LINE 12");
	//         } else {
	//             $('.action submit btn btn-sucess').removeAttr('disabled');
	//         }
	   

	// });

	//  if(!this.form.checkbox.checked)
	// {
	//     alert('You must agree to the terms first.');
	//     return false;
	// }

	var current = 1;
	var empty = false;

	widget      = $(".step");
	btnnext     = $(".go");
	btnback     = $(".back"); 
	btnsubmit   = $(".submit");
	 
	// Init buttons and UI
	widget.not(':eq(0)').hide();
	hideButtons(current);
	setProgress(current);
	 
	// Validation for the 'Next' button being clicked
	 $('form > input').keyup(function() 
	 {

	        var empty = false;
	        $('form > input').each(function() 
	        {
	            if ($(this).val() == '') { empty = true; }
	        });
	})

 	
		// Next button click action
		btnnext.click(function()
		{
			if(current < widget.length){
				// Check validation
				if($(".form").valid()){
					widget.show();
					widget.not(':eq('+(current++)+')').hide();
					setProgress(current);
				}
			}
			hideButtons(current);
		})

	


	// Back button click action
	btnback.click(function()
	{
		if(current > 1){
			current = current - 2;
			if(current < widget.length){
				widget.show();
				widget.not(':eq('+(current++)+')').hide();
				setProgress(current);
			}
		}
		hideButtons(current);
	})
 
	// Submit button click
	btnsubmit.click(function()
	{
		//alert("Submit button clicked");
	});
 
    $('.form').validate({ // initialize plugin
		ignore:":not(:visible)",			
		rules: {
			name : "required"
		},
    });
 
});


 
// Change progress bar action
setProgress = function(currstep)
{
	var percent = parseFloat(100 / widget.length) * currstep;
	percent = percent.toFixed();
	$(".progress-bar").css("width",percent+"%").html(percent+"%");		
}
 
// Hide buttons according to the current step
hideButtons = function(current)
{
	var limit = parseInt(widget.length); 
 
	$(".action").hide();
 
	if(current < limit) btnnext.show();
	if(current > 1) btnback.show();
	if (current == limit)
	{ 
		btnnext.hide(); 
		btnsubmit.show();
	}
}


</script>

<script type="text/javascript">
    document.getElementById("submitbtn").onclick = function () {
        location.href = "www.csce4444.com/web/checkout.php";
    };
</script>