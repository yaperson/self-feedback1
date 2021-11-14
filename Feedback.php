<?php
namespace App\Classes\Entity;

class Feedback {

    private $_note_Id ;
    private $_note_Valeur_Repas ;
    private $_note_Valeur_Environnement ;
    private $_note_Commentaire ;
    private $_classe_Id ;

    public function __construct(array $ligne)
    {
        $this->hydrate($ligne);
    }

    public function hydrate(array $ligne)
    {
        foreach($ligne as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value); // on appel une methode qui est dans la variable donc on ajoute un $
            }
        }
    }
    /**
     * Get the value of _note_Id
     */ 
    public function get_note_Id()
    {
        return $this->_note_Id;
    }

    /**
     * Set the value of _note_Id
     *
     * @return  self
     */ 
    public function set_note_Id($_note_Id)
    {
        $this->_note_Id = $_note_Id;

        return $this;
    }

    /**
     * Get the value of _note_Valeur_Repas
     */ 
    public function get_note_Valeur_Repas()
    {
        return $this->_note_Valeur_Repas;
    }

    /**
     * Set the value of _note_Valeur_Repas
     *
     * @return  self
     */ 
    public function set_note_Valeur_Repas($_note_Valeur_Repas)
    {
        $this->_note_Valeur_Repas = $_note_Valeur_Repas;

        return $this;
    }

    /**
     * Get the value of _note_Commentaire
     */ 
    public function get_note_Commentaire()
    {
        return $this->_note_Commentaire;
    }

    /**
     * Set the value of _note_Commentaire
     *
     * @return  self
     */ 
    public function set_note_Commentaire($_note_Commentaire)
    {
        $this->_note_Commentaire = $_note_Commentaire;

        return $this;
    }

    /**
     * Get the value of _note_Valeur_Environnement
     */ 
    public function get_note_Valeur_Environnement()
    {
        return $this->_note_Valeur_Environnement;
    }

    /**
     * Set the value of _note_Valeur_Environnement
     *
     * @return  self
     */ 
    public function set_note_Valeur_Environnement($_note_Valeur_Environnement)
    {
        $this->_note_Valeur_Environnement = $_note_Valeur_Environnement;

        return $this;
    }

    /**
     * Get the value of _classe_Id
     */ 
    public function get_classe_Id()
    {
        return $this->_classe_Id;
    }

    /**
     * Set the value of _classe_Id
     *
     * @return  self
     */ 
    public function set_classe_Id($_classe_Id)
    {
        $this->_classe_Id = $_classe_Id;

        return $this;
    }
}