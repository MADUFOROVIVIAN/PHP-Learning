<?php
// conditional Statement(if,switch,)

$age = 20;
if ($age < 18) {
    echo "you are eligible to vote in Nigeria";
} elseif ($age == 18) {
    echo "you are eligible to vote in Nigeria";
} else {
    echo "I don't know if eligible to vote in Nigeria";
}
echo '<br>';
echo '<br>';

// switch Statement

$Days = 4;
switch ($Days) {
      case 1:
      echo "Monday";
      break;

      case  2:
      echo "Tuesday";
      break;

      case 3:
      echo "Wednesday";
      break;

      case  4:
      echo "Thursday";
      break;

      case  5:
      echo "Friday";
      break;

      default: echo "its not part of the days";
      break;
}



?>