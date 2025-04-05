<?php

namespace Eventify\models;

use Eventify\core\app;
use Eventify\core\table;
use Eventify\core\tools;

class user extends table{
   
    protected static $suffix = "_user";
    protected static $key = "id_user"; // a faire à chaque model

    private $id_user;
    private $email_user;
    private $password_user;
    private $roles_user;
    private $username_user;
    private $first_name_user;
    private $last_name_user;
    private $is_verified_user;
    private $confirmation_token_user;
    private $reset_token_user;
    private $avatar_user;
    private $created_at_user;
    private $updated_at_user;
    

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Get the value of email_user
     */ 
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     *
     * @return  self
     */ 
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of password_user
     */ 
    public function getPassword_user()
    {
        return $this->password_user;
    }

    /**
     * Set the value of password_user
     *
     * @return  self
     */ 
    public function setPassword_user($password_user)
    {
        $this->password_user = $password_user;

        return $this;
    }

    /**
     * Get the value of roles_user
     */ 
    public function getRoles_user()
    {
        return $this->roles_user;
    }

    /**
     * Set the value of roles_user
     *
     * @return  self
     */ 
    public function setRoles_user($roles_user)
    {
        $this->roles_user = $roles_user;

        return $this;
    }

    /**
     * Get the value of username_user
     */ 
    public function getUsername_user()
    {
        return $this->username_user;
    }

    /**
     * Set the value of username_user
     *
     * @return  self
     */ 
    public function setUsername_user($username_user)
    {
        $this->username_user = $username_user;

        return $this;
    }

    /**
     * Get the value of first_name_user
     */ 
    public function getFirst_name_user()
    {
        return $this->first_name_user;
    }

    /**
     * Set the value of first_name_user
     *
     * @return  self
     */ 
    public function setFirst_name_user($first_name_user)
    {
        $this->first_name_user = $first_name_user;

        return $this;
    }

    /**
     * Get the value of last_name_user
     */ 
    public function getLast_name_user()
    {
        return $this->last_name_user;
    }

    /**
     * Set the value of last_name_user
     *
     * @return  self
     */ 
    public function setLast_name_user($last_name_user)
    {
        $this->last_name_user = $last_name_user;

        return $this;
    }

    /**
     * Get the value of is_verified_user
     */ 
    public function getIs_verified_user()
    {
        return $this->is_verified_user;
    }

    /**
     * Set the value of is_verified_user
     *
     * @return  self
     */ 
    public function setIs_verified_user($is_verified_user)
    {
        $this->is_verified_user = $is_verified_user;

        return $this;
    }

    /**
     * Get the value of confirmation_token_user
     */ 
    public function getConfirmation_token_user()
    {
        return $this->confirmation_token_user;
    }

    /**
     * Set the value of confirmation_token_user
     *
     * @return  self
     */ 
    public function setConfirmation_token_user($confirmation_token_user)
    {
        $this->confirmation_token_user = $confirmation_token_user;

        return $this;
    }

    /**
     * Get the value of reset_token_user
     */ 
    public function getReset_token_user()
    {
        return $this->reset_token_user;
    }

    /**
     * Set the value of reset_token_user
     *
     * @return  self
     */ 
    public function setReset_token_user($reset_token_user)
    {
        $this->reset_token_user = $reset_token_user;

        return $this;
    }

    /**
     * Get the value of avatar_user
     */ 
    public function getAvatar_user()
    {
        return $this->avatar_user;
    }

    /**
     * Set the value of avatar_user
     *
     * @return  self
     */ 
    public function setAvatar_user($avatar_user)
    {
        $this->avatar_user = $avatar_user;

        return $this;
    }

    /**
     * Get the value of created_at_user
     */ 
    public function getCreated_at_user()
    {
        return $this->created_at_user;
    }

    /**
     * Set the value of created_at_user
     *
     * @return  self
     */ 
    public function setCreated_at_user($created_at_user)
    {
        $this->created_at_user = $created_at_user;

        return $this;
    }

    /**
     * Get the value of updated_at_user
     */ 
    public function getUpdated_at_user()
    {
        return $this->updated_at_user;
    }

    /**
     * Set the value of updated_at_user
     *
     * @return  self
     */ 
    public function setUpdated_at_user($updated_at_user)
    {
        $this->updated_at_user = $updated_at_user;

        return $this;
    }
}


?>