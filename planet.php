<?php
require 'vendor/autoload.php';
use PlanetApp\PlanetHydrator;

if(!isset($_GET['planetId']) | ($_GET['planetId'] == 0)){
    header('Location: ./index.php');
}

$dsn = 'mysql:host=db; dbname=planet_collection';
$username = 'root';
$password = 'password';
$db = new PDO($dsn, $username, $password);
$planetId = $_GET['planetId'];
$planet = PlanetHydrator::getPlanet($db, $planetId);
?>

<!DOCTYPE html>

<html lang="en-GB">
<head>
    <title>Planet Plinky Plonk</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="planet.css"
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;900&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <div class="grid-parent">
        <a class="back-button" href="./index.php#planet-<?=$planetId?>">&#8637 <object class="desktop-back-button-text"> Planets</object></a>
        <h1><?=$planet->getName()?></h1>
        <div class="planet-image-section">
            <img src="./images/<?=$planet->getImageSrc()===null ? 'planet_not_found.png':$planet->getImageSrc()?>" alt="<?=$planet->getName()?>">
            <p class="image-source-text">Source: <?=$planet->getImageDescription()?></p>
        </div>
        <div class="planet-details-section">
            <?=($planet->getFullName() != null) ? '<h2>Full Name: '.$planet->getFullName().'</h2>':'';?>
            <p class="planet-description-text">
                <?=$planet->getDescription()?>
            </p>
            <div class="details-table">
                <p class="detail-table-heading">Planet type</p>
                <p><?=$planet->getType()?></p>
                <p class="detail-table-heading">Length of day</p>
                <p><?=$planet->getLengthOfDay()===null?'unknown':$planet->getLengthOfDay().' Earth days'?></p>
                <p class="detail-table-heading">Length of year</p>
                <p><?=$planet->getLengthOfYear()?> Earth years</p>
                <p class="detail-table-heading">Mean radius</p>
                <p><?=$planet->getMeanRadiusKm()?>km</p>
                <p class="detail-table-heading">Mean distance from Sun</p>
                <p><?=$planet->getMeanDistanceFromSunAu()?>au</p>
                <p class="detail-table-heading">Star</p>
                <p><?=$planet->getSun()?></p>
                <p class="detail-table-heading">Mass</p>
                <p><?=$planet->getMassEarths()===null?'unknown':$planet->getMassEarths().' Earths'?></p>
                <p class="detail-table-heading">Number of moons</p>
                <p><?=$planet->getNumberOfMoons()?></p>
                <p class="detail-table-heading">Mean surface temperature</p>
                <p><?=$planet->getMeanSurfaceTemperatureC()?> ??C</p>
            </div>
        </div>
    </div>
</main>
</body>
</html>
