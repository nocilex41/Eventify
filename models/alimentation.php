<?php

namespace seaBuck\models;

use seaBuck\core\table;
use seaBuck\core\tools;

class alimentation extends table {
    
    protected static $suffix = "_ali";
    protected static $key = "id_ali"; // a faire à chaque model

    private $id_ali;
    private $nom_ali;
    private $desc_ali;
    private $slug_ali;

    private $convient=[];

    public function __construct(){
        self::activObj($this);

        if(self::isInstance()){
        $conditions = [
            [
                "champ"=>"id_ingr_conv",
                "op"=>"=",
                "valeur"=>$this->id_ali,
            ]
            ];
        $this->convient = convient::specifique($conditions);
        }

        self::resetActivObj();
    }
    /*
    // Constructor
    public function __construct($id, $nom, $desc, $slug) {
        $this->id_ali = $id;
        $this->nom_ali = $nom;
        $this->desc_ali = $desc;
        $this->slug_ali = $slug;
    }*/

    /**
     * Get the value of id_ali
     */ 
    public function getId_ali() {
        return $this->id_ali;
    }

    /**
     * Get the value of nom_ali
     */ 
    public function getNom_ali() {
        return tools::nomPropre($this->nom_ali);
    }

    /**
     * Set the value of nom_ali
     *
     * @return self
     */ 
    public function setNom_ali($nom_ali) {
        $this->nom_ali = $nom_ali;
        return $this;
    }

    /**
     * Get the value of desc_ali
     */ 
    public function getDesc_ali() {
        return $this->desc_ali;
    }

    /**
     * Set the value of desc_ali
     *
     * @return self
     */ 
    public function setDesc_ali($desc_ali) {
        $this->desc_ali = $desc_ali;
        return $this;
    }

    /**
     * Get the value of slug_ali
     */ 
    public function getSlug_ali() {
        return $this->slug_ali;
    }

    /**
     * Set the value of slug_ali
     *
     * @return self
     */ 
    public function setSlug_ali($slug_ali) {
        $this->slug_ali = $slug_ali;
        return $this;
    }

    /**
     * Get the value of convient
     */ 
    public function getConvient_ali()
    {
        return $this->convient;
    }

    /**
     * Set the value of convient
     *
     * @return  self
     */ 
    public function setConvient_ali($convient)
    {
        $this->convient = $convient;

        return $this;
    }
}