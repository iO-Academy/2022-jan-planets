<?php
require 'vendor/autoload.php';

include 'src/Planet.php';
use PlanetApp\PlanetHydrator;

$dsn = 'mysql:host=db; dbname=planet_collection';
$dbName = 'planet_collection';
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
    <a href="./index.php#<?=$planetId?>"><button type="button"><</button></a>
</nav>
<header>
<h1><?=$planet->getName()?></h1>
</header>
<main>
    <img src="<?=$planet->getImageSrc()?>" alt="<?=$planet->getName()?>">
    <?= ($planet->getFullName() !== null) ?? '<h2>Full Name:'.$planet->getFullName().'</h2>'; ?>
    <p>
        <?=$planet->getDescription()?>
    </p>
</main>
</body>
</html>
