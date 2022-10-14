<?php
require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane=1,int $maxSpeed=10)
    {
        parent::__construct($nbLane,$maxSpeed);
    }
    public function addVehicle(object $vehicle){
        if ($vehicle instanceof Bicycle){
            $currentVehicle[]=$vehicle;
            $this->setCurrentVehicles($currentVehicle);
        } else {
            echo 'This type of vehicle can\'t go on the pedestrian way.';
        }
    }
}