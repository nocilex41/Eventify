<?php

namespace Eventify\core;

use Smarty\Smarty;

class tpl{

    private static ?Smarty $template = null; // stock l'objet smarty
    
    //init
    public static function init()
    {
        if (self::$template === null) {
            self::$template = new Smarty();
            self::assignGlobalVars();
        }
    }

    // Assigner des variables globales à Smarty
    private static function assignGlobalVars()
    {
        $session = Session::getInstance();
        self::$template->assign('isConnected', $session->get('user_id') ? true : false);
    }

    //assign
    public static function assign($key, $val)
    {
        self::init();
        self::$template->assign($key, $val);
    }

    //dislay
    public static function view($view)
    {
        self::init();
        self::$template->display("views/sections/$view.html");
    }

    public static function is_set($var)
    {
        self::init();
        return self::$template->getTemplateVars($var);
    }

}



?>