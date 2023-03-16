<?php

namespace lib\DB;

use PDO;
use PDOException;

class Connexion {

    protected $pdo;

    public function __construct()
    {
        $path = __DIR__.'\..\..\config\DB\configDB.json';
        $content = file_get_contents($path);
        $config = json_decode($content);
        
        try{
            $pdo = new PDO("mysql:host=".$config->host.";dbname=".$config->dbname,$config->username,$config->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;


        }
        catch(PDOException $e){
            echo $e->getMessage();
            die();
        }
    }


    /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }
}