<?php

namespace PlanetApp\Test;
use PHPUnit\Framework\TestCase;
use PlanetApp\Planet;

class PlanetTest extends TestCase
{
    public function testSuccessCreateCardHtml()
    {
        $planet = new Planet();
        $planet->setId(1);
        $planet->setName('Uranus');
        $planet->setType('Ice giant');
        $planet->setImageSrc('pretend-url');

        $expectedOutput = '
        <div class="planet-card" id="planet-1">
            <a href="./planet.php?planetId=1"><img src="images/pretend-url" alt="Uranus"></a>
            <div class="planet-card-info-container">
                <a href="./planet.php?planetId=1"><h2>Uranus</h2></a>
                <h3>Ice giant</h3>
                <a class="learn-more-button" href="./planet.php?planetId=1">Learn more about Uranus</a>
            </div>
        </div>
        ';
        $actualOutput = $planet->createCardHtml();
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}