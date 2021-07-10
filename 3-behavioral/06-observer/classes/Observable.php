<?php

interface Observable
{
    public function attach(Observer $observer);
}