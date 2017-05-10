<?php

abstract class AbstractDisplay
{

    private $char;

    /**
     * TextDisplay constructor.
     * @param $char
     */
    public function __construct($char)
    {
        $this->char = $char;
    }

    abstract protected function header();

    private function say()
    {
        echo $this->char;
    }

    abstract protected function footer();

    public function display($count)
    {
        $this->header();
        for ($i = 0; $i < $count; $i++) {
            $this->say();
        }
        $this->footer();
    }
}