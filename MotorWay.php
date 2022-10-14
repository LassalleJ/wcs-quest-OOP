<?php
require_once 'HighWay.php';
final class MotorWay extends HighWay
{
    public function __construct(int $nbLane=4,int $maxSpeed=130)
    {
        parent::__construct($nbLane,$maxSpeed);
    }

    public function addVehicle(object $vehicle){
        if (($vehicle instanceof Car) || ($vehicle instanceof Truck)){
            $this->setCurrentVehicles($vehicle);
        } else {
            echo 'This type of vehicle can\'t go on the motorway.';
        }
    }
}