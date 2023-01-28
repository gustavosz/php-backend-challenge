<?php

namespace App\Context\Products\Domain;

class Coffee extends Product implements ProductInterface
{
    public function updateSellIn()
    {
        $this->sellIn()->setValue($this->sellIn()->value() - 1);
    }

    public function updateQuality()
    {
        $this->quality()->setValue($this->quality()->value() - 2);

        if ($this->sellIn()->value() < 0) {
            $this->quality()->setValue($this->quality()->value() - 2);
        }
    }

    public function tick()
    {
        $this->updateSellIn();

        $this->updateQuality();
    }
}