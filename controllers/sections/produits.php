<?php

use seaBuck\core\tpl;
use seaBuck\models\produit;
if(!tpl::is_set("produits")){
    $produits = produit::tous();
    tpl::assign("produits",$produits);
}

tpl::view("produits");
//require("views/sections/produits.php");
?>