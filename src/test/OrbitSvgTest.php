<?php

namespace PlanetApp\Test;
use PHPUnit\Framework\TestCase;
use PHPUnit\Util\Exception;
use PlanetApp\OrbitSvg;

class OrbitSvgTest extends TestCase
{
    public function testSuccessGenerateOrbitSvg()
    {
        $planetName = 'earth';
        $planetRadius = '10';
        $planetPosition = '100';
        $orbitRadius = '50';

        $expectedOutput = '<svg class="orbit-svg" width="100%" height="100%"><ellipse  class=orbit id="earth-orbit" cx="50%" cy="50%" rx="50%" ry="50%" stroke="white" stroke-width="1" fill="none"/><circle class="planet-svg" id="earth" r="10%" cx="100%" cy="50%" stroke="none" stroke-width="1"/></svg>'
        ;
        $actualOutput = OrbitSvg::generateOrbitSvg($orbitRadius, $planetPosition, $planetName, $planetRadius);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testFailureGenerateOrbitSvg()
    {
        $planetName = 'earth';
        $planetRadius = '1000';
        $planetPosition = '1000';
        $orbitRadius = '50346345';

        $this->expectException(\Exception::class);
        OrbitSvg::generateOrbitSvg($orbitRadius, $planetPosition, $planetName, $planetRadius);
    }
}