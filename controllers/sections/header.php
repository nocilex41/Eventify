<?php

use seaBuck\core\tpl;
use seaBuck\models\menu;
/** V1  */
/*
$liens = [];
$liens[] = new lien(1,"accUeil"     ,"./"           ,"",0,0);
$liens[] = new lien(2,"Produit"     ,"?p=produit"   ,"",0,0);
$liens[] = new lien(3,"Categories"  ,"?p=categories","",0,0);
$liens[] = new lien(4,"Panier"      ,"?p=panier"    ,"",0,0);
*/
// V2
//$liens = lien::tous();
// V3
/*
$conditions=[
    [
        "champ"=>"id_menu_lien",
        "op"=> "=",
        "valeur" => 1
    ]
    ];
$liens = lien::specifique($conditions);
*/
//v4
/*
$conditions=[
    [
        "champ"=>"position_menu",
        "op"=> "=",
        "valeur" => "header"
    ]
    ];
$menus = menu::onlyOne($conditions);
*/
//V5
$menu = menu::byId(1);
//var_dump($menu);
//var_dump($menu->liens);
tpl::assign("menu",$menu);
tpl::view("header");
//require("views/sections/header.php");
?>