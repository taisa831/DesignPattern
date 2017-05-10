<?php

abstract class DisplayFactory
{
    protected $displays = [];

    public function create($char)
    {
        $display = $this->createDisplay($char);
        $this->registerDisplay($display);
        return $display;
    }

    abstract function createDisplay($char);

    abstract function registerDisplay(AbstractDisplay $display);

    public function displayAll($count)
    {
        foreach ($this->displays as $display) {
            $display->display($count);
        }
    }
}