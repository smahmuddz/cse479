<?php
class Calculator {
    public $myValue;
    public function setValue($value) {
        $this->myValue = $value;
    }
    public function square() {
        echo "square is $this->myValue * $this->myValue<br>";
    }
    public function cube() {
        echo "cube is $this->myValue * $this->myValue * $this->myValue <br>";
    }
}
$calculator = new Calculator();
$calculator->setValue(5);
$calculator->square();
$calculator->cube();
//With Constructor
class CalculatorWithConstructor {
    public $myValue;
    public function __construct($value) {
        $this->myValue = $value;
    }
    public function square() {
        echo "square is $this->myValue * $this->myValue<br>";
    }
    public function cube() {
        echo "cube is $this->myValue * $this->myValue * $this->myValue <br>";
    }
}
$CalculatorWithConstructor = new CalculatorWithConstructor(5);
$CalculatorWithConstructor->square();
$CalculatorWithConstructor->cube();


?>