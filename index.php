<?php
include_once 'Circle.php';
include_once 'Cylinder.php';

$circle = new Circle(4,'black');

echo 'The area of this circle is'.$circle->calculateArea()."<br/>";
echo 'The perimeter of this circle is'.$circle->calculatePerimeter()."<br/>";
echo 'The color of this circle is'.$circle->getColor()."<br/>";

$cylinder = new Cylinder(5,'black',4);

echo 'The volume of this cylinder is:'.$cylinder->calculateVolume()."<br/>";
echo 'The color of this cylinder is:'.$cylinder->getColor();
