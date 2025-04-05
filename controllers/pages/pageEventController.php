<?php

namespace Eventify\controllers\pages;

use Eventify\core\tpl;
use Eventify\models\event;
use Eventify\core\tools;

class pageEventController{
    public function index(){
        $id = tools::get("id");//recup de l'id
        // tools::dump($id);
            if($id){
                $event = event::byId($id);
                // tools::dump($event->title);
                tpl::assign("event",$event);

            //     $categorie = categorie::byId($id) ;//recup en BDD du produit
            //     tpl::assign("title",$categorie->nom);
            //     tpl::assign("desc",$categorie->desc);
            //     tpl::assign("imageUrl",$categorie->image->url);
            //     tpl::assign("categorie",$categorie);


            //     $conditions=[
            //         [
            //             "champ"=>"id_cat_prod",
            //             "op"=> "=",
            //             "valeur" => $id
            //         ]
            //     ];
            //     $produits = produit::specifique($conditions);
            //     //var_dump($produits);
            //     tpl::assign("produits",$produits);

            //     $conditions=[
            //         [
            //             "champ"=>"id_parent_cat",
            //             "op"=> "=",
            //             "valeur" => $id
            //         ]
            //     ];
            }

        tpl::assign("title","Accueil de Seabuck | Votre prestataire de goût");
        require "views/pages/event.php";
    }
}
?>

