<?php

namespace PlanetApp;

class Planet
{
    protected $id;
    protected $name;
    protected $image_src;
    protected $sun;
    protected $type;
    protected $length_of_day;
    protected $length_of_year;
    protected $mean_radius_km;
    protected $mass_earths;
    protected $mean_distance_from_sun_au;
    protected $number_of_moons;
    protected $mean_surface_temperature_c;
    protected $full_name;
    protected $description;

    public function getName(): string
    {
        return $this->name;
    }
    public function getImageSrc(): string
    {
        return $this->image_src;
    }
    public function getSun(): string
    {
        return $this->sun;
    }
    public function getType(): string
    {
        return $this->type;
    }
    public function getLengthOfDay(): string
    {
        return $this->length_of_day;
    }
    public function getLengthOfYear(): string
    {
        return $this->length_of_year;
    }
    public function getMeanRadiusKm(): string
    {
        return $this->mean_radius_km;
    }
    public function getMassEarths(): string
    {
        return $this->mass_earths;
    }
    public function getMeanDistanceFromSunAu(): string
    {
        return $this->mean_distance_from_sun_au;
    }
    public function getNumberOfMoons(): string
    {
        return $this->number_of_moons;
    }
    public function getMeanSurfaceTemperatureC(): string
    {
        return $this->mean_surface_temperature_c;
    }
    public function getFullName(): string
    {
        return $this->full_name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function createCardHtml(): string
    {
        return('
        <div class="planet-card" id="planet-'.$this->id.'">
            <a href="/planet.php?planetId='.$this->id.'"><img src="'.$this->image_src.'"></a>
            <div class="planet-card-info-container">
                <a href="/planet.php?planetId='.$this->id.'"><h2>'.$this->name.'</h2></a>
                <h3>'.$this->type.'</h3>
            </div>
        </div>
        ');
    }

}