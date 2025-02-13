<?php

namespace seaBuck\models;

use seaBuck\core\table;

class produit extends table{

    protected static $suffix = "_prod";
    protected static $key = "id_prod"; // a faire à chaque model

    //champs
    private $id_prod;
    private $nom_prod;
    private $slug_prod;
    private $desc_prod;
    private $texte_prod;
    private $img_prod;
    private $id_cat_prod;
    private $couleur_prod;

    private $image;
    private $categorie; //getCategorie_prod
    private $contient=[];
    private $convient=[];

    public function __construct(){
        self::activObj($this);
        $this->image = image::byId($this->img_prod);
        $this->categorie = categorie::byId($this->id_cat_prod);
    
        if(self::isInstance()){
            $conditions=[
                [
                    "champ"=>"id_prod_cont",
                    "op"=>"=",
                    "valeur"=>$this->id_prod
                ]
            ];
            $this->contient = contient::specifique($conditions);
            $conditions=[
                [
                    "champ"=>"id_prod_conv",
                    "op"=>"=",
                    "valeur"=>$this->id_prod
                ]
            ];
            $this->convient = convient::specifique($conditions);
        }

        self::resetActivObj();
    }

    /*
    public function __construct($id_prod, $nom_prod, $slug_prod, $desc_prod, $texte_prod, $img_prod, $id_cat_prod) {
        $this->id_prod = $id_prod;
        $this->nom_prod = $nom_prod;
        $this->slug_prod = $slug_prod;
        $this->desc_prod = $desc_prod;
        $this->texte_prod = $texte_prod;
        $this->img_prod = $img_prod;
        $this->id_cat_prod = $id_cat_prod;
    }
    */
    /**
     * Get the value of id_prod
     */ 
    public function getId_prod()
    {
        return $this->id_prod;
    }

    /**
     * Get the value of nom_prod
     */ 
    public function getNom_prod()
    {
        return $this->nom_prod;
    }

    /**
     * Set the value of nom_prod
     *
     * @return  self
     */ 
    public function setNom_prod($nom_prod)
    {
        $this->nom_prod = $nom_prod;

        return $this;
    }

    /**
     * Get the value of slug_prod
     */ 
    public function getSlug_prod()
    {
        return $this->slug_prod;
    }

    /**
     * Set the value of slug_prod
     *
     * @return  self
     */ 
    public function setSlug_prod($slug_prod)
    {
        $this->slug_prod = $slug_prod;

        return $this;
    }

    /**
     * Get the value of desc_prod
     */ 
    public function getDesc_prod()
    {
        return $this->desc_prod;
    }

    /**
     * Set the value of desc_prod
     *
     * @return  self
     */ 
    public function setDesc_prod($desc_prod)
    {
        $this->desc_prod = $desc_prod;

        return $this;
    }

    /**
     * Get the value of texte_prod
     */ 
    public function getTexte_prod()
    {
        return $this->texte_prod;
    }

    /**
     * Set the value of texte_prod
     *
     * @return  self
     */ 
    public function setTexte_prod($texte_prod)
    {
        $this->texte_prod = $texte_prod;

        return $this;
    }

    /**
     * Get the value of img_prod
     */ 
    public function getImg_prod()
    {
        return $this->img_prod;
    }

    /**
     * Set the value of img_prod
     *
     * @return  self
     */ 
    public function setImg_prod($img_prod)
    {
        $this->img_prod = $img_prod;

        return $this;
    }

    /**
     * Get the value of id_cat_prod
     */ 
    public function getId_cat_prod()
    {
        return $this->id_cat_prod;
    }

    /**
     * Set the value of id_cat_prod
     *
     * @return  self
     */ 
    public function setId_cat_prod($id_cat_prod)
    {
        $this->id_cat_prod = $id_cat_prod;

        return $this;
    }

    /**
     * Get the value of imageALaUne
     */ 
    public function getImageALaUne_prod()
    {
        return $this->imageALaUne_prod;
    }

   
    /**
     * Get the value of page_prod
     */ 
    public function getPage_prod()
    {
        return $this->page_prod;
    }

 

    /**
     * Get the value of composition_prod
     */ 
    public function getComposition_prod()
    {
        return $this->composition_prod;
    }

    /**
     * Get the value of categorie_prod
     */ 
    public function getCategorie_prod()
    {
        return $this->categorie;
    }

    /**
     * Get the value of image
     */ 
    public function getImage_prod()
    {
        return $this->image;
    }


    /**
     * Get the value of contient
     */ 
    public function getContient_prod()
    {
        return $this->contient;
    }

    /**
     * Get the value of couleur_prod
     */ 
    public function getCouleur_prod()
    {
        return $this->couleur_prod;
    }

    /**
     * Set the value of couleur_prod
     *
     * @return  self
     */ 
    public function setCouleur_prod($couleur_prod)
    {
        $this->couleur_prod = $couleur_prod;

        return $this;
    }

    /**
     * Get the value of convient
     */ 
    public function getConvient_prod()
    {
        return $this->convient;
    }

    /**
     * Set the value of convient
     *
     * @return  self
     */ 
    public function setConvient_prod($convient)
    {
        $this->convient = $convient;

        return $this;
    }
}


?>