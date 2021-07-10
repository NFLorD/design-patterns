<?php

class DefaultText implements WritingState
{
    public function write(string $words)
    {
        echo $words;
    }
}