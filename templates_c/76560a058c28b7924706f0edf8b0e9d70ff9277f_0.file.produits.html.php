<?php
/* Smarty version 4.5.5, created on 2025-02-12 12:43:03
  from '/Applications/MAMP/htdocs/seabuck-disii/views/sections/produits.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67ac97572d0ac7_65566611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76560a058c28b7924706f0edf8b0e9d70ff9277f' => 
    array (
      0 => '/Applications/MAMP/htdocs/seabuck-disii/views/sections/produits.html',
      1 => 1739364183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ac97572d0ac7_65566611 (Smarty_Internal_Template $_smarty_tpl) {
?><!--  produits diaporama-->
<div class="your-class">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>
    <div class="produit row" style="background-color: #007C10;">
        <img src="assets/imgs/<?php echo $_smarty_tpl->tpl_vars['produit']->value->image->url;?>
" class="imgProduct" alt="">
        <h2><?php echo $_smarty_tpl->tpl_vars['produit']->value->nom;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['produit']->value->desc;?>
</p>
        <a href="?p=produit&id=<?php echo $_smarty_tpl->tpl_vars['produit']->value->id;?>
" class="btn btn-light rounded-pill col-md-12">Voir</a>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
 <!-- FIN produits diaporama--><?php }
}
