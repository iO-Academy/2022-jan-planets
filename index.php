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
    <img id="title-image" src="images/planet-plinky-plonk.png" alt="Planet Plinky Plonk"/>
</header>
<main>
    <img class="sun-image mobile" src="images/sun.png" alt="Sun"/>
    <div class="solar-system-container">
        <img class="sun-image desktop" src="images/sun.png" alt="Sun"/>
        <svg class="orbit-svg" width="100%" height="100%">
            <ellipse  class="orbit" cx="50%" cy="50%" rx="48%" ry="48%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="46%" ry="46%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="44%" ry="44%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="42%" ry="42%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="38%" ry="38%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="36%" ry="36%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="34%" ry="34%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="32%" ry="32%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="30%" ry="30%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="28%" ry="28%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="25%" ry="25%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="22%" ry="22%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="18%" ry="18%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="16%" ry="16%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="14%" ry="14%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="12%" ry="12%" stroke="white" stroke-width="1" fill="none"></ellipse>
            <ellipse  class="orbit" cx="50%" cy="50%" rx="10%" ry="10%" stroke="white" stroke-width="1" fill="none"></ellipse>
        </svg>

        <?php
        foreach ($allPlanets as $planet){
            echo $planet->displayPlanetImage();
        }
        ?>
    </div>
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

