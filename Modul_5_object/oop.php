<?php

// 1 no  

// class myClass{
//     private $name;
//     private $age;

//     public function __construct($name, $age){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getName(){
// //         return $this->name;
// //     }
// //     public function getAge(){
// //         return $this->age;
// //     }
    
// //     //set methode

// //     public function setName($name){
// //         $this->name = $name;
// //     }
// //     public function setAge($age){
// //         $this->age = $age;
// //     }

// //     public function allInfo(){
// //         echo "My Name Is {$this->name}". "\n";
// //         echo "I'm {$this->age} years old";
// //     }
// // }
// // $obj =new myClass("MD:NAIM", 20);
// // echo $obj->allInfo();

// //2 No over writing

//  class father{
//     public static function add(){
//         echo "My name is Naim";
//     }
//  }

//  class sun extends father{
//     public static function add(){
//         echo "Hello Bangladesh!, How are you";
//     }
//  }
 
//  sun :: add();
 
// 3 No abstruct and extends class


//   abstract class father{
//  final  public  function add(){
//         echo "My name is Naim";
//     }
//  }

//  class sun extends father{

//  }
 
// $obj1 = new sun();
// echo $obj1->add();

// //4 NO trait

// trait madinUSA{
//    public function carName(){
//         echo "The car name is BMW";
//     }
// }
// trait madinJapan{
//    public function carColor(){
//         echo "The car color is red";
//     }
// }
// trait madinchina{
//    public function carModel(){
//         echo "Car model is 34908743";
//     }
// }
// class car{
//     use madinUSA, madinJapan, madinchina;
//     public function add(){

//     }
// }

// $obj =new car();
// $obj->carName();
// echo "\n";
// $obj->carColor();
// echo "\n";
// $obj->carModel();

//6 NO interface advanc
 
// interface Animal{
//     public function makeSound();
// }
// class Dog implements Animal{
//     public function makeSound(){
//         echo "Gau Gau! \n";
//     }
// }
// class Cat implements Animal{
//     public function makeSound(){
//         echo "Meow Meow ! \n";
//     }
// }

// $obj = [
//     new Dog(),
//     new Cat(),
// ];
//  foreach ($obj as $animal){
//     $animal->makeSound();
//  }
