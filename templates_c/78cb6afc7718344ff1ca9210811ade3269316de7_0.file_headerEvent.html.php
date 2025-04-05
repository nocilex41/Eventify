<?php
/* Smarty version 5.4.3, created on 2025-04-05 20:29:07
  from 'file:views/sections/headerEvent.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f1929339bc22_65373731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78cb6afc7718344ff1ca9210811ade3269316de7' => 
    array (
      0 => 'views/sections/headerEvent.html',
      1 => 1743884945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f1929339bc22_65373731 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections';
?><div class="container mx-auto py-8 px-4">
    <h1 class="text-2xl font-semibold">
        <?php echo $_smarty_tpl->getValue('event')->title;?>

      </h1>
    <!-- Conteneur de la galerie -->
    <div class="grid grid-cols-3 gap-2">
      <!-- Grande image à gauche -->
      <div class="col-span-2">
        <img
          src='./assets/imgs/<?php echo $_smarty_tpl->getValue('event')->img_header;?>
'
          alt="Image principale"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
  
      <!-- Conteneur des petites images à droite -->
      <div class="grid grid-rows-2 grid-cols-2 gap-2">
        <!-- Petite image 1 -->
        <img
          src="./assets/imgs/photo1.avif"
          alt="Image secondaire 1"
          class="w-full h-full object-cover rounded-lg"
        />
        <!-- Petite image 2 -->
        <img
          src="./assets/imgs/photo2.avif"
          alt="Image secondaire 2"
          class="w-full h-full object-cover rounded-lg"
        />
        <!-- Petite image 3 -->
        <img
          src="./assets/imgs/photo3.avif"
          alt="Image secondaire 3"
          class="w-full h-full object-cover rounded-lg"
        />
        <!-- Dernière image avec le bouton -->
        <div class="relative">
          <img
            src="./assets/imgs/photo4.avif"
            alt="Image secondaire 4"
            class="w-full h-full object-cover rounded-lg"
          />
      </div>
    </div>
  </div>
  <?php }
}
