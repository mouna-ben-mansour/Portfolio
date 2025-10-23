<?php

namespace App;

require_once 'vendor/autoload.php';

$rectangle = new Rectangle();
$shape = new Shape();
echo $shape->calculateArea();
echo $shape->calculatePerimeter();
echo $shape->draw('rectangle');
//$makeShape = new MakeShape(); // give me error because we cannot instantiate un object from it
echo '<pre>';
print_r($rectangle);
echo '</pre>';
