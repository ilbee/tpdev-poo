<?php

class Vehicule
{
    private $nbRoues;
    private $typeMoteur;
    private $color;

    public function __construct($typeMoteur)
    {
        $this->setTypeMoteur($typeMoteur);
    }

    public function getNbRoues(): ?int
    {
        return $this->nbRoues;
    }

    /**
     * @param int|null $nbRoue
     */
    protected function setNbRoues(int $nbRoue): self
    {
        $this->nbRoues = $nbRoue;

        return $this;
    }

    protected function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    private function setTypeMoteur(Moteur $moteur)
    {
        $this->typeMoteur = $moteur;

        return $this;
    }

    public function getTypeMoteur(): Moteur
    {
        return $this->typeMoteur;
    }
}