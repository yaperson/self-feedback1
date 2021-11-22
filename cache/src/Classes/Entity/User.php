<?php
namespace App\Classes\Entity;

class User {

    public $id ;
    public $email ;
    private $password ;
    private $droit ;

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
    public function __toString():string
    {
        return $this->getEmail();
     }


        /**
     * Get the value of _id 
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of _id
     *
     * @return  self
     */ 
    public function setuser_Id($_id)
    {
        $this->id = $_id;

        return $this;
    }

    /**
     * Get the value of _email
     */ 
   /* public function getEmail()
    {
        return $this->email;
    }*/

    /**
     * Set the value of _email
     *
     * @return  self
     */ 
    public function setuser_Name($_email)
    {
        $this->email = $_email;

        return $this;
    }

    /**
     * Get the value of _password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of _password
     *
     * @return  self
     */ 
    public function setPassword($_password)
    {
        $this->password = password_hash($_password, PASSWORD_BCRYPT);

        return $this;
    }

}

?>