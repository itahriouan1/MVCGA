<?php

namespace src\Repository;

use lib\DB\Connexion;
use PDO;
use src\Entity\personne;

class personneRepository {

    protected $pdo;

    public function __construct()
    {
        $connexion = new Connexion();
        $pdo = $connexion->getPdo();
        $this->pdo = $pdo;
    }

    public function findAll(){
        try{
        $pdo = $this->pdo;
        $stm = $pdo->prepare("select * from personne");
        $stm->execute();
        $personnes = $stm->fetchAll(PDO::FETCH_CLASS, 'src\Entity\personne');
        return $personnes;
        }catch(\PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
    public function findById($id){
        try{
        $pdo = $this->pdo;
        $stm = $pdo->prepare("select * from personne where id=?");
        $stm->execute([$id]);
        $personnes = $stm->fetchAll(PDO::FETCH_CLASS, 'src\Entity\personne');
        return $personnes[0];
        }catch(\PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
    public function create(personne $personne){
        try{
            var_dump($personne);
        $pdo = $this->pdo;
        $stm = $pdo->prepare("insert into personne values (DEFAULT,?,?,?)");
        $stm->execute([$personne->getNom(), $personne->getPrenom(), $personne->getEmail()]);
        
        }catch(\PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
    public function delete(Personne $personne){
        try{
            
        $pdo = $this->pdo;
        $stm = $pdo->prepare("delete from personne where id=?");
        $stm->execute([$personne->getId()]);
        }catch(\PDOException $e){
            echo $e->getMessage();
            die();
    }
}
    public function update(Personne $personne){
        try{
            
        $pdo = $this->pdo;
        $stm = $pdo->prepare("update personne 
        set nom=?,
        prenom=?,
        email=?
        where id=?");
        $stm->execute([$personne->getNom(), $personne->getPrenom(), $personne->getEmail(), $personne->getId()]);
        }catch(\PDOException $e){
            echo $e->getMessage();
            die();
        }

}
    

}