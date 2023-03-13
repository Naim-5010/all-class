<?php 
// $date_time = date("y.m.d");
// echo $date_time."\n";
// // $date= date("d,m,y");
// echo $date.PHP_EOL.PHP_EOL;
// $date_system = date("Y-M-D");
// echo $date_system;

// NO 2
//Week 
// $date = date("l");
// echo $date;


// NO 3
// Am and Pm
// date_default_timezone_set("Asia/Dhaka");
// $date_time = date('H:i:s');
// echo $date_time;

//01869536260 nazmuul ma
// NO 4 day/months/hours/seconds === add & sub

// $date_time = date_create("2023-01-01");
// date_add($date_time,date_interval_create_from_date_string("40 days"));
// echo date_format($date_time ,"D-M-Y");

// $date_time = date_create("2023-01-01");
// date_sub($date_time,date_interval_create_from_date_string("3 weeks"));
// echo date_format($date_time,"Y-m-d");


// NO 5 date diff  output to day

// $date1 = date_create("2004-01-01");
// $date2 = date_create("2023-03-10");
// $dateDiff = date_diff($date1,$date2);
// echo $dateDiff->format("%R%a days");


//output to year
// $date1 = new DateTime("2010-01-01");
// $date2 = new DateTime("2020-01-01");
// $new_date = date_diff($date1 , $date2);
// echo $new_date->format("%y years");

// output for week
// $date1 = date_create("2004-01-01");
// $date2 = date_create("2023-03-10");
// $new_date = date_diff($date1,$date2);
// echo $new_date->format("%a years");
// echo "\n";
// echo "\n";
// echo $new_date->format("%a ") / 7 . 'weeks';

// $date1 = date_create("2004-01-01");
// $date2 = date_create("2023-03-10");
// $new_date = date_diff($date1,$date2);
// echo $new_date->format("%R%y-%m-%a y m d");

// NO 6 date_format 

// $date = date_create("2023-01-01");
// $date_format = $date->format("Y/m/d H:i:s");
// echo $date_format;

// $date = date_create("2021-01-01");
// echo date_format($date,"y-m-d h:i:sa");

// NO 7 datte_sunrise and date_sunset

// date_default_timezone_set("Asia/Dhaka");
// $time = date("h:i:sa");
// echo $time ;
 
