<?php

namespace Ducbuiquang\UnitConversions\Tests;

use Ducbuiquang\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }

    /**
     * @test
     */
    public function it_can_convert_kilograms_to_grams()
    {
        $grams = Weight::fromKilograms(1)->toGrams();

        $this->assertEquals(1000, $grams);
    }
}
