<?php

namespace Eventify\models;

use Eventify\core\app;
use Eventify\core\table;
use Eventify\core\tools;

class event_date extends table{
   
    protected static $suffix = "_ed";
    protected static $key = "id_ed"; // a faire à chaque model

    private $id_ed;
    private $id_event_ed;
    private $date_ed;
    private $start_ed;
    private $end_ed;
    private $participants_max_ed;

    /**
     * Get the value of id_cat
     */ 
    public function getId_ed()
    {
        return $this->id_ed;
    }


    /**
     * Get the value of id_event_ed
     */ 
    public function getId_event_ed()
    {
        return $this->id_event_ed;
    }

    /**
     * Set the value of id_event_ed
     *
     * @return  self
     */ 
    public function setId_event_ed($id_event_ed)
    {
        $this->id_event_ed = $id_event_ed;

        return $this;
    }

    /**
     * Get the value of date_ed
     */ 
    public function getDate_ed()
    {
        return $this->date_ed;
    }

    /**
     * Set the value of date_ed
     *
     * @return  self
     */ 
    public function setDate_ed($date_ed)
    {
        $this->date_ed = $date_ed;

        return $this;
    }

    /**
     * Get the value of start_ed
     */ 
    public function getStart_ed()
    {
        return $this->start_ed;
    }

    /**
     * Set the value of start_ed
     *
     * @return  self
     */ 
    public function setStart_ed($start_ed)
    {
        $this->start_ed = $start_ed;

        return $this;
    }

    /**
     * Get the value of end_ed
     */ 
    public function getEnd_ed()
    {
        return $this->end_ed;
    }

    /**
     * Set the value of end_ed
     *
     * @return  self
     */ 
    public function setEnd_ed($end_ed)
    {
        $this->end_ed = $end_ed;

        return $this;
    }

    /**
     * Get the value of participants_max_ed
     */ 
    public function getParticipants_max_ed()
    {
        return $this->participants_max_ed;
    }

    /**
     * Set the value of participants_max_ed
     *
     * @return  self
     */ 
    public function setParticipants_max_ed($participants_max_ed)
    {
        $this->participants_max_ed = $participants_max_ed;

        return $this;
    }
}


?>