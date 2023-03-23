<?php

namespace src\Controller;

use lib\Controller\AbstractController;
use lib\View\View;
use src\Entity\personne;
use src\Repository\personneRepository;

class PersonneController extends AbstractController {

    public function show(){
        $personneRepository = new personneRepository();
        $personnes = $personneRepository->findAll();
        $view = $this->view;
        
        $view->render('personne/afficher',['personnes'=>$personnes]);
        
    }
    public function delete(){
        if(isset($_GET['id'])){
        $personneRepository = new personneRepository();
        $personne = $personneRepository->findById($_GET['id']);
        $personneRepository->delete($personne);
        echo '<a href="?action=afficher_personne">retour</a>';
        }
      
        
    }

    public function create(){
        if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])){
            $personneRepository = new personneRepository();
            $personne = new personne($_POST['nom'],$_POST['prenom'],$_POST['email']);
            $personne = $personneRepository->create($personne);
            
        }
        $view = $this->view;
        $view->render('personne/create');
    }

    public function update(){
        if(isset($_GET['id'])){
        $personneRepository = new personneRepository();
        $personne = $personneRepository->findById($_GET['id']); 
        $view = $this->view;
        $view->render('personne/update',['personne'=>$personne]);       
        }
        if(isset($_POST['id'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])){
            $personneRepository = new personneRepository();
            $personne = new personne($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email']);
            $personne = $personneRepository->update($personne);            
        }
        
    }

}