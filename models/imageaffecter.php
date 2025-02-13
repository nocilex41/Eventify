<?php

namespace seaBuck\models;

use seaBuck\core\table;

class imageaffecter extends table {
    
    protected static $suffix = "_imageaffecter";

    private $id_prod_affect;
    private $id_image_affect;

    /*
    // Constructor
    public function __construct($id_prod_affect, $id_image_affect) {
        $this->id_prod_affect = $id_prod_affect;
        $this->id_image_affect = $id_image_affect;
    }
        */

    /**
     * Get the value of id_prod_affect
     */ 
    public function getId_prod_affect()
    {
        return $this->id_prod_affect;
    }

    /**
     * Set the value of id_prod_affect
     *
     * @return self
     */ 
    public function setId_prod_affect($id_prod_affect)
    {
        $this->id_prod_affect = $id_prod_affect;
        return $this;
    }

    /**
     * Get the value of id_image_affect
     */ 
    public function getId_image_affect()
    {
        return $this->id_image_affect;
    }

    /**
     * Set the value of id_image_affect
     *
     * @return self
     */ 
    public function setId_image_affect($id_image_affect)
    {
        $this->id_image_affect = $id_image_affect;
        return $this;
    }
}
?>