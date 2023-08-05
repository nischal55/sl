<?php
class Shape
{
    function area()
    {
    }
    function perimeter()
    {
    }
}
class Circle extends Shape
{
    public $radius = 15;
    public $pi = 3.14;

    function area()
    {
        $area = $this->pi * $this->radius * $this->radius;
    }
}
