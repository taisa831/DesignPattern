<?php
require_once dirname(__FILE__) . "/../framework/Product.php";
require_once dirname(__FILE__) . "/../framework/Factory.php";
require_once dirname(__FILE__) . "/../idcard/IDCard.php";

class IDCardFactory extends Factory
{
    private $products = [];

    protected function createProduct($owner)
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product)
    {
        $this->products[] = $product;
    }
}
