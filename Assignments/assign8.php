<?php
// Basics
// properties

class Students{
private $name;
private $age;
private $course;
private $skill;

// Constructor to initialize properties
public function __construct($name, $age, $course, $skill) {
    $this->name = $name;
    $this->age = $age;
    $this->course = $course;
    $this->skill = $skill;
}

// Public method to access private properties
public function getName() {
    return $this->name;
}

public function getAge() {
    return $this->age;
}

public function getCourse() {
    return $this->course;
}

public function getSkill() {
    return $this->skill;
}

// Public method to set private properties
public function setName($name) {
    $this->name = $name;
}

public function setAge($age) {
    $this->age = $age;
}

public function setCourse($course) {
    $this->course = $course;
}

public function setSkill($skill) {
    $this->skill = $skill;
}

// Private method
private function privateMethod() {
    return "This is a private";
}

// Public method to call a private method
public function callPrivateMethod() {
    return $this->privateMethod();
}

}

// Creating an object of the class
$students = new Students("Kelvin", 30, "PHP", "Backend");

// Accessing public methods to get private properties
// echo $students->getName() . "<br/>"; 
// echo $students->getAge() . "<br/>"; 
// echo $students->getCourse() . "<br/>"; 
// echo $students->getSkill() . "<br/>"; 

echo '<br>'; 

// Setting new values to private properties using public methods
$students->setName("newKelvin");
$students->setAge("new30");
$students->setCourse("newPHP");
$students->setSkill("newBackend");

//  Accessing public methods to get updated private properties
// echo $students->getName() . "<br/>"; 
// echo $students->getAge() . "<br/>"; 
// echo $students->getCourse() . "<br/>"; 
// echo $students->getSkill() . "<br/>";

// Calling a private method via a public method
echo $students->PrivateMethod(); // Output: This is a private
?>