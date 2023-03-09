<?php
//function 

function home(){
    echo "Hello Bangladesh";
}
home();

echo"\n";
echo "=====================";
echo "\n";

function how($x,$y,$z){
    echo $x+$y+$z;

}
how(10,10,5);

echo "\n";
echo "==============================";
echo "\n";

// even or add return value

function evenoradd($x){
    if($x%2==0){
        return true;
    }else{
        return false;
    }
}

$n = 10;

if($n){
    echo "{$n} This number is even";
}else{
    echo "{$n} This number is add";
}

echo "\n";
echo "=============================";
echo "\n";

//global value add

$value = "Hello  Global variable";

function name(){
    global $value;
    echo $value;
}
name();

echo "\n";
echo "======================";
echo "\n";

//local value 

function contain(){
    $local = "Local variable";
    echo $local;
}
contain();

