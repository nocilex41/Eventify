<?php
/* Smarty version 5.4.3, created on 2025-02-13 14:42:49
  from 'file:views/sections/categories.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ae04e92022c1_28742272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8c25ea7b030d2fb477eb6c0d133a8f8a284cfd1' => 
    array (
      0 => 'views/sections/categories.html',
      1 => 1739365386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ae04e92022c1_28742272 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify-disii/views/sections';
?>
<!--- catégories -->
<div class="categories">
    <div class="container">
      <div class="row">

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
        <div class="categorie col-md-3">
            <div class="row">
              <img src="assets/imgs/<?php echo $_smarty_tpl->getValue('cat')->image->url;?>
" class="imgProduct" alt="">
              <h2><?php echo $_smarty_tpl->getValue('cat')->nom;?>
</h2>
              <p><?php echo $_smarty_tpl->getValue('cat')->desc;?>
</p>
              <a href="?p=categories&id=<?php echo $_smarty_tpl->getValue('cat')->id;?>
" class="btn btn-light rounded-pill col-md-12">Voir</a>
            </div>
        </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
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
