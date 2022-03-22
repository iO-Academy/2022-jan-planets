<?php

namespace planetApp;

class OrbitSvg
{


    public static function generateOrbitSvg(string $orbitRadius, string $planetPosition, string $planetName, string $planetRadius): string
    {
        return '<svg class="orbit-svg" width="100%" height="100%">' .
            '<ellipse  class=orbit id="' . $planetName .  '-orbit" cx="50%" cy="50%" rx="' . $orbitRadius . '" ry="' . $orbitRadius . '" stroke="white" stroke-width="1" fill="none"/>' .
                '<circle id="' . $planetName . '" r="' . $planetRadius . '" cx="' . $planetPosition . '" cy="50%" stroke="none" stroke-width="1"/>' .
        '</svg>';
    }

}