<form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Forgot Password</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
	<br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>

<?php 
/* FORGOTPASSWORD.PHP

- Main functionality to provide user with their password in a timely manner
- Pre-pre alpha version 1.0
- v1.1 updates: salting passwords, sending a reset link to user instead of a password
- v1.2 updates: abandon SHA-1 and MD5 as they are insecure, try implementing PGP encryption for password recovery instead

*/
session_start();

//ini_set('display_errors', 'On'); 	// Comment out for live/release mode
//error_reporting(E_ALL);				// Comment out for live/release mode

include "DBconnect.php"; //connects to the database

if (isset($_POST['username']))
{
	/* DB/table access variables */
	$username = $_POST['username'];
	$query="SELECT * FROM `UserDB` WHERE sign_email='$username'";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count=mysqli_num_rows($result);

	// If the counter is equal to one, we will send message other wise display an error message.
	if($count==1)
	{
		$rows=mysqli_fetch_array($result);
		$pass  =  $rows['sign_password']; 

		$to = $rows['sign_email'];
		
		$from = "Pizza Delivery";
		$url = "http://www.csce4444.com/web";
		$body  =  "Planet Pizza password recovery 
		-----------------------------------------------
		Url : $url;
		email Details is : $to;
		Here is your password  : $pass;
		Sincerely,
		Coding Cyber";
		
		$from = "Your-email-address@domaindotcom";
		$subject = "Pizza Delivery Service recovered";
		$headers1 = "From: $from\n";
		$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
		$headers1 .= "X-Priority: 1\r\n";
		$headers1 .= "X-MSMail-Priority: High\r\n";
		$headers1 .= "X-Mailer: Just My Server\r\n";
		$sentmail = mail ( $to, $subject, $body, $headers1 );
	} 
	else 
	{
		var_dump($_POST ['email']);
	}

	//If the message is sent successfully, display sucess message otherwise display an error message.
	if($sentmail==1)
	{
		$smsg = "Your Password Has Been Sent To Your Email Address.";
	}
	else
	{
		if($_POST['username']!="")
			$nmsg = "Cannot send password to your e-mail address. Problem with sending mail...please try again";	
	}
}

?>
