<?php

class Bicycle
{
private string $color;
private int $currentSpeed;
private int $nbSeats=1;
private int $nbWheels=2;


public function forward():string {
    $this->currentSpeed=15;
    return "go";
}

public function brake():string {
    
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'ma bicycle and I'm stopped !";
    return $sentence;
}
public function __construct(string $color)
{
    $this->color=$color;
}
public function getColor(): string
{
return $this->color;
}

public function getCurrentSpeed(): int
{
return $this->currentSpeed;
}
}
