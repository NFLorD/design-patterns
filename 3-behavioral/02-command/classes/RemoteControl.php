<?php

// Invoker
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}