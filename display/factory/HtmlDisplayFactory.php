<?php
require_once dirname(__FILE__) . '/../../display/HtmlDisplay.php';
require_once dirname(__FILE__) . '/../../framework/factory/DisplayFactory.php';

class HtmlDisplayFactory
{
    private $displays = [];

    public function create($char)
    {
        $display = $this->createDisplay($char);
        $this->registerDisplay($display);
        return $display;
    }

    public function createDisplay($char)
    {
        return new HtmlDisplay($char);
    }

    function registerDisplay(HtmlDisplay $display)
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
