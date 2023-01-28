<?php

namespace App\Context\Products\Domain;

class Ticket extends Product implements ProductInterface
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

        if ($this->sellIn()->value() < 0) {
            $this->quality()->setValue(0);
        }
    }

    public function tick()
    {
        $this->updateSellIn();

        $this->updateQuality();
    }
}