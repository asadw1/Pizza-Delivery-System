<?php
	//Script that transfers the user's order from the cart to the kitchen table*/

	session_start();
	$name =$_SESSION ['login_user'];

$servername = "localhost";
$username = "user_eg";
$password = "13669618";
$currentdb="Database_Project";
	
@ $db = new mysqli('localhost', $username, $password, $currentdb ); 

//check the connection
if (mysqli_connect_errno())
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
$currenttb="Cart";
$currenttb1="TestOrder";

/*pass is using the username from login session*/
$query=("insert into TestOrder (username, Method, Pizza, Toppings)
select  username, Method,Pizza, Toppings from Cart where username="."'$name'");

/*now needs to remove the records from the Cart table to avoid duplicates*/
$query2=("delete from Cart where username="."'$name'");

$result = $db->query($query);
$result2 = $db->query($query2);
if($result && $result2)
{   /*send the user to the final page of the website*/
	header("location: final.php");
}
$db->close();
?>