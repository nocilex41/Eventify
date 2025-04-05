<?php

namespace Eventify\models;

use Eventify\core\app;
use Eventify\core\table;
use Eventify\core\tools;

class link extends table{
   
    protected static $suffix = "_link";
    protected static $key = "id_link"; // a faire à chaque model

    private $id_link;
    private $text_link;
    private $url_link;
    private $url_rw_link;
    private $order_link;
    private $id_menu_link;
   

    public function displayLink(){
       
        if(app::$rw){
            return $this->url_rw;
        }else{
            return $this->url;
        }
    }


    /**
     * Get the value of id_link
     */ 
    public function getId_link()
    {
        return $this->id_link;
    }

    /**
     * Get the value of text_link
     */ 
    public function getText_link()
    {
        return tools::nomPropre($this->text_link);
    }

    /**
     * Set the value of text_link
     *
     * @return  self
     */ 
    public function setTexte_link($text_link)
    {
        $this->text_link = $text_link;

        return $this;
    }

    /**
     * Get the value of url_link
     */ 
    public function getUrl_link()
    {
        return $this->url_link;
    }

    /**
     * Set the value of url_link
     *
     * @return  self
     */ 
    public function setUrl_link($url_link)
    {
        $this->url_link = $url_link;

        return $this;
    }

    /**
     * Get the value of url_rw_link
     */ 
    public function getUrl_rw_link()
    {
        return $this->url_rw_link;
    }

    /**
     * Set the value of url_rw_link
     *
     * @return  self
     */ 
    public function setUrl_rw_link($url_rw_link)
    {
        $this->url_rw_link = $url_rw_link;

        return $this;
    }

    /**
     * Get the value of order_link
     */ 
    public function getOrder_link()
    {
        return $this->order_link;
    }

    /**
     * Set the value of order_link
     *
     * @return  self
     */ 
    public function setOrder_link($order_link)
    {
        $this->order_link = $order_link;

        return $this;
    }

    /**
     * Get the value of id_menu_link
     */ 
    public function getId_menu_link()
    {
        return $this->id_menu_link;
    }

    /**
     * Set the value of id_menu_link
     *
     * @return  self
     */ 
    public function setId_menu_link($id_menu_link)
    {
        $this->id_menu_link = $id_menu_link;

        return $this;
    }
}


?>