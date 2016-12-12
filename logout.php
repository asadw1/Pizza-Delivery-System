<?php

//echo "this is a test";
//session_unset();
//session_destroy();

//header("Location: index.html"); 




session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.html"); // Redirecting To Home Page
}
 ?>