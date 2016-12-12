<?php

$sname=$_POST['sign_name'];
$slastname=$_POST['sign_lastname'];
$semail=$_POST['sign_email'];
$spass=$_POST['sign_password'];
$sphone = $_POST['Phone'];
$szip=$_POST['sign_zipcode'];


@ $db = new mysqli('localhost', 'user_eg','13669618', 'Database_Project' ); 
if (mysqli_connect_errno())
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}

$currenttb="UserDB";

$query="select Phone from $currenttb where (Phone="."'$sphone')"; 
$result = $db->query($query);
$row = mysqli_fetch_row( $result );

if ($row>0)
{
echo '<div class="container">	 
		<div class="row"> 	
			<div class="col-sm-8">
				<h2> You already have an account, please login </h2>		
			</div>
		</div>
	</div>';
}

else
{
$query="insert into $currenttb values
(Null,'".$sname."','".$slastname."','".$semail."','".$sphone."','".$spass."','".$szip."')";
//$query="insert into $currenttb values
//(Null,'".$sname."','".$slastname."','".$semail."','".$sphone."','".$spass."','".$szip."')";
//}	
$result = $db->query($query);
if($result)
{

header("location: index.html");
}
}
$db->close();
?>

