<?php

abstract class Factory {

    /**
     * Productを作成しProductを登録する
     * @param $owner
     * @return mixed
     */
    public final function create($owner) {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);
        return $product;
    }

    protected abstract function createProduct($owner);

    protected abstract function registerProduct(Product $product);
}
