<?php

require_once 'Vehicle.php';

class Truck extends Vehicle 
{
    private int $loadingCapacity;
    private int $currentLoad=0;

    public function __construct(
        string $color,  
        int $nbrSeats, 
        int $nbrWheels,
        string $energySource,
        int $loadingCapacity
        ) 
        {
            parent::__construct($color,$nbrSeats,$nbrWheels,$energySource);
            $this->loadingCapacity=$loadingCapacity;
        }
    
    // GETTERS & SETTERS

    public function getCurrentLoad():string{
        if ($this->currentLoad<$loadingCapacity) {
            return 'In filling';
        } else {
            return 'Full';
        }
    }
    public function loadTruck(int $load):string {
        if ($this->currentLoad+$load<$this->loadingCapacity) {
            $this->currentLoad+=$load;
            return 'Your truck has been loaded. It now contains '.$this->currentLoad.' tons of merchandise.<br>';
        } else {
            return 'Your truck can\'t carry that much.<br>';
        }
    }
    public function unloadTruck(int $load):string {
        if ($this->currentLoad === 0) {
            return 'Your truck is empty.<br>';
        } else if ($load > $this->currentLoad) {
            return 'We removed '.$this->currentLoad. ' tons from your truck. It now contains nothing.<br>';
            $this->currentLoad=0;
        } else {
            $this->currentLoad=$this->currentLoad-$load;
            return 'We removed '.$load.' tons from your truck. It now contains '.$this->currentLoad.' tons.<br>';
        }
    }
        
}

