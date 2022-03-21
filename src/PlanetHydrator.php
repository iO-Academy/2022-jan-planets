<?php
namespace planetApp;

class PlanetHydrator
{

    public static function getPlanets(\PDO $db)
    {
        $query = $db->prepare('SELECT * FROM `planets`');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, Planet::class);
        return $query->fetchAll();
    }
}