<?php

namespace Eventify\controllers\pages;

use Eventify\core\tpl;
use Eventify\models\event;

class pageHomeController{
    public function index(){
        $events = event::findAll();
        $headerEvents = event::byPopularityAndDate();
        tpl::assign("headerEvents",$headerEvents);
        tpl::assign("events",$events);

        tpl::assign("title","Accueil de Seabuck | Votre prestataire de goût");
        require "views/pages/home.php";
    }
}
?>

