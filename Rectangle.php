<?php

namespace App;

use App\Shape;

class Rectangle extends Shape
{
    // Properties
    private $area = '20';

    public function getArea()
    {
        return $this->area;
    }
    public function setArea($area)
    {
        $this->area = $area;
    }
}
