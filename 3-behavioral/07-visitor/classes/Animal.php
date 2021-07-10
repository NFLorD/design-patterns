<?php

// Visitee
interface Animal
{
    public function accept(AnimalOperation $operation);
}