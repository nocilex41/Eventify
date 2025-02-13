<?php
/* Smarty version 5.4.3, created on 2025-02-13 15:27:19
  from 'file:views/sections/produits.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ae0f579a8b53_58609045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1c3ae45c8592246e82c84a78b55f9a8d1e93e64' => 
    array (
      0 => 'views/sections/produits.html',
      1 => 1739364183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ae0f579a8b53_58609045 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections';
?><!--  produits diaporama-->
<div class="your-class">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('produits'), 'produit');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('produit')->value) {
$foreach1DoElse = false;
?>
    <div class="produit row" style="background-color: #007C10;">
        <img src="assets/imgs/<?php echo $_smarty_tpl->getValue('produit')->image->url;?>
" class="imgProduct" alt="">
        <h2><?php echo $_smarty_tpl->getValue('produit')->nom;?>
</h2>
        <p><?php echo $_smarty_tpl->getValue('produit')->desc;?>
</p>
        <a href="?p=produit&id=<?php echo $_smarty_tpl->getValue('produit')->id;?>
" class="btn btn-light rounded-pill col-md-12">Voir</a>
    </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </div>
 <!-- FIN produits diaporama--><?php }
}
