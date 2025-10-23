<?php

namespace App;

class Shape
{
    // Properties
    private $name = 'Shape'; //default values
    private $size = '20';

    // Constants
    public const MINCHARS = 6;

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
