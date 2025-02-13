<?php

namespace Eventify\core;
use dateTime;

class tools{

    private static $_gets = [];

    private static $lang = "fr";
    private static $formats = [
        "fr" => "d/m/Y",
        "en" => "m/d/Y",
        "us" => "Y-m-d"
    ]; 
    //fx convert date en format 
    public static function formatDate($date){
        $theDate = new dateTime($date);
        $format = self::$formats[self::$lang];
        return $theDate->format($format);
    }


    public static function majPreLettre($str){
        return ucfirst($str);
    }

    public static function minuscule($str){
        return strtolower($str);
    }

    public static function nomPropre($str){
        $str = self::minuscule($str);
        $str = self::majPreLettre($str);
        return $str;
    }


    //recupérer automatiquement tous les GET
    // et les sécuriser dans une variable private $_gets
    public static function gets(){
        foreach($_GET as $key=>$value){
            self::$_gets[$key] = $value;
        }
    }
    public static function get($key){
        if(isset(self::$_gets[$key])){
            return self::$_gets[$key];
        }else{
            return null;
        }
    }





}

?>