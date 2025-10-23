<?php

namespace App;

use App\MakeShape;

class Shape extends MakeShape
{
    // Properties
    private $name = 'generic'; //default values
    private $size = '20';
    private $width = 20;
    private $height = 20;

    // Constants
    public const MINCHARS = 6;

    public function calculateArea()
    {
        return  $this->width * $this->height;
    }

    public function calculatePerimeter()
    {
        return 2 * ( $this->width * $this->height);
    }

    public function draw($name)
    {
        echo "Drawing a " . $name . " shape\n";
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSize()
    {
        return $this->size;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }

    final public function getInitials()
    {
        if (strlen($this->name) > self::MINCHARS) {
            return strtoupper(substr($this->name, 0, 2));
        } else {
            return 'Shape name must be longer than ' . self::MINCHARS . ' characters';
        }
    }
}
