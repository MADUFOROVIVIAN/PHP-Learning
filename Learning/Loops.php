<?php
// while

// $num = 0;
// while ($num < 20){
//     $num = $num + 1;
//     echo $num;
//     echo "<br>";
// }

// do...while

$num = 0;
do {
        $num = $num + 1;
        echo $num;
        echo "<br>"; 
} while ($num < 20);

// for loop

for ($num = 0; $num <20; $num++){
echo $num;
echo "<br>"; 
}

// foreach

$books = ["Gone with the wind", "Harry Potter", "Peter Pan", "Three states of the mind", "Tink"];
foreach ($books as $values) {
    echo $values. "<br>";
}
?>