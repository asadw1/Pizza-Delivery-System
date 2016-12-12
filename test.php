<?php


$user=$_POST['uname'];
$pass=$_POST['psw'];

@ $db = new mysqli('localhost', 'user_eg','13669618', 'Database_Project' );
//check the connection
if (mysqli_connect_errno())
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
$currenttb="UserDB";;
$query="select sign_email, sign_password from $currenttb where (sign_email="."'$user' and sign_password="."'$pass')"; 
	$result = $db->query($query);
	$row = mysqli_fetch_row( $result );
	//if user is found on the database
	if ($row > 0)
	{
	header('Location: index.html');
	
	}
	else
	{
	echo "not found";
	}




//header('location: index.html');
$db->close();
?>