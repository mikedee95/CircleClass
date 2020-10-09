<?php


class Circle
{
    protected $radius;
    protected $color;

    public function __construct($_radius,$_color){
        $this->radius = $_radius;
        $this->color = $_color;
    }

    public function getRadius(){
        return $this->radius;
    }

    public function setRadius($_radius)
    {
        $this->radius = $_radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($_color)
    {
        $this->color = $_color;
    }

    public function calculateArea()
    {
        return pow($this->radius,2)*pi();
    }

    public function calculatePerimeter()
    {
        return 2*pi()*$this->radius;
    }
}