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
       //self::$db = new database("localhost","eventify","root","root");
    }

public static function section($section){
    switch($section){
        case "header" :
            require("controllers/sections/header.php");
        break;
        case "intro" :
            require("controllers/sections/intro.php");
        break;
        case "intro_produit" :
            require("controllers/sections/intro_produit.php");
        break;
        case "intro_categorie" :
            require("controllers/sections/intro_categorie.php");
        break;
        case "categories" :
            require("controllers/sections/categories.php");
        break;
        case "produits" :
            require("controllers/sections/produits.php");
        break;
        case "infos_produit" :
            require("controllers/sections/infos_produit.php");
        break;
        case "footer" :
            require("controllers/sections/footer.php");
        break;
    }
}

public static function page(){

    self::$rooter = new rooter();
    self::$rooter->addRoute("","Eventify\\controllers\\pages\\pageHomeController@index");
    self::$rooter->addRoute("produit","Eventify\\controllers\\pages\\pageProduitController@index");
    self::$rooter->addRoute("categories","Eventify\\controllers\\pages\\pageCategoriesController@index");
    $p = tools::get("p");
    $route =  self::$rooter->getRoute($p);
    self::$dispatcher = new dispatcher();
    ob_start();
        self::$dispatcher->dispatch($route);
        self::$html = ob_get_contents();
    ob_end_clean();
}

public static function page_old(){

    tpl::assign("title","Seabuck | Votre serviteur de goût");

    $p = tools::get("p");
    
    ob_start();// stop l'affichage du html et 
               // le placer dans une mémoire
    switch($p){
        case "" :
            require "controllers/pages/home.php";
        break;
        case "produit" :
            require "controllers/pages/produit.php";
        break;
        case "categories" :
            require "controllers/pages/categories.php";
        break;
        case "panier" :
            require "controllers/pages/panier.php";
        break;
        default :
            require "controllers/pages/404.php";
        break;
    }
    self::$html = ob_get_contents();
    //apperler + tard du code pour minifier
    ob_end_clean();
}

    public static function getHTML(){
        return self::$html;
    }

}

?>