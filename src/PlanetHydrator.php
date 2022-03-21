<?php
namespace planetApp;

class PlanetHydrator
{
    public static function getBottles(PDO $db)
    {
        $query = $db->prepare('SELECT * FROM `planets`');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Bottle::class);
        return $query->fetchAll();
    }
}