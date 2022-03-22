<?php

namespace PlanetApp;

class Planet
{
    protected $name;
    protected $image_src;
    protected $type;

    public function createCardHtml(): string
    {
        return('
        <div class="planet-card">
            <img src="'.$this->image_src.'">
            <img src="earth.png" alt="Earth"/>
            <div class="planet-card-info-container">
                <h2>'.$this->name.'</h2>
                <h3>'.$this->type.'</h3>
            </div>
        </div>
        ');
    }

}