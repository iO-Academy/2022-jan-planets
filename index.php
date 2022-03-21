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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@1,100&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <h1>Planet Plinky Plonk</h1>
    <svg>SUN*****</svg>
</header>
<main>
    <?php
    foreach ($allPlanets as $planet){
        echo $planet->createCardHtml();
    }
    ?>
</main>
</body>
</html>

