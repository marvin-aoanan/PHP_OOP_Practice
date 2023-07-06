<?php

// Visibility scope:
// public - can be access anywhere inside and outside scope
// private - can not be access from outside scope of the class but can be access using setters/getters.
// protected - can not be access outside scope but can be access from inherited class

// Class Inheritance
class Employee extends Person {
    private $jobTitle;
    public function __construct($jobTitle, $firstName, $lastName, $gender = 'female') {
        $this->setJobTitle($jobTitle);

        // Accessing variables of class Person using 'parent' keyword
        parent::__construct($firstName, $lastName, $gender);
    }

    public function setJobTitle($jobTitle) {
        $this->jobTitle = ucfirst($jobTitle);
    }
    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function sayHello() {
        $message = "Hello! My name is " . $this->firstName . " " . $this->lastName .  ". I am a " . $this->gender . ". ";
        $message .= "My job title is " . $this->jobTitle;
        return $message;
    }
}

// Creating a Class, Properties and Methods
class Person {
    protected $firstName;
    public $lastName;
    public $gender;

    public function __construct($firstName, $lastName, $gender = 'female') {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }
    

}

// Creating Object by instanciation and encapsulation of the Class using 'new' keyword
$marv = new Employee('Backend developer', 'Marvin', 'Aoanan', 'male');
$marv->setJobTitle('Tester');
echo $marv->sayHello();
echo "\n";
//echo $marv->firstName;
echo "\n";
