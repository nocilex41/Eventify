<?php
/* Smarty version 4.5.5, created on 2025-02-12 14:05:42
  from '/Applications/MAMP/htdocs/seabuck-disii/views/sections/infos_produit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67acaab61a2d88_90232780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e00820fce4dcadeb31abd8e0a1fa9c04d060edd' => 
    array (
      0 => '/Applications/MAMP/htdocs/seabuck-disii/views/sections/infos_produit.html',
      1 => 1739369141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67acaab61a2d88_90232780 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- INFOS DU PRODUIT -->
 <div id="infos"  class="pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                  <h2>Composition</h2>
                  
                  <ul class="composition">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produit']->value->contient, 'ligneContient');
$_smarty_tpl->tpl_vars['ligneContient']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ligneContient']->value) {
$_smarty_tpl->tpl_vars['ligneContient']->do_else = false;
?>
                      <li>
                        <?php echo $_smarty_tpl->tpl_vars['ligneContient']->value->ingredient->nom;?>

                         <?php if ($_smarty_tpl->tpl_vars['ligneContient']->value->ingredient->allergies) {?>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
                            <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0zM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0"/>
                          </svg>
                        <?php }?>
                      </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produit']->value->convient, 'ligneConvient');
$_smarty_tpl->tpl_vars['ligneConvient']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ligneConvient']->value) {
$_smarty_tpl->tpl_vars['ligneConvient']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['ligneConvient']->value->alimentation->nom;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
