<?php

use PlanetApp\PlanetHydrator;

require 'vendor/autoload.php';

$dsn = 'mysql:host=127.0.0.1:3306; dbname=planet_collection';
$dbName = 'planet_collection';
$username = 'root';
$password = 'password';

$db = new PDO($dsn, $username, $password);
$allPlanets = PlanetHydrator::getPlanets($db);

session_start();

// on click $_SESSION['object'] = $object;
// pass object name via get / href
?>

<!DOCTYPE html>

<html lang="en-GB">
<head>
    <title>Planet Plinky Plonk</title>
</head>
<body>
<header>
    <h1>Planet Plinky Plonk</h1>
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

