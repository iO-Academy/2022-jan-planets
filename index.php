<?php

use planetApp\PlanetHydrator;

require 'vendor/autoload.php';

$dsn = '127.0.0.1:3306';
$dbName = 'planet_collection';
$username = 'root';
$password = 'password';


$db = new PDO("mysql:$dsn; dbname=$dbName", $username, $password);
$allPlanets = PlanetHydrator::getBottles($db);