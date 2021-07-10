<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Door\Door;
use AbstractFactory\Door\IronDoor;
use AbstractFactory\Expert\DoorFittingExpert;
use AbstractFactory\Expert\Welder;

// Iron door factory to get iron door and the relevant fitting expert
class IronDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}