<?php

namespace Savvyosive\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Savvyosive\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_lbs()
    {
        $lbs = Weight::fromkilograms(100)->toLbs();
        //$lbs = (new Weight(56))->toLbs();

        $this->assertEquals(220.46, $lbs);
    }
}
