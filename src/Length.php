<?php

namespace Ducbuiquang\UnitConversions;

class Length
{
    private $meters;

    public function __construct(float $meters)
    {
        $this->meters = $meters;
    }

    public static function fromMeters(float $meters): self
    {
        return new static($meters);
    }

    public function toKilometers(): float
    {
        return $this->meters * 0.001;
    }

    public function toMiles(): float
    {
        return $this->meters * 0.000621371;
    }
}
