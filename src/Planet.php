<?php

namespace PlanetApp;

class Planet
{
    protected int $id;
    protected string $name;
    protected ?string $image_src;
    protected ?string $sun;
    protected ?string $type;
    protected ?float $length_of_day;
    protected ?float $length_of_year;
    protected ?float $mean_radius_km;
    protected ?float $mass_earths;
    protected ?float $mean_distance_from_sun_au;
    protected ?int $number_of_moons;
    protected ?string $mean_surface_temperature_c;
    protected ?string $full_name;
    protected ?string $description;
    protected ?string $image_description;

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
    public function getFullName(): ?string
    {
        return $this->full_name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImageDescription(): string
    {
        return $this->image_description;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setImageSrc(string $image_src): void
    {
        $this->image_src = $image_src;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function createCardHtml(): string
    {
        return ('
        <div class="planet-card" id="planet-'.$this->id.'">
            <a href="./planet.php?planetId='.$this->id.'"><img src="images/' . $this->image_src . '" alt="'.$this->name.'"></a>
            <div class="planet-card-info-container">
                <a href="./planet.php?planetId='.$this->id . '"><h2>' . $this->name . '</h2></a>
                <h3>' . $this->type . '</h3>
                <a class="learn-more-button" href="./planet.php?planetId='.$this->id.'">Learn more about '.$this->name.'</a>
            </div>
        </div>
        ');
    }
}