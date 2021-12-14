<?php
namespace App\Classes\Entity;

class Classe {
    public $classe_Id;
    public $classe_libelle;

    public function __construct(array $ligne)
    {
        $this->hydrate($ligne);
    }

    public function hydrate(array $ligne)
    {
        foreach($ligne as $key => $value){
            $method = 'set'.$key;
            if (method_exists($this, $method)) {
                $this->$method($value); // on appel une methode qui est dans la variable donc on ajoute un $
            }
        }
    }
    

    /**
     * Get the value of classe_Id
     */ 
    public function getclasse_Id()
    {
        return $this->classe_Id;
    }

    /**
     * Set the value of classe_Id
     *
     * @return  self
     */ 
    public function setclasse_Id($classe_Id)
    {
        $this->classe_Id = $classe_Id;

        return $this;
    }

    /**
     * Get the value of classe_libelle
     */ 
    public function getclasse_libelle()
    {
        return $this->classe_libelle;
    }

    /**
     * Set the value of classe_libelle
     *
     * @return  self
     */ 
    public function setclasse_libelle($classe_libelle)
    {
        $this->classe_libelle = $classe_libelle;

        return $this;
    }
}