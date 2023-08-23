<?php
class Circle {
    private $radius;
    public function setRadius($r) {
        $this->radius = $r;
    }
    public function getCircumference() {
        $c =2 * 3.1416 * $this->radius;
        echo "Circumference: $c<br>";
    }
    public function getArea() {
        $area =  3.1416 * $this->radius*$this->radius;
        echo "Area: $area<br>";
    }
}
$circle = new Circle();
$circle->setRadius(10);
$circle->getCircumference();
$circle->getArea();
?>