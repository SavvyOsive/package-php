<?php


namespace Savvyosive\UnitConversions;


class Temperature
{
    public static function fromCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(
        public float $celsius
    ) {
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) +32;
    }
}
