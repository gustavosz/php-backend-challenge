<?php

namespace App\Context\Products\Domain;

abstract class Product
{
    protected const MIN_QUALITY = 0;
    protected const MAX_QUALITY = 50;

    private ProductName $name;
    private ProductQuality $quality;
    private ProductSellIn $sellIn;

    public function __construct(ProductName $name, ProductQuality $quality, ProductSellIn $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    abstract public function updateSellIn();
    abstract public function updateQuality();

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