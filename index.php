<?php
require_once 'Vehicle.php';
require_once 'bicycle.php';
require_once 'car.php';
require_once 'truck.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$myTruck = new Truck('orange', 3, 'electric', 27);
$myTruck->setCurrentStorage (12);
var_dump($myTruck);
echo "<br>";
echo $myTruck->fillingRate();