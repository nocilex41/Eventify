<?php

namespace seaBuck\controllers\pages;

use seaBuck\core\tpl;
use seaBuck\core\tools;
use seaBuck\models\produit;
use seaBuck\models\categorie;

class pageCategoriesController{
    public function index(){
            $id = tools::get("id");//recup de l'id
            if($id){
                $categorie = categorie::byId($id) ;//recup en BDD du produit
                tpl::assign("title",$categorie->nom);
                tpl::assign("desc",$categorie->desc);
                tpl::assign("imageUrl",$categorie->image->url);
                tpl::assign("categorie",$categorie);


                $conditions=[
                    [
                        "champ"=>"id_cat_prod",
                        "op"=> "=",
                        "valeur" => $id
                    ]
                ];
                $produits = produit::specifique($conditions);
                //var_dump($produits);
                tpl::assign("produits",$produits);

                $conditions=[
                    [
                        "champ"=>"id_parent_cat",
                        "op"=> "=",
                        "valeur" => $id
                    ]
                ];
            }else{
                $conditions=[
                    [
                        "champ"=>"id_parent_cat",
                        "op"=> "IS",
                        "valeur" => "NULL"
                    ]
                ];
                tpl::assign("title","catégories");
                tpl::assign("desc","Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam unde et autem nam, necessitatibus cupiditate nobis temporibus. Dolorem debitis eius tenetur architecto natus, voluptatibus totam cum assumenda ad ipsum officia?");
                tpl::assign("imageUrl","purple-dream.png");
            }
            $categories = categorie::specifique($conditions);
            tpl::assign("categories",$categories);



            require "views/pages/categories.php";
    }
}
?>