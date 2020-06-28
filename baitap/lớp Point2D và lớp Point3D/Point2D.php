<?php
class Point2D{
    public $x ;
    public  $y;


    public function __construct($x,$y)
    {
    $this->x =$x;
    $this->y = $y;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getX()
    {
    return $this->x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x,$y)
    {
    $this->x = $x;
    $this->y = $y;
    }
    public function getXY()
    {
       $arr = [];
       array_push($arr,$this->x,$this->y);
       return $arr;
    }
    public function toString()
    {
        var_dump($this->getXY());
    }
}

