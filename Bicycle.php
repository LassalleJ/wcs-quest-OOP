<?php

class Bicycle {
    private string $color;
    private int $currentSpeed;
    private int $nbrSeats = 1;
    private int $nbrWheels = 2;
    public function __construct(string $color) {
        $this->color=$color;
    }


    public function getColor():string {
        return $this->color;
    }
    public function setColor(string $color):void {
        $this->color=$color;
    }
    public function getCurrentSpeed():string{
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed):void {
        if ($currentSpeed >= 0) {
            $this->currentSpeed =  $currentSpeed;
        }
    }
   


    public function forward():string {
        $this->currentSpeed = 15;
        return "Go !";
    }
    public function brake():string {
        $sentence="";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .="Brake !!!";
        }
        $sentence .="I've stopped !";
        return $sentence;
    }
}