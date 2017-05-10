<?php
require_once dirname(__FILE__) . '/../../display/TextDisplay.php';
require_once dirname(__FILE__) . '/../../framework/factory/DisplayFactory.php';

class TextDisplayFactory extends DisplayFactory
{
    private $displays = [];

    public function createDisplay($char)
    {
        return new TextDisplay($char);
    }

    function registerDisplay(AbstractDisplay $display)
    {
        $this->displays[] = $display;
    }

    public function displayAll($count) {
        foreach ($this->displays as $display) {
            $display->display($count);
        }
    }
}