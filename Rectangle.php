<?php

namespace App;

use App\Shape;

class Rectangle extends Shape
{
    // Properties
    private $area = '20';
    private $width = '20';
    private $height = '20';

    public function getArea()
    {
        return $this->area;
    }
    public function calculateArea()
    {
        $this->area = $this->width * $this->height;
    }
}
