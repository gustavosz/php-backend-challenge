<?php

namespace App\Context\Products\Domain;

class LengendaryProduct extends Product implements ProductInterface
{
    private const QUALITY_DEFAULT = 80;

    public function __construct(ProductName $name)
    {
        $quality = new ProductQuality(self::QUALITY_DEFAULT, true);

        $sellIn = new ProductSellIn(0);

        parent::__construct($name, $quality, $sellIn);
    }

    public function updateSellIn()
    {
        // Does nothing, can't be sold
    }

    public function updateQuality()
    {
        // Does nothing, quality is always 80
    }

    public function tick()
    {
        // Does nothing, can't be sold
    }
}