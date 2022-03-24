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
             <div id="Uranus" class="planet-card hidden-on-desktop shown-on-desktop">
                <img src="images/pretend-url"/>
                <div class="planet-card-info-container">
                    <h2>Uranus</h2>
                    <h3>Ice giant</h3>
                </div>
            </div>
           ';

        $actualOutput = $Planet->createCardHtml();
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessDisplayPlanetImage()
    {
        $Planet = new Planet();
        $Planet->setName('Uranus');
        $Planet->setImageSrc('pretend-url');

        $expectedOutput = '<img class="Uranus desktop " src="images/pretend-url" alt="Uranus">';

        $actualOutput = $Planet->displayPlanetImage();
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}