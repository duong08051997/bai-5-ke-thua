<?php
include_once ("Circle.php");
include_once ("Cylinder.php");


$circle = new Circle(2,"red");
echo "Circle Area: ".$circle->calculateArea()."<br>";

$cylinder = new Cylinder(5,"blue",2);
echo "Cylinder Volume: ".$cylinder->calculateVolume()."<br>";

echo $cylinder->toString();