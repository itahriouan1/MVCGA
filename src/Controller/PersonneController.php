<?php

namespace src\Controller;

use src\Repository\personneRepository;

class PersonneController {

    public function show(){
        $personneRepository = new personneRepository();
        $personnes = $personneRepository->findAll();
        var_dump($personnes);
    }

}