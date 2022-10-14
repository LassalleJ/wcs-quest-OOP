<?php
require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane=2,int $maxSpeed=50)
    {
        parent::__construct($nbLane,$maxSpeed);
    }
    public function addVehicle(object $vehicle){
        if ($vehicle instanceof Vehicle){
            $currentVehicle[]=$vehicle;
            $this->setCurrentVehicles($currentVehicle);
        } else {
            echo 'This type of vehicle can\'t go on the residential way.';
        }
    }

}