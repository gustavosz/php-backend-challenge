<?php

namespace App\Context\Products\Domain;

final class BrandyDrink extends Product implements ProductInterface
{
    public function updateSellIn()
    {
        $this->sellIn()->setValue($this->sellIn()->value() - 1);
    }

    public function updateQuality()
    {
        $this->quality()->setValue($this->quality()->value() + 1);

        if ($this->sellIn()->value() < 10) {
            $this->quality()->setValue($this->quality()->value() + 1);
        }

        if ($this->sellIn()->value() < 5) {
            $this->quality()->setValue($this->quality()->value() + 1);
        }
    }

    public function tick()
    {
        $this->updateSellIn();

        $this->updateQuality();
    }
}