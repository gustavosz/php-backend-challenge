<?php

namespace App\Context\Products\Domain;

abstract class Product
{
    protected const MIN_QUALITY = 0;

    private ProductName $name;
    private ProductQuality $quality;
    private ProductSellIn $sellIn;

    public function __construct(ProductName $name, ProductQuality $quality, ProductSellIn $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    abstract public function decreaseSellIn();
    abstract public function decreaseQuality();

    final public function tick()
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