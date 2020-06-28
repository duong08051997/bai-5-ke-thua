<?php
include_once ("Point.php");
include_once ("MoveablePoint.php");


$point = new Point(1,2);
echo "<pre>";
echo $point->toString();
echo "<pre>";

$move = new MoveablePoint(5,4,2,4);

echo "<pre>";
echo $move->toString();
echo "<pre>";
