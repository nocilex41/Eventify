<?php
/* Smarty version 5.4.3, created on 2025-03-12 15:16:39
  from 'file:views/sections/search.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d1a557258bc1_94326818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5c50c4698a5e95a53cc2eeaf9249b55f06b1297' => 
    array (
      0 => 'views/sections/search.html',
      1 => 1741792597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d1a557258bc1_94326818 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections';
?><div class="w-full bg-gray-200 py-8 px-4">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-4">
            <h2 class="text-lg md:text-xl font-medium text-gray-800">Trouvez l'événement</h2>
        </div>
        <div class="relative">
            <input type="text" 
                   class="w-full h-12 md:h-14 px-6 py-3 rounded-full bg-gray-400 bg-opacity-40 text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-amber-300 transition-all duration-300"
                   placeholder="Rechercher un événement...">
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-300 bg-opacity-0 p-2 rounded-full hover:bg-opacity-30 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>
    </div>
</div>
<?php }
}
