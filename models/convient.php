<?php

namespace seaBuck\models;

use seaBuck\core\table;

class convient extends table {
    
    protected static $suffix = "_conv";

    private $id_prod_conv;
    private $id_ali_conv;

    private $alimentation;
    private $produit;

    public function __construct(){
    
        if(!self::isInstance("seaBuck\models\alimentation")){
            $this->alimentation = alimentation::byId($this->id_ali_conv);
        }

        if(!self::isInstance("seaBuck\models\produit")){
            $this->produit = produit::byId($this->id_prod_conv);
        }
        
    }
    /*
    // Constructor
    public function __construct($id_prod_conv, $id_ali_conv) {
        $this->id_prod_conv = $id_prod_conv;
        $this->id_ali_conv = $id_ali_conv;
    }*/

    /**
     * Get the value of id_prod_conv
     */ 
    public function getId_prod_conv()
    {
        return $this->id_prod_conv;
    }

    /**
     * Set the value of id_prod_conv
     *
     * @return self
     */ 
    public function setId_prod_conv($id_prod_conv)
    {
        $this->id_prod_conv = $id_prod_conv;
        return $this;
    }

    /**
     * Get the value of id_ali_conv
     */ 
    public function getId_ali_conv()
    {
        return $this->id_ali_conv;
    }

    /**
     * Set the value of id_ali_conv
     *
     * @return self
     */ 
    public function setId_ali_conv($id_ali_conv)
    {
        $this->id_ali_conv = $id_ali_conv;
        return $this;
    }

    /**
     * Get the value of alimentation
     */ 
    public function getAlimentation_conv()
    {
        return $this->alimentation;
    }

    /**
     * Get the value of produit
     */ 
    public function getProduit_conv()
    {
        return $this->produit;
    }

    /**
     * Set the value of produit
     *
     * @return  self
     */ 
    public function setProduit_conv($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Set the value of alimentation
     *
     * @return  self
     */ 
    public function setAlimentation_conv($alimentation)
    {
        $this->alimentation = $alimentation;

        return $this;
    }
}
?>
