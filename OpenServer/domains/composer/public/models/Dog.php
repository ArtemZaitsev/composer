<?php

namespace Models;

class Dog
{
    public function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }


    protected $fillable = [
        'name',
        'weight'
    ];

    public function echoDog():string
    {
        echo "DOG is LIVE";
    }

    public function setName():string
    {
    }

    public function getName():string
    {

    }

    public function setWeight():int
    {

    }

    public function getWeight():int
    {

    }
}
