<?php
class Utilisateur
{
    private $id;
    private $firstName;
    private $lastName;
    private $mail;

    public function __construct($id, $prenom, $nom, $mail)
    {
        $this->id = $id;
        $this->firstName = $prenom;
        $this->lastName = $nom;
        $this->setMail($mail);
    }

    public function getId()
    {
        return $this->id;
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

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}