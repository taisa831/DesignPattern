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

    function registerDisplay(AbstractDisplay $display)
    {
        $this->displays[] = $display;
    }

    public function displayAll($count)
    {
        foreach ($this->displays as $display) {
            $display->display($count);
        }
    }
}