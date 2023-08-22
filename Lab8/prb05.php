<?php
class Box {
    private $length,$width,$height;
    public function __construct($length, $width, $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea() {
        return ($this->length * $this->width* $this->height);
    }
}
$box = new Box(1,2,3);
$area = $box->getArea();
echo "Area of the box: $area<br>";

?>