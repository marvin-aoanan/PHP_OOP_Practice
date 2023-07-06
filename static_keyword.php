<?php

// Static Keyword - can be set before the property or method name using 'static' keyword.
// Static property or static method can be access from outside of the class and
// Static property or static method can be access even without instatiating the class.
// Note: you can not return or use $this

// Class Inheritance
class Employee extends Person {

    public static $employeeNumber = 2311;
    private static $jobNumber = 11;
    const COMPANY_NAME = "BALLY'S";

    /**
     * Title of job
     * @var string Job Title 
     */
    public $jobTitle;
    private $jobNum;

    public static function generatePaySlip() {
        return self::$jobNumber;
    }

    public function __construct($jobTitle, $firstName, $lastName, $gender = 'female') {
        $this->jobTitle = $jobTitle;

        //echo self::getEmployeeNumber();
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

//$marv = new Employee('Test', 'Test', 'Test');
//echo Employee::$employeeNumber;
//echo Employee::getEmployeeNumber();
echo Employee::generatePaySlip();

echo "\n";