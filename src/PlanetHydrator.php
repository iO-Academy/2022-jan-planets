<?php
namespace PlanetApp;

class PlanetHydrator
{

    public static function getPlanets(\PDO $db)
    {
        $query = $db->prepare('SELECT * FROM `planets` ORDER BY `mean_distance_from_sun_au` ASC');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, Planet::class);
        return $query->fetchAll();
    }

    public static function getPlanet(\PDO $db, $planetId)
    {
        $query = $db->prepare('SELECT * FROM `planets` WHERE id = ?');
        $query->execute([$planetId]);
        $query->setFetchMode(\PDO::FETCH_CLASS, Planet::class);
        return $query->fetch();
    }
}