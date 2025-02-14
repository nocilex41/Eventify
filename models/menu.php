<?php

namespace Eventify\models;

use Eventify\core\table;

class menu extends table{

    protected static $suffix = "_menu";
    protected static $key = "id_menu"; // a faire à chaque model

    private $id_menu;
    private $name_menu;
    private $position_menu;

    private $links=[];


public function __construct(){
    $conditions=[
        [
            "champ"=>"id_menu_link",
            "op"=> "=",
            "valeur" => $this->id_menu
        ]
        ];
    $this->links = link::specifique($conditions);
}


    /**
     * Get the value of id_menu
     */ 
    public function getId_menu()
    {
        return $this->id_menu;
    }

    /**
     * Set the value of id_menu
     *
     * @return  self
     */ 
    public function setId_menu($id_menu)
    {
        $this->id_menu = $id_menu;

        return $this;
    }

    /**
     * Get the value of name_menu
     */ 
    public function getName_menu()
    {
        return $this->name_menu;
    }

    /**
     * Set the value of name_menu
     *
     * @return  self
     */ 
    public function setName_menu($name_menu)
    {
        $this->name_menu = $name_menu;

        return $this;
    }

    /**
     * Get the value of position_menu
     */ 
    public function getPosition_menu()
    {
        return $this->position_menu;
    }

    /**
     * Set the value of position_menu
     *
     * @return  self
     */ 
    public function setPosition_menu($position_menu)
    {
        $this->position_menu = $position_menu;

        return $this;
    }



    /**
     * Get the value of links
     */ 
    public function getLinks_menu()
    {
        return $this->links;
    }

}
?>