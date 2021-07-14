<?php

namespace Savvyosive\UnitConversions;

class Weight
{
    public static function fromkilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(
        public float $kilograms
    ) {
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.2046;
    }
}
