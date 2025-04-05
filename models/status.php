<?php

namespace Eventify\models;

use Eventify\core\app;
use Eventify\core\table;
use Eventify\core\tools;

class status extends table{
   
    protected static $suffix = "_status";
    protected static $key = "id_status"; // a faire à chaque model

    private $id_status;
    private $title_status;


    /**
     * Get the value of id_status
     */ 
    public function getId_status()
    {
        return $this->id_status;
    }


    /**
     * Get the value of title_status
     */ 
    public function getTitle_status()
    {
        return $this->title_status;
    }

    /**
     * Set the value of title_status
     *
     * @return  self
     */ 
    public function setTitle_status($title_status)
    {
        $this->title_status = $title_status;

        return $this;
    }
}


?>