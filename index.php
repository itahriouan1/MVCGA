<?php

require 'vendor/autoload.php';

use lib\DB\Connexion;
use src\Entity\personne;
use src\Repository\personneRepository;

// $personne = new personne("bekkali","omar","omar@upf.ac.ma");

$personneRepo = new personneRepository();
$personnes = $personneRepo->findAll();
var_dump($personnes);
// $personneRepo->create($personne);