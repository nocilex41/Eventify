<?php
/* Smarty version 5.4.3, created on 2025-02-13 14:42:49
  from 'file:views/sections/intro_categorie.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ae04e91f1151_84088481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c6487a4bd4ff614272bdb8136aaedb8c2f5516d' => 
    array (
      0 => 'views/sections/intro_categorie.html',
      1 => 1739366787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ae04e91f1151_84088481 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/seabuck-disii/views/sections';
?><div id="intro" class="intro_prod">
        <div class="container">
            <div class="row">
              
                <div class="col-md-7">
                    <h1>Nos<br><span><?php echo $_smarty_tpl->getValue('title');?>
</span></h1>
                    <p><?php echo $_smarty_tpl->getValue('desc');?>
</p>
                </div>

                <div class="col-md-5">
                  <img src="assets/imgs/<?php echo $_smarty_tpl->getValue('imageUrl');?>
" class="img-fluid img-prod" alt="">
                  <div class="rond" style="background-color:#5e4478;">
                  </div>
                </div>
               
            </div>
        </div>
      
      </div><?php }
}
