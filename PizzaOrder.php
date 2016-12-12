<?php
session_start();
$name =$_SESSION ['login_user'];


$servername = "localhost";
$username = "user_eg";
$password = "13669618";
$currentdb="Database_Project";


// Function: Check Input
// Purpose: Checks the submitted order data for errors

function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        die($problem);
    }
    return $data;
}

// Validate method
$Method = check_input($_POST['method'], "Enter method!");
$Size = $_POST['size'];
$Crust = $_POST['crust'];
$Sauce = $_POST['sauce'];

$Pizza = $Size . $Crust;  //join pizza size and crust
$Toppings = implode ("-", $_POST['topping']);
$Toppings = $Sauce ."-". $Toppings;


//$Sauce = implode ("-", $_POST['sauce']);
//$Pizza = implode ("-", $_POST['pizza']);

@ $db = new mysqli('localhost', $username, $password, $currentdb ); 
//check the connection
if (mysqli_connect_errno())
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
//$currenttb="TestOrder";
$currenttb="TestOrder";
#if(!$currenttb)
#{
#	echo ' no such table exists'; 
#}
#else
#{
	#here I started the input from the user requests
	#echo ' Table exists'; 
#}
/*$query="insert into $currenttb values
(Null,'".$Method."','".$Size."','".$Crust."','".$Sauce."','".$Toppings."')";*/

//$query="insert into $currenttb values
//(Null,'".$Method."','".$Pizza."','".$Toppings."')";

$query="insert into $currenttb values
(Null,'".$name."','".$Method."','".$Pizza."','".$Toppings."')";



$result = $db->query($query);
if($result)
{
	header('Location: checkout.php');

}
$db->close();
?>