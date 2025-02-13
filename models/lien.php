<?php

namespace seaBuck\models;

use seaBuck\core\app;
use seaBuck\core\table;
use seaBuck\core\tools;

class lien extends table{
   
    protected static $suffix = "_lien";
    protected static $key = "id_lien"; // a faire à chaque model

    private $id_lien;
    private $texte_lien;
    private $url_lien;
    private $url_rw_lien;
    private $order_lien;
    private $id_menu_lien;

    //constructor
    /*
    public function __construct($id,$text,$url,$url_rw,$order,$idMenu){
         $this->id_lien = $id;
         $this->texte_lien = $text;
         $this->url_lien = $url;
         $this->url_rw_lien = $url_rw;
         $this->order_lien = $order;
         $this->id_menu_lien = $idMenu;
    }
    */
   

    public function afficherLien(){
       
        if(app::$rw){
            return $this->url_rw;
        }else{
            return $this->url;
        }
    }


    /**
     * Get the value of id_lien
     */ 
    public function getId_lien()
    {
        return $this->id_lien;
    }

    /**
     * Get the value of texte_lien
     */ 
    public function getTexte_lien()
    {
        return tools::nomPropre($this->texte_lien);
    }

    /**
     * Set the value of texte_lien
     *
     * @return  self
     */ 
    public function setTexte_lien($texte_lien)
    {
        $this->texte_lien = $texte_lien;

        return $this;
    }

    /**
     * Get the value of url_lien
     */ 
    public function getUrl_lien()
    {
        return $this->url_lien;
    }

    /**
     * Set the value of url_lien
     *
     * @return  self
     */ 
    public function setUrl_lien($url_lien)
    {
        $this->url_lien = $url_lien;

        return $this;
    }

    /**
     * Get the value of url_rw_lien
     */ 
    public function getUrl_rw_lien()
    {
        return $this->url_rw_lien;
    }

    /**
     * Set the value of url_rw_lien
     *
     * @return  self
     */ 
    public function setUrl_rw_lien($url_rw_lien)
    {
        $this->url_rw_lien = $url_rw_lien;

        return $this;
    }

    /**
     * Get the value of order_lien
     */ 
    public function getOrder_lien()
    {
        return $this->order_lien;
    }

    /**
     * Set the value of order_lien
     *
     * @return  self
     */ 
    public function setOrder_lien($order_lien)
    {
        $this->order_lien = $order_lien;

        return $this;
    }

    /**
     * Get the value of id_menu_lien
     */ 
    public function getId_menu_lien()
    {
        return $this->id_menu_lien;
    }

    /**
     * Set the value of id_menu_lien
     *
     * @return  self
     */ 
    public function setId_menu_lien($id_menu_lien)
    {
        $this->id_menu_lien = $id_menu_lien;

        return $this;
    }
}


?>