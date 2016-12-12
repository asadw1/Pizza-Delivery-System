<?php

/* TESTING this page for Parse or Syntax errors, using lines 4-5 */
//ini_set('display_errors', 'On'); 	// Comment out for live/release mode
//error_reporting(E_ALL);	

// Generate global phpmyadmin connection variable for use on all querying pages
$connection = mysqli_connect("127.0.0.1", "user_eg", "13669618", "Database_Project");

// Canonical check of the connection variable...did we connect?
if (!$connection)
{
    die("Database Connection Failed" . mysqli_error($connection));
}

// DEBUG/TEST ONLY
// if (!$connection) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }
// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;

// Setup and access the DB for the project
$select_db = mysqli_select_db($connection, 'Database_Project');

if (!$select_db)
{
    die("Database Selection Failed" . mysqli_error($connection));
}

?>
