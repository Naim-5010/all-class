<?php

$timestamp = time();
echo "Current Unix timestamp:".$timestamp;

echo "\n";

echo time();

echo "\n";

echo mktime(0,0,0,2,14,2023);
echo "\n";

print_r(getdate());
echo "\n";

echo "Current date and time: " .date("y-m-d h:i:s"); 
echo "\n";
echo "\n";

// date and time difference

function datediff($date1,$date2){
    $diff = abs(strtotime($date1) - strtotime($date2));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
    return "$years years.$months months.$days days";
}

$date1 = "2004/01/01";
$date2 = "2023/02/26";
echo "Difference Datetime $date1 and $date2 is : ".datediff($date1,$date2);
echo "\n";

//strtotime 
echo "\n";

$date = "2023,02,26";
$timestamp = strtotime($date);
// echo "Timestamp for $date is : $timestamp";
echo $timestamp;
echo "\n";

//use to strtotime 
echo "\n";
 //function to calculate 
