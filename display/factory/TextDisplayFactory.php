<?php
require_once dirname(__FILE__) . '/../../display/TextDisplay.php';
require_once dirname(__FILE__) . '/../../framework/factory/DisplayFactory.php';

class TextDisplayFactory extends DisplayFactory
{
    public function createDisplay($char)
    {
        return new TextDisplay($char);
    }

    function registerDisplay(AbstractDisplay $display)
    {
        $this->displays[] = $display;
    }
}