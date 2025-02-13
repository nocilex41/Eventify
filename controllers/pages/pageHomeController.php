<?php

namespace Eventify\controllers\pages;

use Eventify\core\tpl;

class pageHomeController{
    public function index(){
        tpl::assign("title","Accueil de Seabuck | Votre prestataire de goût");
        require "views/pages/home.php";
    }
}
?>

