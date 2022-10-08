<?php

class Car 
{
private int $nbrWheels=4;
private int $currentSpeed=0;
private string $color;
private int $nbrSeats;
private string $energySource;
private int $energyCurrentLevel=0;
private bool $isEngineOn=false;

// Constructor

public function __construct (string $color, int $nbrSeats, string $energySource) {
    $this->color = $color;
    $this->nbrSeats = $nbrSeats;
    $this->energySource = $energySource;    
}

// Getters & Setters

public function getNbrWheels():int {
    return $this->nbrWheels;
}
public function setNbrWheels(int $nbrWheels):void {
    $this->nbrWheels = $nbrWheels;
}
public function getEnergyCurrentLevel():int {
    return $this->energyCurrentLevel;
}
public function setEnergyCurrentLevel (int $energyCurrentLevel):void {
    $this->energyCurrentLevel = $energyCurrentLevel;
}
public function getCurrentSpeed():int {
    return $this->currentSpeed;
}
public function setCurrentSpeed (int $currentSpeed):void {
    $this->currentSpeed = $currentSpeed;
}
public function turnOn():string{
    $this->isEngineOn=true;
    return "The engine is on, we're ready to go !";
}
public function turnOff():string{
    $this->isEngineOn=false;
    return "The engine is now off.";
}

// Move forward and brake functions

public function goForward():string{
    $sentence="";
    if ($this->energyCurrentLevel <= 0){
        $sentence="You need to refill your car energy.";
    } else if (!$this->isEngineOn) {
        $sentence="You may need to turn on the engine first !";
    } else {
        $sentence="Let's go ! We're moving !";
        $this->currentSpeed=20;
        $this->energyCurrentLevel--;
    }
    return $sentence;
    }   

public function brake():string{
    $sentence="";
    while ($this->currentSpeed > 0) {
        $sentence .="Braking ! Hold tight !";
        $this->currentSpeed=$this->currentSpeed-5;
    }
    $sentence .="I've stopped.";
    return $sentence;
}

}