<?php

namespace src\Controller;

use src\Repository\personneRepository;

class PersonneController {

    public function show(){
        $personneRepository = new personneRepository();
        $personnes = $personneRepository->findAll();
        var_dump($personnes);
    }
    public function delete(){
        $personneRepository = new personneRepository();
        $personne = $personneRepository->findById(1);
        $personneRepository->delete($personne);
        
    }

}