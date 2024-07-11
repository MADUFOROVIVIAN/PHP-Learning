<?php

// Numeric array

$Niit = array("Students", "Faculty", "Consellors", "HR", "25");
echo $Niit[0] . "<br>";
echo $Niit[1] . "<br>";
echo $Niit[2] . "<br>";
echo $Niit[3] . "<br>";
echo $Niit[4] . "<br>";
echo print_r($Niit);

$MyWeekend =array("My weekend was awesome!", "and", "It was motivating");
echo $MyWeekend[0]. "<br>";
echo $MyWeekend[1]. "<br>";
echo $MyWeekend[2]. "<br>";
echo print_r($MyWeekend). "<br>";
echo '<br>';
echo '<br>';

// Associative array
$Blenco = array("snacks" => 2000, "Bread" => 1500, "Toiletries" => 10000);
echo $Blenco["snacks"]. "<br>";
echo $Blenco["Bread"]. "<br>";
echo $Blenco["Toiletries"]. "<br>";
echo print_r($Blenco). "<br>";

$myWeekend = array("Saturday" => "Awesome!", "Sunday" => "Motivating", );
echo $myWeekend["Saturday"]. "<br>";
echo $myWeekend["Sunday"]. "<br>";
echo print_r($myWeekend). "<br>";
echo '<br>';
echo '<br>';

// Multidimensional array

$myProfile = array(
"myWeekend" => array("Awesome", "Motivating"),
"Snacks" => array(2000),
 "Bread" => array(1500),
 "Toiletries" => array(10000),
);

echo $myProfile["myWeekend"][0]. "<br>";
echo $myProfile["myWeekend"][1]. "<br>";
echo $myProfile["Snacks"][0]. "<br>";
echo $myProfile["Bread"][0]. "<br>";
echo $myProfile["Toiletries"][0]. "<br>";
echo print_r($myProfile);



?>