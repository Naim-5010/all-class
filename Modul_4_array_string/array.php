<?php

// $students = array ('Naim','Rakib','Mohib');

// foreach($students as $name){
//     echo $name;
//     echo "\n";
// }

// //array and foreach loop;

// echo "\n";
// echo "\n";

// $allcity = array ("Mymensingh","Sherpur","Jamalpur");

// for($i=0; $i<count($allcity); $i++){
//     echo $allcity[$i];
//     echo "\n";
// }

// echo "\n";
// echo "\n";

// $calcolation = count($allcity);
// for($i=0; $i<$calcolation; $i++){
//     echo $allcity[$i]."\n";
// }

// echo "\n";
// echo "=========================";
// echo "\n";

// //multidimantionl array

// $naim = array (
//     array("Naim","Rakib","Mohib"),
//     array("Naim1","Rakib1","Mohib1"),
//     array("Naim2","Rakib2","Mohib2"),

// );
    
// echo $naim[2][0];

// echo "\n";
// echo "+++++++++++++++++++++++++";
// echo "\n";

// $naim = array (
//     array("Naim","Rakib","Mohib"),
//     array("Naim1","Rakib1","Mohib1"),
//     array("Naim2","Rakib2","Mohib2"),

// );
    
// foreach($naim as $rakib){
//     foreach($rakib as $mohib){
//         echo "$mohib";
//         echo "\n";
//     }
// }

// echo "\n";
// echo "============================";
// echo "\n";

// //array pop,push: shift,unshift 

// $students = array( 
//     "Naim",
//     "Mohib",
//     1234,
//     "Rakib"
// );

// $students[2]= "Norany";
// // $student = array_slice($students,2,2);
// // print_r($student);

// // $student = array_pop($students);
// //echo $student;

// // $student = array_shift($students);
// // echo $student;

// // array_shift($students);
// // array_pop($students);

// // $students [] = "Nana";
// // $student = array_push($students, "Nana");
// // array_unshift($students,"Nana");



// for($i=0; $i<count($students); $i++){
//     echo $students[$i];
//     echo "\n";
// };

// echo "\n";
// echo "=====================================";
// echo "\n";

// $allcity = array('Mymensingh','Dhaka','Sherpur','Jamalpur');

// var_dump(array_reverse($allcity));

// echo "\n";
// echo "\n";

// $key = array_search("sherpur",$allcity);
// echo "$key";

// echo "\n";
// echo "+++++++++++++++++++++++++++++++++++++++++";
// echo "\n";

// $students = array( 
//     "class1" => "Naim,naim1,naim2",
//     "class2" => "Rakib,rakib1,rakib2",
//     "class3" => "Mohib,mohib1,mohib2",
// );

// foreach ($students as $key => $value){
//     echo $key . "=>".$value;
//     echo "\n";
// }

// $key = array_keys($students);
// print_r($key);
// echo PHP_EOL;

// print_r ($students);



//No 1 array all use

// $food= array("Naim", "Rakib", "kamal",);
// $naim = array_pop($food);
// echo $naim;


/// No2 arry & string   Implode and Explode

// $array = array("My", "Name", "is", "Naim", "islam");
// echo implode("=", $array);

$string = "My name is Naim Islam";
print_r(explode(" ",$string));


