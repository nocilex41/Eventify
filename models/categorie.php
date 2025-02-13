<?php

namespace seaBuck\models;

use seaBuck\core\table;

class categorie extends table{
    private $id_cat; 
 	private $nom_cat;
 	private $slug_cat;
 	private $desc_cat;
 	private $id_parent_cat;
 	private $id_img_cat;

	protected static $suffix = "_cat";
	protected static $key = "id_cat"; // a faire à chaque model

	public $image;

	public function __construct(){
		$this->image = image::byId($this->id_img_cat);
	}

/*
      // Constructor
	  public function __construct($id_cat, $nom_cat, $slug_cat, $desc_cat, $id_parent_cat, $id_img_cat) {
        $this->id_cat = $id_cat;
        $this->nom_cat = $nom_cat;
        $this->slug_cat = $slug_cat;
        $this->desc_cat = $desc_cat;
        $this->id_parent_cat = $id_parent_cat;
        $this->id_img_cat = $id_img_cat;
    }
		*/
    /**
     * Get the value of id_cat
     */ 
    public function getId_cat()
    {
        return $this->id_cat;
    }

    /**
     * Set the value of id_cat
     *
     * @return  self
     */ 
    public function setId_cat($id_cat)
    {
        $this->id_cat = $id_cat;

        return $this;
    }

 	/**
 	 * Get the value of nom_cat
 	 */ 
 	public function getNom_cat()
 	{
 	 	return $this->nom_cat;
 	}

 	/**
 	 * Set the value of nom_cat
 	 *
 	 * @return  self
 	 */ 
 	public function setNom_cat($nom_cat)
 	{
 	 	$this->nom_cat = $nom_cat;

 	 	return $this;
 	}

 	/**
 	 * Get the value of slug_cat
 	 */ 
 	public function getSlug_cat()
 	{
 	 	return $this->slug_cat;
 	}

 	/**
 	 * Set the value of slug_cat
 	 *
 	 * @return  self
 	 */ 
 	public function setSlug_cat($slug_cat)
 	{
 	 	$this->slug_cat = $slug_cat;

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

 	/**
 	 * Get the value of id_parent_cat
 	 */ 
 	public function getId_parent_cat()
 	{
 	 	return $this->id_parent_cat;
 	}

 	/**
 	 * Set the value of id_parent_cat
 	 *
 	 * @return  self
 	 */ 
 	public function setId_parent_cat($id_parent_cat)
 	{
 	 	$this->id_parent_cat = $id_parent_cat;

 	 	return $this;
 	}

 	/**
 	 * Get the value of id_img_cat
 	 */ 
 	public function getId_img_cat()
 	{
 	 	return $this->id_img_cat;
 	}

 	/**
 	 * Set the value of id_img_cat
 	 *
 	 * @return  self
 	 */ 
 	public function setId_img_cat($id_img_cat)
 	{
 	 	$this->id_img_cat = $id_img_cat;

 	 	return $this;
 	}

    /**
     * Get the value of imageALaUne_cat
     */ 
    public function getImageALaUne_cat()
    {
        return $this->imageALaUne_cat;
    }

    /**
     * Get the value of page_cat
     */ 
    public function getPage_cat()
    {
        return $this->page_cat;
    }



	/**
	 * Get the value of parent_cat
	 */ 
	public function getParent_cat()
	{
		return $this->parent_cat;
	}




	/**
	 * Get the value of image
	 */ 
	public function getImage_cat()
	{
		return $this->image;
	}
}

?>