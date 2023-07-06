<?php

// Class Constants - values never change within or outside a class using 'const' keyword

// Class Inheritance
class Employee extends Person {
    const COMPANY_NAME = "BALLY'S";

    /**
     * Title of job
     * @var string Job Title 
     */
    public $jobTitle;
    private $jobNum;
    public function __construct($jobTitle, $firstName, $lastName, $gender = 'female') {
        $this->jobTitle = $jobTitle;

        // Accessing const from parent class
        //echo parent::EYE_COLOR;
        
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
    const EYE_COLOR = 'brown';
    protected $firstName;
    public $lastName;
    public $gender;

    public function __construct($firstName, $lastName, $gender = 'female') {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        //echo self::EYE_COLOR; // Accessing const from inside a class
    }
    

}

// Creating Object by instanciation and encapsulation of the Class using 'new' keyword
$marv = new Employee('Backend developer', 'Marvin', 'Aoanan', 'male');
//echo Employee::COMPANY_NAME;
echo Employee::EYE_COLOR;
echo "\n";