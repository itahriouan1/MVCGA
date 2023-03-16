<?php

namespace src\Entity;

class personne{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $email;

    public function __construct(){
        if(func_num_args()==3)
        {
            $this->nom = func_get_arg(0);
            $this->prenom = func_get_arg(1);
            $this->email = func_get_arg(2);
        }   
        if(func_num_args()==4){
            $this->id = func_get_arg(0);
            $this->nom = func_get_arg(1);
            $this->prenom = func_get_arg(2);
            $this->email = func_get_arg(3);
        }     
    }
    


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}