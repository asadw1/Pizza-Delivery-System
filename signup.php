<?php



include 'DBconnect.php';



$first = $_POST['first'];

$last = $_POST['last'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$uid = $_POST['uid'];

$pwd = $_POST['pwd'];



// DEBUG ONLY; COMMENT THESE OUT WHEN WE GO LIVE

//echo $first."<br>";

//echo $last."<br>";

//echo $email."<br>";

//echo $phone."<br>";

//echo $uid."<br>";

//echo $pwd."<br>";

// Now create our SQL string to store values

$sql = "INSERT INTO user (first, last, email, phone, uid, pwd) 
VALUES ('$first','$last','$email','$phone','$uid','$pwd')";

$result = mysqli_query($conn, $sql);

// Redirect user to the home page
header("Location: index.html");
?>