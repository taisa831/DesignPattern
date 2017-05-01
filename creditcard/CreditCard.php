<?php
require_once dirname(__FILE__) . "/../framework/Product.php";

class CreditCard extends Product
{
    private $owner;

    public function __construct($ownner)
    {
        $this->owner = $ownner;
    }

    public function useto()
    {
        print($this->owner . "のクレジットカードを作ります\n");
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
}