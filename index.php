<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Vehicle.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'HighWay.php';


$twingo=new Car ('green',5,4,'fuel');

$tesla=new Car ('white',5,4,'electric');
$bike=new Bicycle('red',1,2, 'electric');
$camion=new Truck('dark', 3, 12, 'fuel', 10);
try {
    $tesla->start();
} catch (Exception $e){
    echo $e->getMessage().'<br>';
    $tesla-> setParkBrake((false));
} finally {
    echo 'Ma voiture roule comme un donut';
}
