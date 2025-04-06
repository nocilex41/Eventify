<?php

namespace Eventify\core;

class app{

    public static $rw=false;
    private static $html;

    public static $activObj = "";

    public static $db;

    public static $rooter;
    public static $dispatcher;

    public static function DB(){
        self::$db = database::getInstance("localhost","eventify","root","root");
    }

    public static function section($section){
        switch($section){
            case "header" :
                require("controllers/sections/header.php");
            break;
            case "footer" :
                require("controllers/sections/footer.php");
            break;
            case "login" :
                require("controllers/sections/login.php");
            break;
            case "hero" :
                require("controllers/sections/hero.php");
            break;
            case "search" :
                require("controllers/sections/search.php");
            break;
            case "sliderHome" :
                require("controllers/sections/sliderHome.php");
            break;
            case "headerEvent" :
                require("controllers/sections/headerEvent.php");
            break;
            case "register" :
                require("controllers/sections/register.php");
            break;
        }
    }

    public static function sectionAdmin($section){
        switch($section){
            case "header" :
                require("controllers/sections/admin/header.php");
            break;
            case "menu" :
                require("controllers/sections/admin/menu.php");
            break;
            case "footer" :
                require("controllers/sections/admin/footer.php");
            break;
        }
    }

    public static function page(){

        self::$rooter = new rooter();
        self::$rooter->addRoute("","Eventify\\controllers\\pages\\pageHomeController@index");
        self::$rooter->addRoute("login","Eventify\\controllers\\pages\\pageLoginController@index");
        self::$rooter->addRoute("evenement","Eventify\\controllers\\pages\\pageEventController@index");
        self::$rooter->addRoute("register","Eventify\\controllers\\pages\\pageRegisterController@index");
        self::$rooter->addRoute("categories","Eventify\\controllers\\pages\\pageCategoriesController@index");
        self::$rooter->addRoute("admin","Eventify\\controllers\\pages\\admin\\pageAdminHomeController@index");
        $p = tools::get("p");
        $route =  self::$rooter->getRoute($p);
        self::$dispatcher = new dispatcher();
        ob_start();
            self::$dispatcher->dispatch($route);
            self::$html = ob_get_contents();
        ob_end_clean();
    }

    public static function getHTML(){
        return self::$html;
    }

}

?>