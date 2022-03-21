<?php

use planetApp\PlanetHydrator;

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
    <svg width="500" height="500">
        <circle class="sun-svg" r="200" cx="250" cy="250" stroke="yellow" stroke-width="2" fill="yellow" />
    </svg>

    <h1>Planet Plinky Plonk</h1>
    <?php
    foreach ($allPlanets as $planet){
        echo $planet->createCardHtml();
    }
    ?>
</main>
</body>
</html>

