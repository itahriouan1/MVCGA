<?php

namespace src\Controller;

use lib\View\View;
use src\Repository\personneRepository;

class PersonneController {

    public function show(){
        $personneRepository = new personneRepository();
        $personnes = $personneRepository->findAll();
        $view = new View();
        $view->render('personne/afficher',['personnes'=>$personnes]);
        
    }
    public function delete(){
        $personneRepository = new personneRepository();
        $personne = $personneRepository->findById(1);
        $personneRepository->delete($personne);
        
    }

}