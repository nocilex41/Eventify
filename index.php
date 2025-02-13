<?php

use Eventify\core\app;
use Eventify\core\tools;
ini_set("display_errors",1); //affichage des erreurs
require "vendor/autoload.php";
tools::gets();//sécuriser les GETs
app::DB();
app::page();
echo app::getHTML();
?>