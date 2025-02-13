<?php
/* Smarty version 5.4.3, created on 2025-02-13 14:42:51
  from 'file:views/sections/infos_produit.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ae04ebd1b9b3_75767421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f81efb53cb46408b6403be4c3c49ebb007d7fbe' => 
    array (
      0 => 'views/sections/infos_produit.html',
      1 => 1739369141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ae04ebd1b9b3_75767421 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify-disii/views/sections';
?> <!-- INFOS DU PRODUIT -->
 <div id="infos"  class="pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                  <h2>Composition</h2>
                  
                  <ul class="composition">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('produit')->contient, 'ligneContient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ligneContient')->value) {
$foreach0DoElse = false;
?>
                      <li>
                        <?php echo $_smarty_tpl->getValue('ligneContient')->ingredient->nom;?>

                         <?php if ($_smarty_tpl->getValue('ligneContient')->ingredient->allergies) {?>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
                            <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0zM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0"/>
                          </svg>
                        <?php }?>
                      </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
                    <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0zM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0"/>
                  </svg>
                  Représente un risque alergène
            </div>
            <div class="col-md-6">
                <h2>Convient à une alimentation</h2>
                  <ul class="composition">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('produit')->convient, 'ligneConvient');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ligneConvient')->value) {
$foreach1DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('ligneConvient')->alimentation->nom;?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
            </div>
          </div>
        </div>
      </div>


<div id="next" class="pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Nos autres produits</h2>
      </div>
    </div>
  </div>
</div>

      <!-- FIN INFOS DU PRODUIT --><?php }
}
