<?php

class Shape{
    protected  $color ;

//    public function __construct($color)
//    {
//        $this->color = $color;
//    }
public function setColor($color)
{
    $this->color = $color;
}
    public function show()
    {
        echo "màu :".$this->color;
    }
}
