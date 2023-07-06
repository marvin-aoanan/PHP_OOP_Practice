<?php

// OOP is a coding methodolgy
// Abstraction and Encapsulation
// Class us the blueprint of an object
// Object is 

// Creating a Class, Properties and Methods
class Person {
    public $firstName;
    public $lastName;
    public $gender;

    public function __construct($firstName, $lastName, $gender = 'female') {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }
    public function sayHello() {
        return "Hello! My name is " . $this->firstName . " " . $this->lastName .  ". and I am a " . $this->gender;
    }

}

// Creating Object by instanciation and encapsulation the Class using 'new' keyword
$bil = new Person ('Billy', 'Aoanan', 'male');
$yunir = new Person ('Yunir', 'Aoanan', 'male');
echo $bil->sayHello();
echo "\n";
echo $yunir->sayHello();
echo "\n";