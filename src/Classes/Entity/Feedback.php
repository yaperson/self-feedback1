<?php
namespace App\Classes\Entity;

class Feedback {

    public $note_Id ;
    public $note_Valeur_Repas ;
    public $note_Valeur_Environnement ;
    public $note_Commentaire ;
    public $classe_libelle ;
    public $note_date;

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
     * Get the value of _note_Id
     */ 
    public static function get_note_Id()
    {
        return $this->note_Id;
    }

    /**
     * Set the value of _note_Id
     *
     * @return  self
     */ 


    public function setnote_Id($_note_Id)
    {
        $this->note_Id = $_note_Id;

        return $this;
    }

    /**
     * Get the value of _note_Valeur_Repa
     */ 
    public function get_note_Valeur_Repas()
    {
        return $this->note_Valeur_Repas;
    }

    /**
     * Set the value of _note_Valeur_Repas
     *
     * @return  self
     */ 
    public function setnote_Valeur_Repas($_note_Valeur_Repas)
    {
        $this->note_Valeur_Repas = $_note_Valeur_Repas;

        return $this;
    }

    /**
     * Get the value of _note_Commentaire
     */ 
    public function get_note_Commentaire()
    {
        return $this->note_Commentaire;
    }

    /**
     * Set the value of _note_Commentaire
     *
     * @return  self
     */ 
    public function setnote_Commentaire($_note_Commentaire)
    {
        $this->note_Commentaire = $_note_Commentaire;

        return $this;
    }

    /**
     * Get the value of _note_Valeur_Environnement
     */ 
    public function get_note_Valeur_Environnement()
    {
        return $this->note_Valeur_Environnement;
    }

    /**
     * Set the value of _note_Valeur_Environnement
     *
     * @return  self
     */ 
    public function setnote_Valeur_Environnement($_note_Valeur_Environnement)
    {
        $this->note_Valeur_Environnement = $_note_Valeur_Environnement;

        return $this;
    }

    /**
     * Get the value of _classe_Id
     */ 
    public function get_classe_libelle()
    {
        return $this->classe_Id;
    }

    /**
     * Set the value of _classe_Id
     *
     * @return  self
     */ 
    public function setclasse_libelle($_classe_Id)
    {
        $this->classe_Id = $_classe_Id;

        return $this;
    }

    /**
     * Set the value of note_date
     *
     * @return  self
     */ 
    public function setnote_date($note_date)
    {
        $this->note_date = $note_date;

        return $this;
    }
}