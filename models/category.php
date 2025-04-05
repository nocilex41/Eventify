<?php

namespace Eventify\models;

use Eventify\core\app;
use Eventify\core\table;
use Eventify\core\tools;

class category extends table{
   
    protected static $suffix = "_cat";
    protected static $key = "id_cat"; // a faire à chaque model

    private $id_cat;
    private $title_cat;
    private $desc_cat;

    /**
     * Get the value of id_cat
     */ 
    public function getId_cat()
    {
        return $this->id_cat;
    }


    

    /**
     * Get the value of title_cat
     */ 
    public function getTitle_cat()
    {
        return $this->title_cat;
    }

    /**
     * Set the value of title_cat
     *
     * @return  self
     */ 
    public function setTitle_cat($title_cat)
    {
        $this->title_cat = $title_cat;

        return $this;
    }

    /**
     * Get the value of desc_cat
     */ 
    public function getDesc_cat()
    {
        return $this->desc_cat;
    }

    /**
     * Set the value of desc_cat
     *
     * @return  self
     */ 
    public function setDesc_cat($desc_cat)
    {
        $this->desc_cat = $desc_cat;

        return $this;
    }
}


?>