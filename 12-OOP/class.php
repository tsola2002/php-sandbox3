<?php 

class Person {

    //properties for our class
    var $name;
    var $age;

    var $arms;

   function walk(){
        echo get_class($this) . "is walking!!" . "<br>";
    }
    function talk(){
        get_class($this) . "is talking to you". "<br>";
    }

}

// CREATING AN OBJECT OF OUR CLASS 
$ezra = new Person();
$nkechi = new Person();

$ezra->name = "Ezra";
$ezra->age = 25;
$ezra->arms = 4;

// echo "The name is: " . $ezra->name . " The age is: " .$ezra->age . " number of arms is: " . $ezra->arms;

echo $ezra->talk();


// echo method_exists("Person", "talk") ? "method found" : "method not found";

// $classes = get_declared_classes();
// foreach ($classes as $class) {
//     echo $class . "<br>";
// }

// $vars = get_class_vars('Person');
// foreach ($vars as $shola => $value) {
//     echo "{$shola} : {$value}<br>";
// }

?>