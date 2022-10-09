<?php


class Vehicle 
{
    public const ALLOWED_ENERGIES =   [
        'fuel',
        'electric',
    ];
    private string $color;
    private int $nbrWheels;
    protected int $currentSpeed;
    private int $nbrSeats;
    private string $energySource;
    private int $energyCurrentLevel=0;
    private bool $isEngineOn=false;

    
    public function __construct(string $color,  int $nbrSeats, int $nbrWheels,string $energySource) {
        $this->color=$color;
        $this->nbrSeats = $nbrSeats;
        $this->nbrWheels = $nbrWheels;
        $this->setEnergySource($energySource);
    }

    // GETTERS & SETTERS

    public function setEnergySource(string $energySource)
    {
        if (in_array($energySource, self::ALLOWED_ENERGIES)) {
            $this->energySource = $energySource;
        }
    return $this;
    }


    public function getEnergyCurrentLevel():int {
        return $this->energyCurrentLevel;
    }
    public function setEnergyCurrentLevel (int $energyCurrentLevel):void {
        $this->energyCurrentLevel = $energyCurrentLevel;
    }      


    public function turnOn():string{
        $this->isEngineOn=true;
        return "The engine is on, we're ready to go ! <br>";
    }
    public function turnOff():string{
        $this->isEngineOn=false;
        return "The engine is now off.<br>";
    }


    public function getColor():string {
        return $this->color;
    }
    public function setColor(string $color):void {
        $this->color=$color;
    }


    public function getCurrentSpeed():int{
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed):void {
        if ($currentSpeed >= 0) {
            $this->currentSpeed =  $currentSpeed;
        }
    }


    public function getNbrWheels():int {
        return $this->nbrWheels;
    }
    public function setNbrWheels(int $nbrWheels):void {
        $this->nbrWheels = $nbrWheels;
    }


    public function getNbrSeats():int {
        return $this->nbrSeats;
    }
    public function setNbrSeats(int $nbrSeats):void {
        $this->nbrSeats = $nbrSeats;
    }

    // MOVING FROWARD AND BRAKE FUNCTIONS

    public function goForward():string{
        $sentence="";
        if ($this->energyCurrentLevel <= 0){
            $sentence="You need to refill your car energy.<br>";
        } else if (!$this->isEngineOn) {
            $sentence="You may need to turn on the engine first !<br>";
        } else {
            $sentence="Let's go ! We're moving !<br>";
            $this->currentSpeed=20;
            $this->energyCurrentLevel--;
        }
        return $sentence;
        }   
   
    public function brake():string{
        $sentence="";
        while ($this->currentSpeed > 0) {
            $sentence .="Braking ! Hold tight !<br>";
            $this->currentSpeed=$this->currentSpeed-5;
        }
        $sentence .="I've stopped.<br>";
        return $sentence;
    }
}