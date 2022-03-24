<?php

namespace planetApp;

use PHPUnit\Exception;

class OrbitSvg
{
    public static function generateOrbitSvg(float $orbitRadius, float $planetPosition, string $planetName, float $planetRadius): string
    {

        if ($orbitRadius < 0 || $orbitRadius > 100 || $planetRadius < 0 || $planetRadius > 100 || $planetPosition < 0 || $planetPosition > 100) {
            throw new \Exception('coordinates must be between 0 and 100');
        } else {

            if ($planetName === 'saturn') {
                $ringOneRadius = $planetRadius + 0.5;
                $ringTwoRadius = $planetRadius + 0.2;

                return
                    '<svg class="orbit-svg " width="100%" height="100%">' .
                    '<ellipse  class=orbit id="' . $planetName . '-orbit" cx="50%" cy="50%" rx="' . $orbitRadius . '%" ry="' . $orbitRadius . '%" stroke="white" stroke-width="1" fill="none"/>' .
//                    '<circle id="' . $planetName . '" r="' . $planetRadius . '%" cx="' . $planetPosition . '%" cy="50%" stroke="none" stroke-width="1"/>' .
//                    '<ellipse class="' . $planetName . '-ring" cx="' . $planetPosition . '%" cy="50%" rx="' . $ringOneRadius . '%" ry="' . $planetRadius . '%" fill="none" stroke="red" stroke-width="3"></ellipse>' .
//                    '<ellipse class="' . $planetName . '-ring" cx="' . $planetPosition . '%" cy="50%" rx="' . $ringTwoRadius . '%" ry="' . $planetRadius . '%" fill="none" stroke="red" stroke-width="3"></ellipse>' .
                    '</svg>';

            } elseif ($planetName === 'haumea') {
                $ringOneRadius = $planetRadius + 0.5;
                $humeaWidth = $planetRadius + 0.5;

                return
                    '<svg class="orbit-svg" width="100%" height="100%">' .
                    '<ellipse  class=orbit id="' . $planetName . '-orbit" cx="50%" cy="50%" rx="' . $orbitRadius . '%" ry="' . $orbitRadius . '%" stroke="white" stroke-width="1" fill="none"/>' .
//                    '<ellipse id="' . $planetName . '" cx="' . $planetPosition . '%" cy="50%" rx="' . $planetRadius . '%" ry="' . $humeaWidth . '%" fill="none"></ellipse>' .
//                    '<ellipse class="' . $planetName . '-ring" cx="' . $planetPosition . '%" cy="50%" rx="' . $ringOneRadius . '%" ry="' . $planetRadius . '%" fill="none" stroke="red" stroke-width="3"></ellipse>' .
                    '</svg>';
            } else {
                return
                    '<svg class="orbit-svg" width="100%" height="100%">' .
                    '<ellipse  class=orbit id="' . $planetName . '-orbit" cx="50%" cy="50%" rx="' . $orbitRadius . '%" ry="' . $orbitRadius . '%" stroke="white" stroke-width="1" fill="none"/>' .
//                    '<circle class="planet-svg" id="' . $planetName . '" r="' . $planetRadius . '%" cx="' . $planetPosition . '%" cy="50%" stroke="none" stroke-width="1"/>' .
                    '</svg>';
            }
        }
    }

    public static function generatePlanetSvg(string $planetName, float $planetRadius): string
    {

        if ($planetName === 'saturn') {
            $ringOneRadiusX = $planetRadius + 3;
            $ringOneRadiusY = ($planetRadius - 4) / 2;
            $ringTwoRadiusX = $planetRadius + 1;
            $ringTwoRadiusY = ($planetRadius - 4) / 2;
            $svgWidthHeight = $planetRadius + 40;


            return
                '<svg class="planet-svg" id="' . $planetName . '" width="' . $svgWidthHeight . 'px" height="' . $planetRadius . 'px">' .
                '<circle id="' . $planetName . '" r="15" cx="50%" cy="50%" stroke="none" stroke-width="1"></circle>' .
                '<ellipse class="' . $planetName . '-ring" cx="50%" cy="50%" rx="' . $ringOneRadiusX . 'px" ry="' . $ringOneRadiusY . 'px" fill="none" stroke="red" stroke-width="3"></ellipse>' .
                '<ellipse class="' . $planetName . '-ring" cx="50%" cy="50%" rx="' . $ringTwoRadiusX . 'px" ry="' . $ringTwoRadiusY . 'px" fill="none" stroke="red" stroke-width="3"></ellipse>' .
                '</svg>';

        } elseif ($planetName === 'haumea') {
                $ringOneRadiusX = $planetRadius + 3;
                $ringOneRadiusY = ($planetRadius - 4) / 2;
                $svgWidthHeight = $planetRadius + 40;

                return
                    '<svg class="planet-svg" id="' . $planetName . '" width="' . $svgWidthHeight . 'px" height="' . $planetRadius . 'px">' .
                    '<circle id="' . $planetName . '" r="15" cx="50%" cy="50%" stroke="none" stroke-width="1"></circle>' .
                    '<ellipse class="' . $planetName . '-ring" cx="50%" cy="50%" rx="' . $ringOneRadiusX . 'px" ry="' . $ringOneRadiusY . 'px" fill="none" stroke="red" stroke-width="3"></ellipse>' .
                    '</svg>';
        } else {
            return
                '<svg class="planet-svg" id="' . $planetName . '" width="' . $planetRadius . 'px" height="' . $planetRadius . 'px">' .
                '<circle id="' . $planetName . '" r="15" cx="50%" cy="50%" stroke="none" stroke-width="1"></circle>' .
                '</svg>';
        }
    }
}
