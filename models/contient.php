<?php

namespace seaBuck\models;

use seaBuck\core\table;

class contient extends table{

    protected static $suffix = "_cont";

    private $id_ingr_cont;
    private $id_prod_cont;
    private $qte_cont;

    private $ingredient;
    private $produit;

    public function __construct(){
        
        if(!self::isInstance("seaBuck\models\ingredient")){
            $this->ingredient = ingredient::byId($this->id_ingr_cont);
        }

        if(!self::isInstance("seaBuck\models\produit")){
            $this->produit = produit::byId($this->id_prod_cont);
        }
        
    }


/*
   // Constructor
   public function __construct($id_ingr_cont, $id_prod_cont, $qte_cont) {
        $this->id_ingr_cont = $id_ingr_cont;
        $this->id_prod_cont = $id_prod_cont;
        $this->qte_cont = $qte_cont;
    }
*/

    /**
     * Get the value of id_ingr_cont
     */ 
    public function getId_ingr_cont()
    {
        return $this->id_ingr_cont;
    }

    /**
     * Set the value of id_ingr_cont
     *
     * @return  self
     */ 
    public function setId_ingr_cont($id_ingr_cont)
    {
        $this->id_ingr_cont = $id_ingr_cont;

        return $this;
    }

    /**
     * Get the value of id_prod_cont
     */ 
    public function getId_prod_cont()
    {
        return $this->id_prod_cont;
    }

    /**
     * Set the value of id_prod_cont
     *
     * @return  self
     */ 
    public function setId_prod_cont($id_prod_cont)
    {
        $this->id_prod_cont = $id_prod_cont;

        return $this;
    }

    /**
     * Get the value of qte_cont
     */ 
    public function getQte_cont()
    {
        return $this->qte_cont;
    }

    /**
     * Set the value of qte_cont
     *
     * @return  self
     */ 
    public function setQte_cont($qte_cont)
    {
        $this->qte_cont = $qte_cont;

        return $this;
    }


    /**
     * Get the value of ingredient
     */ 
    public function getIngredient_cont()
    {
        return $this->ingredient;
    }

    /**
     * Get the value of produit
     */ 
    public function getProduit_cont()
    {
        return $this->produit;
    }
}


?>