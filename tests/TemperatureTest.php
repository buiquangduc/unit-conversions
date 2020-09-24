<?php

namespace Ducbuiquang\UnitConversions\Tests;

use Ducbuiquang\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }

    /** @test */
    public function it_can_convert_celsius_to_Kelvin()
    {
        $kelvin = Temperature::fromCelsius(100)->toKelvin();

        $this->assertEquals(373.15, $kelvin);
    }
}
