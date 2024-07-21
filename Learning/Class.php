<?php

// Basics

// class Students

// // properties

// {
// public $name;
// public $age;
// public $course;
// public $skill;

// // default function that enables the pro

// public function __construct($name,$age,$course,$skill)
// {
//     $this->name = $name;
//     $this->age = $age;
//     $this->course = $course;
//     $this->skill = $skill;
// }

// // custom fucntion to create logic for the class
// public function displayInfo(){
//     echo "My name is " . $this->name . "I'm " . $this->age . "years old" . " My course is "
//           . $this->course . "and my skill is " . $this->skill;
// }
// }

// $students = new students("Tobi", 18, "PHP", "Backend");
// $students->displayInfo();

// echo '<br>';

// // old method using "var"

// class User { 
//     var $name;
//     var $id;
//     var $skills;
// }

// $user1 = new User();
// $user1-> name = "Tobi";
// $user1-> id = 1;
// $user1-> skills = "Backend";

// echo $user1->name . "<br/>";
// echo $user1->id . "<br/>";
// echo $user1->skills . "<br/>";

Class User{
    static function welcomeMessage(){
        echo "Welcome";
    }
}
User:: welcomeMessage();
?>