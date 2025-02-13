<?php
/* Smarty version 4.5.5, created on 2025-02-12 10:35:01
  from '/Applications/MAMP/htdocs/seabuck-disii/views/sections/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67ac79553d63c4_47193471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '667e5b1d971baf40b9ad1e72d4f1fa2109b325c2' => 
    array (
      0 => '/Applications/MAMP/htdocs/seabuck-disii/views/sections/header.html',
      1 => 1739356500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ac79553d63c4_47193471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/seabuck-disii/smarty-4.5.5/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value);?>
</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"><?php echo '</script'; ?>
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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" href="assets/style/icomoon.css">
    <!--
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
-->
</head>
<body>

<!-- HEADER-->
    <nav class="navbar navbar-expand-lg sticky-top" id="nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="./">
            <img src="assets/imgs/logo-seabuck.svg" width="70" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value->liens, 'lien');
$_smarty_tpl->tpl_vars['lien']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lien']->value) {
$_smarty_tpl->tpl_vars['lien']->do_else = false;
?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['lien']->value->afficherLien();?>
"><?php echo $_smarty_tpl->tpl_vars['lien']->value->texte;?>
</a>
              </li>
           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
              <button class="btn btn-search icon-search" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
   <!-- FIN HEADER--> <?php }
}
