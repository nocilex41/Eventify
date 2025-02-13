<?php

namespace seaBuck\core;

use seaBuck\controllers\pages\page404Controller;
use seaBuck\controllers\pages\pageCategoriesController;
use seaBuck\controllers\pages\pageHomeController;
use seaBuck\controllers\pages\pageProduitController;

class dispatcher{
    public function dispatch($route){
        if(!$route){
            $this->sendNotFound();
        }else{
            [$controllerName,$method] = explode("@",$route);
            $controller = new $controllerName();
            $controller->$method();
        }
    }
    public function sendNotFound(){
        header("HTTP/1.0 404 Not Found");
        $controller = new page404Controller();
        $controller->index();
    }
}


?>