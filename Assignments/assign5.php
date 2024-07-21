<?php
// $score = 200;
// if ($score >175 ) {
//     echo "you've been granted scholarship";
// } elseif ($score == 180) {
//     echo "you've been granted scholarship";
// } else {
//     echo "Try again";
// }
// echo '<br>';
// echo '<br>';


class ExampleClass {
    // Private properties
    private $property1;
    private $property2;

    // Constructor to initialize properties
    public function __construct($property1, $property2) {
        $this->property1 = $property1;
        $this->property2 = $property2;
    }

    // Public method to access private properties
    public function getProperty1() {
        return $this->property1;
    }

    public function getProperty2() {
        return $this->property2;
    }

    // Public method to set private properties
    public function setProperty1($property1) {
        $this->property1 = $property1;
    }

    public function setProperty2($property2) {
        $this->property2 = $property2;
    }

    // Private method
    private function privateMethod() {
        return "This is a private method";
    }

    // Public method to call a private method
    public function callPrivateMethod() {
        return $this->privateMethod();
    }
}

// Creating an object of the class
$example = new ExampleClass("value1", "value2");

// Accessing public methods to get private properties
echo $example->getProperty1(); // Output: value1
echo $example->getProperty2(); // Output: value2

// Setting new values to private properties using public methods
$example->setProperty1("newValue1");
$example->setProperty2("newValue2");

// Accessing public methods to get updated private properties
echo $example->getProperty1(); // Output: newValue1
echo $example->getProperty2(); // Output: newValue2

// Attempting to call a private method directly will result in an error
// echo $example->privateMethod(); // Fatal error: Uncaught Error: Call to private method

// Calling a private method via a public method
echo $example->callPrivateMethod(); // Output: This is a private method
?>

?>