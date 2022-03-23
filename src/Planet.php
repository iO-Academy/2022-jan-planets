<?php

namespace PlanetApp;

class Planet
{
    protected $name;
    protected $image_src;
    protected $type;

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
        return('
        <div id="'. $this->name .'" class="planet-card hidden-on-desktop shown-on-desktop">
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