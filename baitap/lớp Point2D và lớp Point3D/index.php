<?php

include_once ("Point2D.php");
include_once ("Point3D.php");
$point2 = new Point2D(0.2,3);
echo "<pre>";
$point2->toString();
echo "<pre>";
$point3 = new Point3D(4,5,6);
$point3->toString();
