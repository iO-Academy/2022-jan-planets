<?php
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
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <h1>Planet Plinky Plonk</h1>
    <img id="title-image" src="planet-plinky-plonk.png" alt="Planet Plinky Plonk"/>
</header>
<main>
    <img class="sun-image mobile" src="sun.png" alt="Sun"/>
    <div class="planets-container">
        <?php
        foreach ($allPlanets as $planet) {
            echo $planet->createCardHtml();
        }
        ?>
    </div>

</main>
</body>
</html>

