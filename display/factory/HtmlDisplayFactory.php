<?php
require_once dirname(__FILE__) . '/../../display/HtmlDisplay.php';
require_once dirname(__FILE__) . '/../../framework/factory/DisplayFactory.php';

class HtmlDisplayFactory extends DisplayFactory
{

    public function createDisplay($char)
    {
        return new HtmlDisplay($char);
    }

    function registerDisplay(AbstractDisplay $display)
    {
        $this->displays[] = $display;
    }

}