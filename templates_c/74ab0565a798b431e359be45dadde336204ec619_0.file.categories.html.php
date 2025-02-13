<?php
/* Smarty version 4.5.5, created on 2025-02-12 13:03:11
  from '/Applications/MAMP/htdocs/seabuck-disii/views/sections/categories.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67ac9c0f49b851_94574202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74ab0565a798b431e359be45dadde336204ec619' => 
    array (
      0 => '/Applications/MAMP/htdocs/seabuck-disii/views/sections/categories.html',
      1 => 1739365386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ac9c0f49b851_94574202 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--- catégories -->
<div class="categories">
    <div class="container">
      <div class="row">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
        <div class="categorie col-md-3">
            <div class="row">
              <img src="assets/imgs/<?php echo $_smarty_tpl->tpl_vars['cat']->value->image->url;?>
" class="imgProduct" alt="">
              <h2><?php echo $_smarty_tpl->tpl_vars['cat']->value->nom;?>
</h2>
              <p><?php echo $_smarty_tpl->tpl_vars['cat']->value->desc;?>
</p>
              <a href="?p=categories&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
" class="btn btn-light rounded-pill col-md-12">Voir</a>
            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <!--
        <div class="categorie col-md-3">
          <div class="row">
            <img src="assets/imgs/donut.png" class="imgProduct" alt="">
            <h2>Cakes</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn btn-light rounded-pill col-md-12">Voir</a>
          </div>
      </div>
        -->
      </div>
    </div>
   
  </div>

<!--- FIN catégories --><?php }
}
