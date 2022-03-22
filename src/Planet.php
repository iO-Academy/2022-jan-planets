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