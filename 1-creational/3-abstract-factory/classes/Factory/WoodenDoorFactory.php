<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Door\Door;
use AbstractFactory\Door\WoodenDoor;
use AbstractFactory\Expert\Carpenter;
use AbstractFactory\Expert\DoorFittingExpert;

// Wooden factory to return carpenter and wooden door
class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}