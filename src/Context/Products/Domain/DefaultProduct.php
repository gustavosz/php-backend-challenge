<?php

namespace App\Context\Products\Domain;

final class DefaultProduct extends Product implements ProductInterface
{
    public function updateSellIn()
    {
        $this->sellIn()->setValue($this->sellIn()->value() - 1);
    }

    public function updateQuality()
    {
        if ($this->quality()->value() > self::MIN_QUALITY) {
            $this->quality()->setValue($this->quality()->value() - 1);

            if ($this->sellIn()->value() < 0) {
                $this->quality()->setValue($this->quality()->value() - 1);
            }
        }
    }

    public function tick()
    {
        $this->updateSellIn();

        $this->updateQuality();
    }
}