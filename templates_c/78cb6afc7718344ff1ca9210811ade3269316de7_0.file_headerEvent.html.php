<?php
/* Smarty version 5.4.3, created on 2025-04-05 17:24:00
  from 'file:views/sections/headerEvent.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f16730b951f9_25733689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78cb6afc7718344ff1ca9210811ade3269316de7' => 
    array (
      0 => 'views/sections/headerEvent.html',
      1 => 1743873839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f16730b951f9_25733689 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections';
?><!-- headerEvent-->
<div class="container mx-auto py-8 px-4">
    <!-- Titre et Actions -->
    <div class="flex justify-between items-center">
      <h1 class="text-2xl font-semibold">
        <?php echo $_smarty_tpl->getValue('event')->title;?>

      </h1>
      <div class="flex gap-4">
        <!-- Bouton Partager -->
        <button
          class="flex gap-2 items-center text-gray-500 hover:text-black transition">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 8a3 3 0 11-3-3m0 0a3 3 0 01-3 3m6 0v2a2 2 0 002 2h1a2 2 0 002-2V8a1 1 0 00-1-1h-1a1 1 0 01-1-1V5a1 1 0 00-1-1"
            />
          </svg>
          Partager
        </button>
        <!-- Bouton Enregistrer -->
        <button
          class="flex gap-2 items-center text-gray-500 hover:text-black transition">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 17a3 3 0 003 3h8a3 3 0 003-3V7a3 3 0 00-3-3H8a3 3 0 00-3 3v10z"
            />
          </svg>
          Enregistrer
        </button>
      </div>
    </div>

    <!-- Galerie -->
    <div class="mt-6 grid grid-cols-2 md:grid-cols-3 gap-2">
      <div class="col-span-2 md:col-span-2 row-span-2">
        <img
          src='./assets/imgs/<?php echo $_smarty_tpl->getValue('event')->img_header;?>
'
          alt="Image principale"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
      <img
        src="https://via.placeholder.com/240"
        alt="Image secondaire 1"
        class="w-full h-auto object-cover rounded-lg"
      />
      <img
        src="https://via.placeholder.com/240"
        alt="Image secondaire 2"
        class="w-full h-auto object-cover rounded-lg"
      />
      <img
        src="https://via.placeholder.com/240"
        alt="Image secondaire 3"
        class="w-full h-auto object-cover rounded-lg"
      />
      <img
        src="https://via.placeholder.com/240"
        alt="Image secondaire 4"
        class="w-full h-auto object-cover rounded-lg"
      />
      <!-- Bouton pour afficher toutes les photos -->
      <div class="relative col-span-2 md:col-span-1 row-span-1">
        <img
          src="https://via.placeholder.com/240"
          alt="Image secondaire 5"
          class="w-full h-full object-cover rounded-lg"
        />
        <div
          class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg">
          <button
            class="px-4 py-2 text-white bg-gray-800 hover:bg-gray-700 rounded-lg">
            Afficher toutes les photos
          </button>
        </div>
      </div>
    </div>
  </div>

 <!-- endLoginForm-->
 <?php }
}
