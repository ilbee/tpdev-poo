<?php

class Moto extends Vehicule
{
    public function __construct($typeMoteur)
    {
        $this->setNbRoues(2);
        parent::__construct($typeMoteur);
    }
}