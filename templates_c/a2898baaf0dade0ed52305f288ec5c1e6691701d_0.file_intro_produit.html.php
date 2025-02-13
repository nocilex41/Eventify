<?php
/* Smarty version 5.4.3, created on 2025-02-13 14:42:51
  from 'file:views/sections/intro_produit.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ae04ebd04923_12115565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2898baaf0dade0ed52305f288ec5c1e6691701d' => 
    array (
      0 => 'views/sections/intro_produit.html',
      1 => 1739367062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ae04ebd04923_12115565 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify-disii/views/sections';
?>
   <!-- INTRO DU PRODUIT -->
   <div id="intro" class="intro_prod">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                  <img src="assets/imgs/<?php echo $_smarty_tpl->getValue('produit')->image->url;?>
" class="img-fluid img-prod" alt="">
                  <div class="rond" style="background-color: <?php echo $_smarty_tpl->getValue('produit')->couleur;?>
 ;">

                  </div>
                </div>
                <div class="col-md-7">
                    <h1><?php echo $_smarty_tpl->getValue('produit')->categorie->nom;?>
<br><span><?php echo $_smarty_tpl->getValue('produit')->nom;?>
</span></h1>
                    <p><?php echo $_smarty_tpl->getValue('produit')->texte;?>
</p>
                    <a href="" class="btn rounded-pill col-md-6 bg-green">Ajouter au panier</a>
                </div>
               
            </div>
        </div>
      
      </div>
   <!-- FIN INTRO DU PRODUIT --><?php }
}
