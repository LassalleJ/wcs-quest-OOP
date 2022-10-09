<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Vehicle.php';
require_once 'Truck.php';


$twingo=new Car ('green',5,4,'electric');
var_dump($twingo);
$camion=new Truck('dark', 3, 12, 'fuel', 10);
var_dump($camion);
echo $camion->turnOn();
echo $camion->goForward();
echo $camion->setEnergyCurrentLevel(50);
echo $camion->loadTruck(9);
echo $camion->goForward();
echo $camion->brake();
echo $camion->unloadTruck(5);
echo $camion->unloadTruck(5);
echo $camion->turnOff();