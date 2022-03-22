<?php

namespace planetApp;

class OrbitSvg
{

    public static function generateOrbitSvg(string $orbitRadius, string $planetPosition, string $planetName, float $planetRadius): string
    {
        if($planetName === 'saturn') {
            $ringOneRadius = $planetRadius + 0.5;
            $ringTwoRadius = $planetRadius + 0.2;

            return
                '<svg class="orbit-svg " width="100%" height="100%">' .
                '<ellipse  class=orbit id="' . $planetName . '-orbit" cx="50%" cy="50%" rx="' . $orbitRadius . '" ry="' . $orbitRadius . '" stroke="white" stroke-width="1" fill="none"/>' .
                '<circle id="' . $planetName . '" r="' . $planetRadius . '%" cx="' . $planetPosition . '" cy="50%" stroke="none" stroke-width="1"/>' .
                '<ellipse class="' . $planetName . '-ring" cx="' . $planetPosition . '" cy="50%" rx="' . $ringOneRadius . '%" ry="' . $planetRadius . '%" fill="none" stroke="red" stroke-width="3"></ellipse>' .
                '<ellipse class="' . $planetName . '-ring" cx="' . $planetPosition . '" cy="50%" rx="' . $ringTwoRadius . '%" ry="' . $planetRadius . '%" fill="none" stroke="red" stroke-width="3"></ellipse>' .
                '</svg>';

        } elseif ($planetName === 'haumea') {
            $ringOneRadius = $planetRadius + 0.5;
            $humeaWidth = $planetRadius + 0.5;

            return
                '<svg class="orbit-svg" width="100%" height="100%">' .
                '<ellipse  class=orbit id="' . $planetName . '-orbit" cx="50%" cy="50%" rx="' . $orbitRadius . '" ry="' . $orbitRadius . '" stroke="white" stroke-width="1" fill="none"/>' .
                '<ellipse id="' . $planetName . '" cx="' . $planetPosition . '" cy="50%" rx="' . $planetRadius . '%" ry="' . $humeaWidth . '%" fill="none"></ellipse>' .
                '<ellipse class="' . $planetName . '-ring" cx="' . $planetPosition . '" cy="50%" rx="' . $ringOneRadius . '%" ry="' . $planetRadius . '%" fill="none" stroke="red" stroke-width="3"></ellipse>' .
                '</svg>';
        } else {
            return '<svg class="orbit-svg" width="100%" height="100%">' .
                '<ellipse  class=orbit id="' . $planetName . '-orbit" cx="50%" cy="50%" rx="' . $orbitRadius . '" ry="' . $orbitRadius . '" stroke="white" stroke-width="1" fill="none"/>' .
                '<circle class="planet-svg" id="' . $planetName . '" r="' . $planetRadius . '%" cx="' . $planetPosition . '" cy="50%" stroke="none" stroke-width="1"/>' .
                '</svg>';
        }
    }

}