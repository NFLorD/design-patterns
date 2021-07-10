<?php

namespace AbstractFactory\Door;

class IronDoor implements Door
{
    public function getDescription()
    {
        echo 'I am an iron door';
    }
}