<?php


	$currenttb="Cart";
$currenttb1="TestOrder";


$con=mysqli_connect("localhost","user_eg","13669618","Database_Project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="Insert into $currenttb1 
        Select * from $currenttb";
mysqli_query($con,$sql); // That inserts the data from Daten to Server

/*$query = "SELECT  FROM Server";
$result = mysqli_query($con,$query); // You're selecting ServerID in Server

echo "The result are ". mysqli_fetch_array($result)['ServerID']; // It gives all ServerID from Server*/





?>