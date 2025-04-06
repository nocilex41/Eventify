<?php
/* Smarty version 5.4.3, created on 2025-04-06 11:14:58
  from 'file:views/sections/admin/header.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f262321d26f2_10718368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecb208d531cc1249e59aee1dc463e00bdd6fc60e' => 
    array (
      0 => 'views/sections/admin/header.html',
      1 => 1743938096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f262321d26f2_10718368 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections/admin';
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('title'));?>
</title>

    <!-- tailwind -->
    <?php echo '<script'; ?>
 src="https://unpkg.com/@tailwindcss/browser@4"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"><?php echo '</script'; ?>
>

    <!--jquery-->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"><?php echo '</script'; ?>
>

    <!--style less-->
    <link rel="stylesheet/less" type="text/css" href="assets/style/style.less" />
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/less" ><?php echo '</script'; ?>
>

    <!--slick diaporama-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    
    <!-- Slick JS -->
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"><?php echo '</script'; ?>
>

    <!--<link rel="stylesheet" href="assets/style/icomoon.css"> 
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
-->
</head>
<body>

  

<!-- HEADER-->


<!--  -->
  
    
   <!-- FIN HEADER--> <?php }
}
