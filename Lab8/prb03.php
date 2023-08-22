<?php
class Student {
    private $name,$id,$cgpa;
    public function __construct($n, $i, $cg) {
        $this->name = $n;
        $this->id = $i;
        $this->cgpa = $cg;
    }
    public function getName() {
        return $this->name;
    }
    public function getId() {
        return $this->id;
    }
    public function getCGPA() {
        return $this->cgpa;
    }
}
$student1 = new Student("Afridi", "2019-3-60-112", 3.7);
$student2 = new Student("Samiha", "2019-3-60-100", 3.99);
$c1 = $student1->getCGPA();
$c2 = $student2->getCGPA();
$avg = ($c1+$c2)/2;
echo "Average CGPA is : $avg";
?>