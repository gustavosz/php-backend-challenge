<?php

namespace App\Context\Products\Domain;

use App\Shared\Domain\ValueObjects\IntValueObject;
use InvalidArgumentException;

class ProductQuality extends IntValueObject
{
    private const MIN_VALUE = 0;
    private const MAX_VALUE = 50;
    private const MAX_VALUE_LEGENDARY = 80;

    private int $maxValue = self::MAX_VALUE;

    public function __construct(int $value, bool $isLegendary = false)
    {
        parent::__construct($value);

        if ($isLegendary) {
            $this->maxValue = self::MAX_VALUE_LEGENDARY;
        }

        $this->ensureIsNotNegative($value);

        $this->ensureIsNotGreaterThanMaxValue($value);
    }

    private function ensureIsNotNegative($value)
    {
        if ($value < self::MIN_VALUE) {
            throw new InvalidArgumentException('Product quality cannot be negative');
        }
    }

    private function ensureIsNotGreaterThanMaxValue($value)
    {
        if ($value > $this->maxValue) {
            throw new InvalidArgumentException('Product quality cannot be greater than ' . $this->maxValue);
        }
    }

    public function setValue(int $value)
    {
        if ($value >= self::MIN_VALUE && $value <= $this->maxValue) {
            parent::setValue($value);
        }
    }
}