<?php
use PlanetApp\PlanetHydrator;
use PlanetApp\OrbitSvg;

require 'vendor/autoload.php';

$dsn = 'mysql:host=127.0.0.1:3306; dbname=planet_collection';
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
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <img id="title-image" src="planet-plinky-plonk.png" alt="Planet Plinky Plonk"/>
    <img class="sun-image mobile" src="sun.png" alt="Sun"/>

    <h1>Planet Plinky Plonk</h1>
    <div class="solar-system-container">
        <img class="sun-image desktop" src="sun.png" alt="Sun"/>
        <?= OrbitSvg::generateOrbitSvg('48%', '98%', 'senda', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('46%', '4%', 'eris', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('44%', '94%', 'gonggong', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('42%', '8%', 'makemake', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('38%', '88%', 'quaoar', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('36%', '12%', 'haumea', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('34%', '84%', 'pluto', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('32%', '16%', 'orcus', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('30%', '80%', 'neptune', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('28%', '20%', 'uranus', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('26%', '76%', 'saturn', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('24%', '24%', 'jupiter', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('22%', '72%', 'ceres', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('16%', '34%', 'mars', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('14%', '64%', 'earth', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('12%', '38%', 'venus', '1%'); ?>
        <?= OrbitSvg::generateOrbitSvg('10%', '60%', 'mercury', '1%'); ?>
    </div>
    <div class="planet-card-container">
    <?php
    foreach ($allPlanets as $planet){
        echo $planet->createCardHtml();
    }
    ?>
    </div>
</main>
</body>
</html>

