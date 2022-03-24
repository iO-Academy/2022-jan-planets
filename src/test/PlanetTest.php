<?php

namespace PlanetApp\Test;
use PHPUnit\Framework\TestCase;
use PlanetApp\Planet;

class PlanetTest extends TestCase
{
    public function testSuccessCreateCardHtml()
    {
        $Planet = new Planet();
        $Planet->setId(1);
        $Planet->setName('Uranus');
        $Planet->setType('Ice giant');
        $Planet->setImageSrc('pretend-url');

        $expectedOutput = '
        <div class="planet-card" id="planet-1">
            <a href="./planet.php?planetId=1"><img src="pretend-url"></a>
            <div class="planet-card-info-container">
                <a href="./planet.php?planetId=1"><h2>Uranus</h2></a>
                <h3>Ice giant</h3>
            </div>
        </div>
        ';
        $actualOutput = $Planet->createCardHtml();
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}