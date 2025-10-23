<?php

namespace App;

abstract class MakeShape
{
    abstract public function calculateArea();
    abstract public function calculatePerimeter();
    abstract public function draw($shapeName);
}
