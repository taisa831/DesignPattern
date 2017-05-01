<?php

class IDCard extends Product
{
    private $owner;

    public function __construct($owner)
    {
        $this->owner = $owner;
    }

    public function useto()
    {
        print($this->owner . "のカードを作ります\n");
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
}