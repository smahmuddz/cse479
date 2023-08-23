<?php
class Rectangle {
    private $width, $height;
    public function setWidth($w) {
        $this->width = $w;
    }
    public function setHeight($h) {
        $this->height = $h;
    }
    public function getWidth() {
        return $this->width;
    }
    public function getHeight() {
        return $this->height;
    }
    public function showArea() {
        $area= $this->width * $this->height;
        echo "Area: $area<br>";
    }
}
$r1 = new Rectangle();
$r1->setWidth(10);
$r1->setHeight(10);
echo "Area of Rectangle 1: ";
$r1->showArea();
$r2 = new Rectangle();
$r2->setWidth(10);
$r2->setHeight(12);
echo "Area of Rectangle 2: ";
$r2->showArea();

// Using Constructor
class RectangleConstructor {
    private $width, $height;
    public function __construct($w,$h) {
        $this->width = $w;
        $this->height = $h;
    }
    public function showArea() {
        $area= $this->width * $this->height;
        echo "Area: $area<br>";
    }
}
$r1 = new RectangleConstructor(10,10);
echo "Area of Rectangle 1: ";
$r1->showArea();
$r2 = new RectangleConstructor(10,12);
echo "Area of Rectangle 2: ";
$r2->showArea();
?>