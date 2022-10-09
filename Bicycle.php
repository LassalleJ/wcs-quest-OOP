<?php
require_once 'Vehicle.php';
class Bicycle extends Vehicle{
    public function forward():string {
        $this->currentSpeed = 15;
        return "Go !";
    }
}