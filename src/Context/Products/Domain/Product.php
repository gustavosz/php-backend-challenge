<?php

namespace App\Context\Products\Domain;

abstract class Product
{
    private ProductName $name;
    private ProductQuality $quality;
    private ProductSellIn $sellIn;

    public function __construct(ProductName $name, ProductQuality $quality, ProductSellIn $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    abstract public function decreaseSellIn(): void;
    abstract public function decreaseQuality(): void;

    protected function tick()
    {
        $this->decreaseSellIn();
        $this->decreaseQuality();
    }

    public function name(): ProductName
    {
        return $this->name;
    }

    public function quality(): ProductQuality
    {
        return $this->quality;
    }

    public function sellIn(): ProductSellIn
    {
        return $this->sellIn;
    }
}