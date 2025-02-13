<?php

namespace Eventify\core;

class autoloader{

    public static function register(){
        spl_autoload_register(["autoloader","autoload"]);
    }

    public static function autoload($class){
        if(file_exists("core/$class.php")){
            require("core/$class.php");
        }
        if(file_exists("models/$class.php")){
            require("models/$class.php");
        }
        if(file_exists("controllers/pages/$class.php")){
            require "controllers/pages/$class.php";
        }
    }

}

autoloader::register();


?>