<?php
class Utilisateur {

    private $firstName;
    private $lastName;
    private $mail;

    public function __construct($prenom, $nom)
    {
        $this->firstName = $prenom;
        $this->lastName = $nom;
    }

    public function getName()
    {
        return $this->firstName.' '.$this->lastName;
    }
}