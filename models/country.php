<?php

namespace Eventify\models;

use Eventify\core\app;
use Eventify\core\table;
use Eventify\core\tools;

class country extends table{
   
    protected static $suffix = "_country";
    protected static $key = "id_country"; // a faire à chaque model

    private $id_country;
    private $title_country;


    /**
     * Get the value of id_country
     */ 
    public function getId_country()
    {
        return $this->id_country;
    }


    /**
     * Get the value of title_country
     */ 
    public function getTitle_country()
    {
        return $this->title_country;
    }

    /**
     * Set the value of title_country
     *
     * @return  self
     */ 
    public function setTitle_country($title_country)
    {
        $this->title_country = $title_country;

        return $this;
    }
}


?>