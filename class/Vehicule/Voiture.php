<?php

class Voiture extends Vehicule
{
    protected $autoPilot = false;

    public function __construct(Moteur $typeMoteur)
    {
        $this
            ->setNbRoues(4)
            ->setColor('white')
        ;
        parent::__construct($typeMoteur);
    }

    public function isAutoPilot()
    {
        return $this->autoPilot;
    }
}