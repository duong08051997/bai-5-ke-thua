<?php
include_once("Cricle.php");
class Cylinder extends Cricle{
    public  $height;

    public function __construct($name, $radius,$height)
    {
        parent::__construct($name,$radius);
        $this->height = $height;
    }
    public function calculateArea()
    {
        return parent::calculateArea()*2 + parent::calculatePerimeter();
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}
