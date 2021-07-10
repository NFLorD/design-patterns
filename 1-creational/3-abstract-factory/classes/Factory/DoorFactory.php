<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Door\Door;
use AbstractFactory\Expert\DoorFittingExpert;

interface DoorFactory
{
    public function makeDoor(): Door;
    public function makeFittingExpert(): DoorFittingExpert;
}