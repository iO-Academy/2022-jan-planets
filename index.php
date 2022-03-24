<?php

use PlanetApp\OrbitSvg;
use PlanetApp\PlanetHydrator;

require 'vendor/autoload.php';

$dsn = 'mysql:host=db; dbname=planet_collection';
$dbName = 'planet_collection';
$username = 'root';
$password = 'password';

$db = new PDO($dsn, $username, $password);
$allPlanets = PlanetHydrator::getPlanets($db);

?>

<!DOCTYPE html>

<html lang="en-GB">
<head>
    <title>Planet Plinky Plonk</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <h1>Planet Plinky Plonk</h1>
</header>
<main>
    <div class="title-image-container">
    <img id="title-image" src="planet-plinky-plonk.png" alt="Planet Plinky Plonk"/>
    </div>
    <img class="sun-image mobile" src="sun.png" alt="Sun"/>

    <h1>Planet Plinky Plonk</h1>

    <div class="solar-system-container">
        <img class="sun-image desktop" src="sun.png" alt="Sun"/>
        <?= OrbitSvg::generateOrbitSvg('48', '98', 'senda', '1'); ?>
        <?= OrbitSvg::generateOrbitSvg('46', '4', 'eris', '1'); ?>
        <?= OrbitSvg::generateOrbitSvg('44', '94', 'gonggong', '1'); ?>
        <?= OrbitSvg::generateOrbitSvg('42', '8', 'makemake', '1'); ?>
        <?= OrbitSvg::generateOrbitSvg('38', '88', 'quaoar', '1'); ?>
        <?= OrbitSvg::generateOrbitSvg('36', '12', 'haumea', '1'); ?>
        <?= OrbitSvg::generateOrbitSvg('34', '84', 'pluto', '1'); ?>
        <?= OrbitSvg::generateOrbitSvg('32', '16', 'orcus', '1'); ?>
        <?= OrbitSvg::generateOrbitSvg('30', '80', 'neptune', '2'); ?>
        <?= OrbitSvg::generateOrbitSvg('28', '20', 'uranus', '2'); ?>
        <?= OrbitSvg::generateOrbitSvg('25', '75', 'saturn', '2'); ?>
        <?= OrbitSvg::generateOrbitSvg('22', '28', 'jupiter', '4'); ?>
        <?= OrbitSvg::generateOrbitSvg('18', '68', 'ceres', '1'); ?>
        <?= OrbitSvg::generateOrbitSvg('16', '34', 'mars', '1.6'); ?>
        <?= OrbitSvg::generateOrbitSvg('14', '64', 'earth', '2'); ?>
        <?= OrbitSvg::generateOrbitSvg('12', '38', 'venus', '1.4'); ?>
        <?= OrbitSvg::generateOrbitSvg('10', '60', 'mercury', '1'); ?>

        <?= OrbitSvg::generatePlanetSvg('senda', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('eris', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('gonggong', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('makemake', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('quaoar', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('haumea', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('pluto', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('orcus', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('neptune', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('uranus', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('saturn', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('jupiter', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('ceres', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('mars', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('earth', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('venus', '30'); ?>
        <?= OrbitSvg::generatePlanetSvg('mercury', '30'); ?>


    </div>
    <?php
    foreach ($allPlanets as $planet){
        echo $planet->createCardHtml();
    }
    ?>
</main>
</body>
</html>

