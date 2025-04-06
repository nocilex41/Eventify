<?php

use Eventify\core\tpl;
use Eventify\models\menu;

$menu = menu::byId(1);
tpl::assign("menu",$menu);
tpl::viewAdmin("header");
?>