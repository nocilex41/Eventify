<?php

namespace seaBuck\controllers\pages;

use seaBuck\core\tpl;

class pageHomeController{
    public function index(){
        tpl::assign("title","Accueil de Seabuck | Votre prestataire de goût");
        require "views/pages/home.php";
    }
}
?>

