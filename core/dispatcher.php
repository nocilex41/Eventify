<?php

namespace Eventify\core;

use Eventify\controllers\pages\page404Controller;
use Eventify\controllers\pages\pageCategoriesController;
use Eventify\controllers\pages\pageHomeController;
use Eventify\controllers\pages\admin\pageAdminHomeController;
use Eventify\controllers\pages\pageProduitController;

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