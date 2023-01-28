<?php

namespace App\Context\Products\Domain;

class DefaultProduct extends Product
{
    public function decreaseSellIn()
    {
        $this->sellIn()->setValue($this->sellIn()->value() - 1);

        if ($this->sellIn()->value() < 0) {
            $this->decreaseQuality();
        }
    }

    public function decreaseQuality()
    {
        if ($this->quality()->value() > self::MIN_QUALITY) {
            $this->quality()->setValue($this->quality()->value() - 1);
        }
    }
}