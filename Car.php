<?php

class Car
{
   private int $nbWheel;
   private int $currentSpeed;
   private string $color;
   private int $nbSeats;
   private string $engineType;
   private int $gasLevel;

    public function __construct(string $color, int $nbSeats, string $engineType) {
        $this->color = $color;
        $this->nbSeat = $nbSeats;
        $this->engineType = $engineType;
    }

    public function start():string {
        $this->currentSpeed=15;
        return "Car stared";
    }

    public function forward():string {
        $this->currentSpeed=50;
        return "Car moving forward at regular speed";
    }

    
    public function brake():string {
    
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Slow down !!!";
        }
        $sentence .= "......I'm a car and I'm stopped !";
        return $sentence;
    }

    public function getNbWheels(): int
    {
    return $this->nbWheels;
    }
    public function getCurrentSpeed(): int
    {
    return $this->currentSpeed;
    }
    public function getColor(): string
    {
    return $this->color;
    }
    public function getNbSeats(): int
    {
    return $this->nbSeats;
    }
    public function getEngineType(): string
    {
    return $this->engineType;
    }
    public function getGasLevel(): int
    {
    return $this->gasLevel;
    }






}
