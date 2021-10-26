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

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getName()
    {
        return $this->firstName.' '.$this->lastName;
    }
}