<?php
// (03-08-2024)

// $skills = array("HTML", "CSS", "JAVASCRIPT", "PHP", "MYSQLI", "LARAVEL");
// if ($skills = array("HTML", "CSS", "JAVASCRIPT")) 
// {
//     echo "you are a Frontend Developer";
// } elseif ($skills = array("PHP", "MYSQLI", "LARAVEL")){
// echo "you are a Backend Developer";
// } else {
//     echo "You are a Computer Literate";
// }

// solution 
$frontend = ["HTML", "CSS", "JavaScript"];
$backend = ["PHP", "MYSQL", "Laravel"];
$skill = $backend;

if ($skill == $frontend) {
    echo "you should be Frontend Developer";
}
elseif ($skill != $backend) {
    echo "you should be Backend Developer";
} else {
    echo "you should be computer literate";
}

$frontend = "HTML, CSS, JS";
$Backend = "PHP, MYSQL, LARAVEL";

if ($frontend != $frontend) {
    echo "you should be Frontend Developer";
}
elseif($Backend != $Backend){
     echo "you should be Backend Developer";
}
else {
     echo "you should be computer literate";
 }

?>