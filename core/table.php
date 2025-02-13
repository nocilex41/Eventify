<?php

namespace Eventify\core;

class table{

    public function __get($variable){
        //getTexte_lien
        $methode = "get".ucfirst($variable).static::$suffix;
        return $this->$methode();
    }

    // toutes les fx liées à la base
    public static function tous(){
        $class = get_called_class(); 
        if(strripos($class,"\\")){
            $table = substr($class,strripos($class,"\\")+1);
        } else {
            $table = $class;
        }
        return app::$db->query("select * from $table",$class);
     }


 public static function specifique($conditions){
    $class = get_called_class(); 
    if(strripos($class,"\\")){
        $table = substr($class,strripos($class,"\\")+1);
    } else {
        $table = $class;
    }
    $data=[];
    $sql = "select * from $table where ";
    foreach($conditions as $key=>$condi){
      $champs = $condi["champ"];
      $champs_key = ":".$condi["champ"]."_".$key; 
      $op = $condi["op"];
      $valeur = $condi["valeur"];
      if($valeur=="NULL"){$valeur=null;}
      $connect = isset($condi["connect"]) ? $condi["connect"] : "";
      $sql .= " $champs $op $champs_key $connect ";
      $data[$champs_key] = $valeur;
    }
    return app::$db->prepare($sql,$data,$class);
 }

 public static function onlyOne($conditions){
    $class = get_called_class();
    return $class::specifique($conditions)[0];
 }
 
 public static function byId($id){
    $class = get_called_class();
    $conditions=[
        [
            "champ"=>$class::$key,
            "op"=> "=",
            "valeur" => $id
        ]
        ];
    return $class::onlyOne($conditions);

 }


 public static function activObj($obj){
    if(app::$activObj==""){
        app::$activObj = $obj;
    }
 }

 public static function isInstance($class=""){
    if($class==""){
        $class = get_called_class();
    }
    return app::$activObj instanceof $class;
 }

 public static function resetActivObj(){
    $class = get_called_class();
    if(app::$activObj instanceof $class){
        app::$activObj = "";
    }
 }

 
}



?>