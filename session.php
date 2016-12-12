<?php

//Using mysqli function to connect to DB
@ $db = new mysqli('localhost', 'user_eg','13669618', 'Database_Project' );

// Set current table and init session variables for the user
$currenttb="UserDB";
session_start();
$user_check=$_SESSION['login_user'];


$query="select sign_email from $currenttb where sign_email="."'$user_check'"; 
	$result = $db->query($query);
	$row = mysqli_fetch_row( $result );
	$login_session =$row['sign_email'];

// Check if the user's session failed, if so send them back to the homepage
if(!isset($login_session)){
$db->close(); // Closing Connection
header('Location: index.html'); // Redirecting To Home Page
}
	



?>
