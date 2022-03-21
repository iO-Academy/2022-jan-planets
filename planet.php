<?php
require 'vendor/autoload.php';
// redirect if SQL query fails
include 'src/Planet.php';
use PlanetApp\PlanetHydrator;

$dsn = 'mysql:host=127.0.0.1:3306; dbname=planet_collection';
$dbName = 'planet_collection';
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
</head>
<body>
<nav>
    <a href="/index.php#<?=$planetId?>"><button type="button"><</button></a>
</nav>
<header>
<h1><?=$planet->getName()?></h1>
</header>
<main>
    returning null - stopping flow?
    <img src="<?=$planet->getImageSrc()?>" alt="<?=$planet->getName()?>">
    <h2><?=$planet->getFullName()?></h2>
    <p>
        <?=$planet->getDescription()?>
    </p>
</main>
</body>
</html>
