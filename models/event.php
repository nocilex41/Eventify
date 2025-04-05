<?php

namespace Eventify\models;

use Eventify\core\app;
use Eventify\core\table;
use Eventify\core\tools;
use Eventify\models\category;

class event extends table{
   
    protected static $suffix = "_event";
    protected static $key = "id_event"; // a faire à chaque model

    private $id_event;
    private $title_event;
    private $desc_event;
    private $img_event;
    private $img_header_event;
    private $age_min_event;
    private $category_id_event;
    private $country_id_event;
    private $place_event;
    private $latitude_event;
    private $longitude_event;
    private $organizer_id_event;
    private $price_event;
    private $status_id_event;
    private $visibility_event;
    private $slug_event;
    private $popularity_event;
    private $created_at_event;
    private $updated_at_event;

    private $category;
    private $country;
    private $organizer;
    private $status;

    public function __construct(){
        self::activObj($this);
        // $this->image = image::byId($this->img_prod);
        $this->category = category::byId($this->category_id_event);
        $this->country = country::byId($this->country_id_event);
        $this->status = status::byId($this->status_id_event);
        $this->organizer = user::byId($this->organizer_id_event);
        self::resetActivObj();
    }
    

    /**
     * Get the value of id_event
     */ 
    public function getId_event()
    {
        return $this->id_event;
    }

   

    /**
     * Get the value of title_event
     */ 
    public function getTitle_event()
    {
        return $this->title_event;
    }

    /**
     * Set the value of title_event
     *
     * @return  self
     */ 
    public function setTitle_event($title_event)
    {
        $this->title_event = $title_event;

        return $this;
    }

    /**
     * Get the value of desc_event
     */ 
    public function getDesc_event()
    {
        return $this->desc_event;
    }

    /**
     * Set the value of desc_event
     *
     * @return  self
     */ 
    public function setDesc_event($desc_event)
    {
        $this->desc_event = $desc_event;

        return $this;
    }

    /**
     * Get the value of img_event
     */ 
    public function getImg_event()
    {
        return $this->img_event;
    }

    /**
     * Set the value of img_event
     *
     * @return  self
     */ 
    public function setImg_event($img_event)
    {
        $this->img_event = $img_event;

        return $this;
    }

    /**
     * Get the value of img_header_event
     */ 
    public function getImg_header_event()
    {
        return $this->img_header_event;
    }

    /**
     * Set the value of img_header_event
     *
     * @return  self
     */ 
    public function setImg_header_event($img_header_event)
    {
        $this->img_header_event = $img_header_event;

        return $this;
    }

    /**
     * Get the value of age_min_event
     */ 
    public function getAge_min_event()
    {
        return $this->age_min_event;
    }

    /**
     * Set the value of age_min_event
     *
     * @return  self
     */ 
    public function setAge_min_event($age_min_event)
    {
        $this->age_min_event = $age_min_event;

        return $this;
    }

    /**
     * Get the value of category_id_event
     */ 
    public function getCategory_id_event()
    {
        return $this->category_id_event;
    }

    /**
     * Set the value of category_id_event
     *
     * @return  self
     */ 
    public function setCategory_id_event($category_id_event)
    {
        $this->category_id_event = $category_id_event;

        return $this;
    }

    /**
     * Get the value of country_id_event
     */ 
    public function getCountry_id_event()
    {
        return $this->country_id_event;
    }

    /**
     * Set the value of country_id_event
     *
     * @return  self
     */ 
    public function setCountry_id_event($country_id_event)
    {
        $this->country_id_event = $country_id_event;

        return $this;
    }

    /**
     * Get the value of place_event
     */ 
    public function getPlace_event()
    {
        return $this->place_event;
    }

    /**
     * Set the value of place_event
     *
     * @return  self
     */ 
    public function setPlace_event($place_event)
    {
        $this->place_event = $place_event;

        return $this;
    }

    /**
     * Get the value of latitude_event
     */ 
    public function getLatitude_event()
    {
        return $this->latitude_event;
    }

    /**
     * Set the value of latitude_event
     *
     * @return  self
     */ 
    public function setLatitude_event($latitude_event)
    {
        $this->latitude_event = $latitude_event;

        return $this;
    }

    /**
     * Get the value of longitude_event
     */ 
    public function getLongitude_event()
    {
        return $this->longitude_event;
    }

    /**
     * Set the value of longitude_event
     *
     * @return  self
     */ 
    public function setLongitude_event($longitude_event)
    {
        $this->longitude_event = $longitude_event;

        return $this;
    }

    /**
     * Get the value of organizer_id_event
     */ 
    public function getOrganizer_id_event()
    {
        return $this->organizer_id_event;
    }

    /**
     * Set the value of organizer_id_event
     *
     * @return  self
     */ 
    public function setOrganizer_id_event($organizer_id_event)
    {
        $this->organizer_id_event = $organizer_id_event;

        return $this;
    }

    /**
     * Get the value of price_event
     */ 
    public function getPrice_event()
    {
        return $this->price_event;
    }

    /**
     * Set the value of price_event
     *
     * @return  self
     */ 
    public function setPrice_event($price_event)
    {
        $this->price_event = $price_event;

        return $this;
    }

    /**
     * Get the value of status_id_event
     */ 
    public function getStatus_id_event()
    {
        return $this->status_id_event;
    }

    /**
     * Set the value of status_id_event
     *
     * @return  self
     */ 
    public function setStatus_id_event($status_id_event)
    {
        $this->status_id_event = $status_id_event;

        return $this;
    }

    /**
     * Get the value of visibility_event
     */ 
    public function getVisibility_event()
    {
        return $this->visibility_event;
    }

    /**
     * Set the value of visibility_event
     *
     * @return  self
     */ 
    public function setVisibility_event($visibility_event)
    {
        $this->visibility_event = $visibility_event;

        return $this;
    }

    /**
     * Get the value of slug_event
     */ 
    public function getSlug_event()
    {
        return $this->slug_event;
    }

    /**
     * Set the value of slug_event
     *
     * @return  self
     */ 
    public function setSlug_event($slug_event)
    {
        $this->slug_event = $slug_event;

        return $this;
    }

    /**
     * Get the value of popularity_event
     */ 
    public function getPopularity_event()
    {
        return $this->popularity_event;
    }

    /**
     * Set the value of popularity_event
     *
     * @return  self
     */ 
    public function setPopularity_event($popularity_event)
    {
        $this->popularity_event = $popularity_event;

        return $this;
    }

    /**
     * Get the value of created_at_event
     */ 
    public function getCreated_at_event()
    {
        return $this->created_at_event;
    }

    /**
     * Set the value of created_at_event
     *
     * @return  self
     */ 
    public function setCreated_at_event($created_at_event)
    {
        $this->created_at_event = $created_at_event;

        return $this;
    }

    /**
     * Get the value of updated_at_event
     */ 
    public function getUpdated_at_event()
    {
        return $this->updated_at_event;
    }

    /**
     * Set the value of updated_at_event
     *
     * @return  self
     */ 
    public function setUpdated_at_event($updated_at_event)
    {
        $this->updated_at_event = $updated_at_event;

        return $this;
    }
}


?>