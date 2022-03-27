<?php
require_once 'Vehicle.php';
require_once 'bicycle.php';
require_once 'car.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);