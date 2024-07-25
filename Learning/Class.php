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

class User {
    var $name;
    var $id;
    var $skills;

    function __construct($name, $id, $skills) {
        $this->name = $name;
        $this->id = $id;
        $this->skills = $skills;
    }

    static function displayInfo($user) {
        echo "My name is " . $user->name . ". My Id is " . $user->id . ". My skill is " . $user->skills . ".";
    }
}

$user = new User("Tobi", 1, "Backend");
User::displayInfo($user);

class User {
    public $name;
    public $id;
    public $skills;

    function __construct($name, $id, $skills) {
        $this->name = $name;
        $this->id = $id;
        $this->skills = $skills;
    }

    static function displayInfo($user) {
        echo "My name is " . $user->name . ". My Id is " . $user->id . ". My skill is " . $user->skills . ".";
    }
}

$user = new User("Tobi", 1, "Backend");
 User::displayInfo($user);



// $user1 = new User();
// $user1-> name = "Tobi";
// $user1-> id = 1;
// $user1-> skills = "Backend";

// echo $user1->name . "<br>";
// echo $user1->id . "<br>";
// echo $user1->skills . "<br>";




// Class User{
//     static function welcomeMessage(){
//         echo "Welcome";
//     }
// }
// User:: welcomeMessage();

// class Football{
//     private $club;
//     private $manager;

//     private displayTeam () {
//         echo $this->$club . "" . $this->$manager;
//     }
// }

// $myTeam = new Football("LiverpoolFC", "Arne Slot");
// Football::displayTeam($myTeam);

class Football {
    private $club;
    private $manager;

    // Constructor to initialize properties
    private function __construct($club, $manager) {
        $this->club = $club;
        $this->manager = $manager;
    }

    // Static method to display the team
    private static function displayTeam($team) {
        echo $team->club . " " . $team->manager;
    }
}

// Create an instance of the Football class
$myTeam = new Football("LiverpoolFC", "Arne Slot");

// Call the static displayTeam method with the instance as an argument
Football::displayTeam($myTeam);

class Football {
    private $club;
    private $manager;
      public function displayTeam() {
        echo $this->club . "" . $this->manager;
      }
    }
    
    // $myTeam = new Football("Liverpoolfc", "Arne Slot");
    // $myTeam->displayTeam();
?>