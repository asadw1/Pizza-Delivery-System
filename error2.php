<?php

// White-box configured test file
// When changes are made to checkout.php, this file will generate any Parse or Syntax errors in the browser
// Excellent test tool!
ini_set("display_errors", "1");
error_reporting(E_ALL);
include 'checkout.php';
?>
