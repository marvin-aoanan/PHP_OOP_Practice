<?php

// Class Inheritance
class Employee extends Person {
    public $jobTitle;
    public function __construct($jobTitle, $firstName, $lastName, $gender = 'female') {
        $this->jobTitle = $jobTitle;

        // Accessing variables of class Person using 'parent' keyword
        parent::__construct($firstName, $lastName, $gender);
    }

    public function getJobTitle() {
        return 'My job is a ' . $this->jobTitle . ".";
    }
}

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
        return "Hello! My name is " . $this->firstName . " " . $this->lastName .  ". I am a " . $this->gender . ".";
    }

}

// Creating Object by instanciation and encapsulation of the Class using 'new' keyword
$marv = new Employee('Backend developer', 'Marvin', 'Aoanan', 'male');
echo $marv->sayHello() . " " . $marv->getJobTitle();
echo "\n";