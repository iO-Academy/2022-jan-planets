<?php

namespace PlanetApp\Test;
use PHPUnit\Framework\TestCase;
use PlanetApp\Planet;

class PlanetTest extends TestCase
{
    public function testSuccessCreateCardHtml()
    {
        $planet = new Planet();
        $planet->setName('Uranus');
        $planet->setType('Ice giant');
        $planet->setImageSrc('pretend-url');

        $expectedOutput = '
        <div class="planet-card">
            <img src="pretend-url" alt="Uranus">
            <div class="planet-card-info-container">
                <h2>Uranus</h2>
                <h3>Ice giant</h3>
            </div>
        </div>
        ';
        $actualOutput = $planet->createCardHtml();
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}