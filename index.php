<?php

require 'vendor/autoload.php';

use lib\DB\Connexion;
use lib\Routing\Router;
use src\Entity\personne;
use src\Repository\personneRepository;

$Router = new Router();
$Router->request();
