<?php
class Calculator {
    public $myValue;
    public function setValue($value) {
        $this->myValue = $value;
    }
    public function square() {
        $sqr=$this->myValue * $this->myValue;
        echo "square is $sqr<br>";
    }
    public function qube() {
        $cube=$this->myValue * $this->myValue * $this->myValue;
        echo "cube is $cube  <br>";
    }
}
$calculator = new Calculator();
$calculator->setValue(5);
$calculator->square();
$calculator->qube();
//With Constructor
class CalculatorWithConstructor {
    public $myValue;
    public function __construct($value) {
        $this->myValue = $value;
    }
    public function square() {
        $sqr =$this->myValue * $this->myValue;
        echo "square is $sqr <br>";
    }
    public function qube() {
        $cube= $this->myValue * $this->myValue * $this->myValue ;
        echo "cube is $cube <br>";
    }
}
$CalculatorWithConstructor = new CalculatorWithConstructor(5);
$CalculatorWithConstructor->square();
$CalculatorWithConstructor->qube();


?>