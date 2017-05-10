<?php

abstract class DisplayFactory
{
    public function create($char) {
        $display = $this->createDisplay($char);
        $this->registerDisplay($display);
        return $display;
    }

    abstract function createDisplay($char);

    abstract function registerDisplay(AbstractDisplay $display);
}