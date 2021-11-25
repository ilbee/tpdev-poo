<?php

class Moteur
{
    private $energie;

    const TYPE_ENERGIE_THERMIQUE = 'diesel';
    const TYPE_ENERGIE_ELECTRIQUE = 'electrique';

    public function __construct($energie)
    {
        $this->energie = $energie;
    }
}