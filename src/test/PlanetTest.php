<?php

namespace PlanetApp\Test;
use PHPUnit\Framework\TestCase;
use PlanetApp\Planet;

class PlanetTest extends TestCase
{
    public function testSuccessCreateCardHtml()
    {
        $Planet = new Planet();
        $Planet->setName('Uranus');
        $Planet->setType('Ice giant');
        $Planet->setImageSrc('pretend-url');

        $expectedOutput = '
        <div class="planet-card">
            <img src="pretend-url">
            <div class="planet-card-info-container">
                <h2>Uranus</h2>
                <h3>Ice giant</h3>
            </div>
        </div>
        ';
        $actualOutput = $Planet->createCardHtml();
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}