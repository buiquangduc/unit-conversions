<?php

namespace Ducbuiquang\UnitConversions\Tests;

use Ducbuiquang\UnitConversions\Length;
use PHPUnit\Framework\TestCase;

class LengthTest extends TestCase
{
    /** @test */
    public function it_can_convert_meters_to_kilometers()
    {
        $kilometers = Length::fromMeters(1000)->toKilometers();

        $this->assertEquals(1, $kilometers);
    }

    /** @test */
    public function it_can_convert_meters_to_mile()
    {
        $miles = Length::fromMeters(1000)->toMiles();

        $this->assertEquals(0.621371, $miles);
    }
}
