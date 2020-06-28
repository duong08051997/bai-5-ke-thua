<?php

include_once ("Shape.php");

class Triangle extends Shape{
    protected $side1 ;
    protected $side2 ;
    protected $side3;

//    public function __construct($name)
//    {
//        parent::__construct($name);
//    }

    public function setSide($side1,$side2,$side3)
    {
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 =$side3;
    }
    public function test()
    {
        if ($this->side1+$this->side2> $this->side3 && $this->side1+ $this->side3 > $this->side2 && $this->side2 + $this->side3 > $this->side1 ) {
        return true;
        }else{
            echo "không phải tam giác ";
        }
    }

    public function getArea()
    {
        if ($this->test()) {
            return pow($this->side1,2)*sqrt(3)/4;
        }




    }
    public function getPerimeter()
    {
        if ($this->test()) {
        return $this->side1 + $this->side2 + $this->side3;
        }
    }
    public function toString()
    {
        echo $this->show();
        echo "<br>";
       echo "độ dài cạnh 1: ".$this->side1;
       echo "<br>";
       echo "độ dài cạnh 2: ".$this->side2;
        echo "<br>";
       echo "độ dài cạnh 3: ".$this->side3;
        echo "<br>";
       echo "diện tích: ".$this->getArea();
        echo "<br>";
       echo "chu vi: ".$this->getPerimeter();
        echo "<br>";
    }
}
