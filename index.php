<?php

require('Client.php');
require('Compte.php');

// Rédigez ici le programme de test de vos classes

// 1. créez des clients, initialisez les, affichez les

$mike = new Client ('AB-0753-XH', 'Mike', 'Roy', '0627184513');
$mike->Afficher();

$jake = new Client ('ZR-0164-VT', 'Jake', 'Rio', '0654985632');
$jake->Afficher();

// 2. créez des comptes, manipulez les à l'aide des fonctions créées (en utilisant éventuellement les clients créés plus haut)

$mikeAccount = new Compte (481709, 8426, $mike);
var_dump($mikeAccount);
echo '<br/><br/>';

$jakeAccount = new Compte (351468, 2893, $jake);
var_dump($jakeAccount);
echo '<br/><br/>';

/*
$mikeAccount->Crediter(101);
var_dump($mikeAccount);
echo '<br/><br/>';

$mikeAccount->Debiter(25);
var_dump($mikeAccount);
echo '<br/><br/>';
*/

$mikeAccount->Resumer();
var_dump($mikeAccount);
echo '<br/><br/>';

$jakeAccount->Crediter(60, $mikeAccount);
$jakeAccount->Resumer();
