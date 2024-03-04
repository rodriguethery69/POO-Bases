<?php

require_once 'les bases/Classes/Compte.php';

//nous allons instancier notre objet à 2 reprises.

//Premiere instance de la classe Compte
$compte1 = new Compte('Rodrigue');
$compte1->deposer(1000);
$compte1->retirer(500);
$compte1->voirSolde();


var_dump($compte1);

// Deuxieme instance de la classe Compte
$compte2 = new Compte('Stephanie');







