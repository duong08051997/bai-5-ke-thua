<?php
include_once("Circle.php");
class Cylinder extends Circle{
    public  $height;

    public function __construct($radius,$color,$height)
    {
        parent::__construct($radius,$color);
        $this->height = $height;
    }



    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter();
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
public function toString()
{
parent::toString();
return "height: ".$this->height;
}


}
