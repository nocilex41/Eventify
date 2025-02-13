<?php

namespace seaBuck\models;

use seaBuck\core\table;

class ingredient extends table{

    protected static $suffix = "_ingre";
    protected static $key = "id_ingre"; // a faire à chaque model


    private $id_ingre;
    private $nom_ingre;
    private $slug_ingre;
    private $desc_ingre;
    private $allergies_ingre;

    private $contient=[];

    public function __construct(){
        self::activObj($this);

        if(self::isInstance()){
        $conditions = [
            [
                "champ"=>"id_ingr_cont",
                "op"=>"=",
                "valeur"=>$this->id_ingre,
            ]
            ];
        $this->contient = contient::specifique($conditions);
        }

        self::resetActivObj();
    }

/*
   // Constructor
   public function __construct($id_ingre, $nom_ingre, $slug_ingre, $desc_ingre, $allergies_ingre) {
    $this->id_ingre = $id_ingre;
    $this->nom_ingre = $nom_ingre;
    $this->slug_ingre = $slug_ingre;
    $this->desc_ingre = $desc_ingre;
    $this->allergies_ingre = $allergies_ingre;
}*/

    /**
     * Get the value of id_ingre
     */ 
    public function getId_ingre()
    {
        return $this->id_ingre;
    }

    /**
     * Set the value of id_ingre
     *
     * @return  self
     */ 
    public function setId_ingre($id_ingre)
    {
        $this->id_ingre = $id_ingre;

        return $this;
    }

    /**
     * Get the value of nom_ingre
     */ 
    public function getNom_ingre()
    {
        return $this->nom_ingre;
    }

    /**
     * Set the value of nom_ingre
     *
     * @return  self
     */ 
    public function setNom_ingre($nom_ingre)
    {
        $this->nom_ingre = $nom_ingre;

        return $this;
    }

    /**
     * Get the value of slug_ingre
     */ 
    public function getSlug_ingre()
    {
        return $this->slug_ingre;
    }

    /**
     * Set the value of slug_ingre
     *
     * @return  self
     */ 
    public function setSlug_ingre($slug_ingre)
    {
        $this->slug_ingre = $slug_ingre;

        return $this;
    }

    /**
     * Get the value of desc_ingre
     */ 
    public function getDesc_ingre()
    {
        return $this->desc_ingre;
    }

    /**
     * Set the value of desc_ingre
     *
     * @return  self
     */ 
    public function setDesc_ingre($desc_ingre)
    {
        $this->desc_ingre = $desc_ingre;

        return $this;
    }

    /**
     * Get the value of allergies_ingre
     */ 
    public function getAllergies_ingre()
    {
        return $this->allergies_ingre;
    }

    /**
     * Set the value of allergies_ingre
     *
     * @return  self
     */ 
    public function setAllergies_ingre($allergies_ingre)
    {
        $this->allergies_ingre = $allergies_ingre;

        return $this;
    }




    /**
     * Get the value of contient
     */ 
    public function getContient_ingre()
    {
        return $this->contient;
    }
}


?>