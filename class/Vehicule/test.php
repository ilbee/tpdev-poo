<?php
require_once realpath('./Vehicule.php');
require_once  realpath('./Voiture.php');
require_once  realpath('./Tesla.php');
require_once  realpath('./Moteur.php');
require_once  realpath('./Moto.php');


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