<?php
include_once ("Point.php");

class MoveablePoint extends Point{
    public $xSpeed;
    public $ySpeed;
    public function __construct($x,$y,$xSpeed,$ySpeed)
    {
        parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed($xSpeed,$ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        $speed =[];
        array_push($speed,$this->xSpeed,$this->ySpeed);
        return $speed;
    }
   public function toString()
   {
        var_dump($this->getXY());
        echo "speed: ";
        var_dump($this->getSpeed());
//       print_r( $this->getXY());
//       print_r($this->getSpeed());
   }
   public function move()
   {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
   }


}