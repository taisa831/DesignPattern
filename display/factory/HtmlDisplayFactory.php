<?php
require_once dirname(__FILE__) . '/../../display/HtmlDisplay.php';
require_once dirname(__FILE__) . '/../../framework/factory/DisplayFactory.php';

class HtmlDisplayFactory extends DisplayFactory
{
    private $displays = [];

    public function createDisplay($char) {
        return new HtmlDisplay($char);
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