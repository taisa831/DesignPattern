<?php
require_once dirname(__FILE__) . "/../framework/Factory.php";
require_once dirname(__FILE__) . "/../creditcard/CreditCard.php";

class CreditCardFactory extends Factory
{
    private $products = [];

    protected function createProduct($owner)
    {
        return new CreditCard($owner);
    }

    protected function registerProduct(Product $product)
    {
        $this->products[] = $product;
    }
}