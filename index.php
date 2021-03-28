<?php

require_once "Bicycle.php";
require_once "Car.php";
//instanciation bicycle
$rockrider = new Bicycle("yellow");
$tornado = new Bicycle("red");
getColor($tornado,"bicycle");
getColor($rockrider,"bicycle");
$rockrider->forward();
getCurrentSpeed($rockrider);
$rockrider->brake();
getCurrentSpeed($rockrider);

//instanciation cars
$peugeot =  new Car ("blue",6, "Diesel");
getColor($peugeot,"car");
$peugeot->forward();
getCurrentSpeed($peugeot);

//fonctions génériques
function getColor(object $object,string $type):void {
    echo ("This " . $type  . " is "  .  $object->getColor())   ."\n";
}

function getCurrentSpeed(object $object):void {
    echo $object->brake() ."\n";
}
