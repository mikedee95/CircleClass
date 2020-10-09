<?php
include_once 'Circle.php';

class Cylinder extends Circle
{
    protected $height;

    public function __construct($_radius,$_color, $_height)
    {
        parent::__construct($_radius,$_color);
        $this->height = $_height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea()*2 + parent::calculatePerimeter()* $this->height;
    }
}