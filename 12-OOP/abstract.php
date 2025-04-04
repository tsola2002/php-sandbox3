<?php 

abstract class Shape {

    abstract protected function getArea();

    abstract protected function getPerimeter();
}

class Triangle extends Shape
{

    private $sides = array();
    private $perimeter = NULL;

    public function __construct($side1 = 0, $side2 = 1, $side3 = 2)
    {
        $this->sides[] = $side1;
        $this->sides[] = $side2;
        $this->sides[] = $side3;

        //initialize perimeter of Shape
        $this->perimeter = array_sum($this->sides);
    }

    public function getArea(){
        return (SQRT( ($this->perimeter/2) * 
        (($this->perimeter/2) - $this->sides[0]) *
        (($this->perimeter/2) - $this->sides[1]) *
        (($this->perimeter/2) - $this->sides[2]) ));
    }

    public function getPerimeter(){
        return $this->perimeter;
    }

}


//IMPEMENTATION
$side1 = 5;
$side2 = 10;
$side3 = 7;

$tri = new Triangle($side1, $side2, $side3);

// Printing the perimeter of the triangle 
echo "<p>The perimeter of the triangle is: " . $tri->getPerimeter(). "</p>";

// Printing the area of the triangle 
echo "<p>The area of the triangle is: " . $tri->getArea(). "</p>";

?>