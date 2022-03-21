<?php

namespace planetApp;

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

    public function createCardHtml()
    {
        return('
        <div class="planet-card">
            <img src="'.$this->image_src.'">
            <div class="planet-card-info-container">
                <h2>'.$this->name.'</h2>
                <h3>'.$this->type.'</h3>
            </div>
        </div>
        ');
    }

}