<?php

namespace seaBuck\core;

use PDO;
use PDOException;

class database{

    private $serverName; //hote
    private $bdd;       //nom de la bdd
    private $userName;  //utilisateur
    private $psw;       //mot de passe

    private $db;        //variable conservant la connexion à la BDD

    private static $_instance;

private function __construct($hote,$dbName,$user,$motDePasse){

    $this->serverName   = $hote;
    $this->bdd          = $dbName;
    $this->userName     = $user;
    $this->psw          = $motDePasse;

    try{
        $this->db = new PDO("mysql:host=$this->serverName;dbname=$this->bdd",$this->userName,$this->psw);
    }catch(PDOException $erreur){
        echo "erreur";
        echo $erreur->getMessage();
    }
}

public static function getInstance($hote,$dbName,$user,$motDePasse){
    if(is_null(self::$_instance)){
        self::$_instance = new database($hote,$dbName,$user,$motDePasse);
    }
    return self::$_instance;
}

public function query($sql,$class){
    $rst = $this->db->query($sql);
    return $rst->fetchAll(PDO::FETCH_CLASS,$class);
}

public function prepare($sql,$data,$class){
    $rst = $this->db->prepare($sql);
    $rst->execute($data);
    return $rst->fetchAll(PDO::FETCH_CLASS,$class);
}



}

?>