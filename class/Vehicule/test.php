<?php
require_once './Vehicule.php';
require_once './Voiture.php';
require_once './Tesla.php';
require_once './Moteur.php';
require_once './Moto.php';


$moteur = new Moteur('thermique');
$voiture = new Voiture($moteur);
echo '<pre>';
var_dump('voiture', $voiture);
echo '</pre>';

echo '<hr/>';
$tesla = new Tesla();

echo '<pre>';
var_dump('tesla', $tesla);
echo '</pre>';