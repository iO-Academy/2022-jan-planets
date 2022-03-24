<?php
require 'vendor/autoload.php';

include 'src/Planet.php';
use PlanetApp\PlanetHydrator;

$dsn = 'mysql:host=db; dbname=planet_collection';
$username = 'root';
$password = 'password';

if(!isset($_GET['planetId'])){header('Location: ./index.php');}

$db = new PDO($dsn, $username, $password);
$planetId = $_GET['planetId'];
$planet = PlanetHydrator::getPlanet($db, $planetId);



?>

<!DOCTYPE html>

<html lang="en-GB">
<head>
    <title>Planet Plinky Plonk</title>
</head>
<body>
<nav>
    <a href="./index.php#planet-<?=$planetId?>"><button type="button"><</button></a>
</nav>
<header>
    <h1><?=$planet->getName()?></h1>
</header>
<main>
    <img src="<?=$planet->getImageSrc()?>" alt="<?=$planet->getName()?>">
    <?php if($planet->getFullName() != null) {echo '<h2>Full Name: '.$planet->getFullName().'</h2>';}?>
    <p>
        <?=$planet->getDescription()?>
    </p>
    <div class="details-table">
        <p class="detail-table-heading">Planet type</p>
        <p><?=$planet->getType()?></p>
        <p class="detail-table-heading">Length of day</p>
        <p><?=$planet->getLengthOfDay()?> Earth days</p>
        <p class="detail-table-heading">Length of year</p>
        <p><?=$planet->getLengthOfYear()?> Earth years</p>
        <p class="detail-table-heading">Mean radius</p>
        <p><?=$planet->getMeanRadiusKm()?>km</p>
        <p class="detail-table-heading">Mean distance from Sun</p>
        <p><?=$planet->getMeanDistanceFromSunAu()?>au</p>
        <p class="detail-table-heading">Star</p>
        <p><?=$planet->getSun()?></p>
        <p class="detail-table-heading">Mass</p>
        <p><?=$planet->getMassEarths()?> Earths</p>
        <p class="detail-table-heading">Number of moons</p>
        <p><?=$planet->getNumberOfMoons()?></p>
        <p class="detail-table-heading">Mean surface temperature</p>
        <p><?=$planet->getMeanSurfaceTemperatureC()?> C</p>
    </div>
</main>
</body>
</html>
