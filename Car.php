<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    private bool $hasParkBrake=true;

    public function setParkBrake(bool $boolean): void
    {
        $this->hasParkBrake = $boolean;
    }

    public function getParkBrake()
    {
        $this->hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception ('You forgot the handbrake');
        }
        $this->goForward();

    }
}