<?php

use PHPUnit\Framework\TestCase;
//use PlanetApp\Planet;

require __DIR__ . '/../Planet.php';

class PlanetTest extends TestCase
{
    public function testSuccessCreateCardHtml()
    {
        $Planet = new Planet();
        $Planet->name = 'Uranus';
        $Planet->type = 'Ice giant';
        $Planet->image_src = 'pretend-url';

        $expectedOutput = '<div class="planet-card"> <img src="pretend-url"> <div class="planet-card-info-container"> <h2>Uranus</h2> <h3>Ice giant</h3> </div> </div> ';
        $actualOutput = $Planet->createCardHtml();
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}