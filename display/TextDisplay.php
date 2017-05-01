<?php
require_once dirname(__FILE__) . '/../framework/AbstractDisplay.php';

class TextDisplay extends AbstractDisplay
{
    protected function header()
    {
        echo "=========header=========\n";
    }

    protected function footer()
    {
        echo "\n=========footer==========\n";
    }
}
