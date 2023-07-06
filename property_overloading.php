<?php

// Property overloading:
// private - can not be access from outside scope of the class but can be access using setters/getters or
// using a magic keyword __set and __get.

// Class Inheritance
class Employee extends Person {
    /**
     * Title of job
     * @var string Job Title 
     */
    public $jobTitle;
    private $jobNum;
    public function __construct($jobTitle, $firstName, $lastName, $gender = 'female') {
        $this->jobTitle = $jobTitle;
        // Accessing variables of class Person using 'parent' keyword
        parent::__construct($firstName, $lastName, $gender);
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
    public function __get($name) {
        return $this->$name;
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
$marv->jobTitle = 'QA/Tester';
$marv->jobNum = 2311;
echo $marv->jobTitle;
echo "\n";
echo $marv->jobNum;
