<?php
/* Smarty version 4.5.5, created on 2025-02-12 13:54:41
  from '/Applications/MAMP/htdocs/seabuck-disii/views/sections/intro_produit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67aca821137fc8_34714637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089c5fbfbfc7e9b03e8053c09b211c71bf2adb46' => 
    array (
      0 => '/Applications/MAMP/htdocs/seabuck-disii/views/sections/intro_produit.html',
      1 => 1739367062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67aca821137fc8_34714637 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <!-- INTRO DU PRODUIT -->
   <div id="intro" class="intro_prod">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                  <img src="assets/imgs/<?php echo $_smarty_tpl->tpl_vars['produit']->value->image->url;?>
" class="img-fluid img-prod" alt="">
                  <div class="rond" style="background-color: <?php echo $_smarty_tpl->tpl_vars['produit']->value->couleur;?>
 ;">

                  </div>
                </div>
                <div class="col-md-7">
                    <h1><?php echo $_smarty_tpl->tpl_vars['produit']->value->categorie->nom;?>
<br><span><?php echo $_smarty_tpl->tpl_vars['produit']->value->nom;?>
</span></h1>
                    <p><?php echo $_smarty_tpl->tpl_vars['produit']->value->texte;?>
</p>
                    <a href="" class="btn rounded-pill col-md-6 bg-green">Ajouter au panier</a>
                </div>
               
            </div>
        </div>
      
      </div>
   <!-- FIN INTRO DU PRODUIT --><?php }
}
