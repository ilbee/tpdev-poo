<?php

class Tesla extends Voiture
{
    public function __construct()
    {
        $this->autoPilot = true;
        parent::__construct(new Moteur('electrique'));
    }

}