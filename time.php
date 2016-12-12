<?php

// Simple test file for UTF time formatting between front-end and back-end system compatibility. 


/*$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60 secs
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// or using strtotime():
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";*/


//$hourMin = date('H:i');
//$hourMin= date("h:i:s A") . "<br>";

//echo $hourMin;




// Prints the day
/*echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";

// Prints October 3, 1975 was on a Friday
echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

// Use a constant in the format parameter
echo date(DATE_RFC822) . "<br>";

// prints something like: 1975-10-03T00:00:00+00:00
echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));*/

/*echo date_default_timezone_get();



$date = date_create('2000-01-01', timezone_open('America/Chicago'));
echo date_format($date, 'Y-m-d H:i:sP') . "\n";

date_timezone_set($date, timezone_open('Pacific/Chatham'));
echo date_format($date, 'Y-m-d H:i:sP') . "\n";*/



echo gmdate("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo gmdate("l jS \of F Y h:i:s A") . "<br>";

// Prints October 3, 1975 was on a Thursday
echo "Oct 3, 1975 was on a ".gmdate("l", mktime(0,0,0,10,3,1975)) . "<br>";

// Use a constant in the format parameter
echo gmdate(DATE_RFC822) . "<br>";

// prints something like: 1975-10-03T00:00:00+00:00
?>
