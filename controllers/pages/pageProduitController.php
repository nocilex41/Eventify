<?php

namespace seaBuck\controllers\pages;

use seaBuck\core\tpl;
use seaBuck\core\tools;
use seaBuck\models\produit;

class pageProduitController{
    public function index(){
$id = tools::get("id");//recup de l'id
$produit= produit::byId($id);//recup en BDD du produit

tpl::assign("title",$produit->nom);
tpl::assign("produit",$produit);

require "views/pages/produit.php";

    }
}
?>