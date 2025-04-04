<?php

class Pet
{

    public $name;

    // CONSTRUCTOR 
    public function __construct($pet_name)
    {
        $this->name = $pet_name;
    }

    function eat()
    {
        echo "<p>" . $this->name . " is eating</p>";
    }

    function sleep()
    {
        echo "<p>" . $this->name . "is sleeping.</p>";
    }

    function play()
    {
        echo "<p>" . $this->name . "is playing.</p>";
    }

}

class Dog extends Pet
{

    function play()
    {
        echo "<p>" . $this->name . "is barking. </p>";
    }
}

class Cat extends Pet
{

    function play()
    {
        echo "<p>" . $this->name . " is meowing. </p>";
    }
}

$snoop = new Dog("snoop");
$tom = new Cat("Tom");
$pet = new Pet("Anonymous");

//FEED ALL PETS 
// $snoop->eat();
// $tom->eat();
// $pet->eat();

// PLAY WITH ALL PETS
$snoop->play();
$tom->play();
$pet->play();

// DELETING AN OBJECT
unset($tom, $snoop, $pet);

//$snoop->play();

?>