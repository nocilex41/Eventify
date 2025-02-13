<?php
/* Smarty version 4.5.5, created on 2025-02-12 13:26:34
  from '/Applications/MAMP/htdocs/eventify-disii/views/sections/intro_categorie.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67aca18a4237f7_55027173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b05ae696d21bc9d852b1e3ee8f420113c289a6' => 
    array (
      0 => '/Applications/MAMP/htdocs/eventify-disii/views/sections/intro_categorie.html',
      1 => 1739366787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67aca18a4237f7_55027173 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="intro" class="intro_prod">
        <div class="container">
            <div class="row">
              
                <div class="col-md-7">
                    <h1>Nos<br><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></h1>
                    <p><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</p>
                </div>

                <div class="col-md-5">
                  <img src="assets/imgs/<?php echo $_smarty_tpl->tpl_vars['imageUrl']->value;?>
" class="img-fluid img-prod" alt="">
                  <div class="rond" style="background-color:#5e4478;">
                  </div>
                </div>
               
            </div>
        </div>
      
      </div><?php }
}
