<?php

namespace App\Context\Products\Domain;

use App\Shared\Domain\ValueObjects\IntValueObject;
use InvalidArgumentException;

class ProductQuality extends IntValueObject
{
    private const MIN_VALUE = 0;
    private const MAX_VALUE = 50;

    public function __construct(int $value)
    {
        parent::__construct($value);

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
        if ($value > self::MAX_VALUE) {
            throw new InvalidArgumentException('Product quality cannot be greater than ' . self::MAX_VALUE);
        }
    }
}