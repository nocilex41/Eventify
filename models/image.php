<?php

namespace Eventify\models;

use Eventify\core\table;

class image extends table{

    protected static $suffix = "_image";
    protected static $key = "id_image"; // a faire à chaque model

    private $id_image;
    private $name_image;
    private $alt_image;
    private $url_image;
    private $slug_image;


    /**
     * Get the value of id_image
     */ 
    public function getId_image()
    {
        return $this->id_image;
    }

    /**
     * Set the value of id_image
     *
     * @return  self
     */ 
    public function setId_image($id_image)
    {
        $this->id_image = $id_image;

        return $this;
    }

    /**
     * Get the value of nom_image
     */ 
    public function getName_image()
    {
        return $this->name_image;
    }

    /**
     * Set the value of nom_image
     *
     * @return  self
     */ 
    public function setName_image($name_image)
    {
        $this->name_image = $name_image;

        return $this;
    }

    /**
     * Get the value of alt_image
     */ 
    public function getAlt_image()
    {
        return $this->alt_image;
    }

    /**
     * Set the value of alt_image
     *
     * @return  self
     */ 
    public function setAlt_image($alt_image)
    {
        $this->alt_image = $alt_image;

        return $this;
    }

    /**
     * Get the value of url_image
     */ 
    public function getUrl_image()
    {
        return $this->url_image;
    }

    /**
     * Set the value of url_image
     *
     * @return  self
     */ 
    public function setUrl_image($url_image)
    {
        $this->url_image = $url_image;

        return $this;
    }

    /**
     * Get the value of slug_image
     */ 
    public function getSlug_image()
    {
        return $this->slug_image;
    }

    /**
     * Set the value of slug_image
     *
     * @return  self
     */ 
    public function setSlug_image($slug_image)
    {
        $this->slug_image = $slug_image;

        return $this;
    }


    public function getTag_image($cl=""){
        echo '<img src="assets/imgs/'.$this->url_image.'" class="imgProduct '.$cl.'" alt="'.$this->alt.'">';
    }
    public function fullUrl($ch=""){
        return $ch."assets/imgs/".$this->url_image;
    }

}



?>