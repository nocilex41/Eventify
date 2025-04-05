<?php
/* Smarty version 5.4.3, created on 2025-02-14 13:29:37
  from 'file:views/sections/register.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67af4541154965_85207862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc176fae0cb7a192304cd09443c14b9f3c9a724' => 
    array (
      0 => 'views/sections/register.html',
      1 => 1739539651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67af4541154965_85207862 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections';
?><div class="flex justify-center items-center h-screen bg-gray-900">
    <div class="bg-white p-6 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4 text-center">Inscription</h2>
        <form id="register-form">
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" id="register-email" class="w-full p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" id="register-password" class="w-full p-2 border rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg">S'inscrire</button>
        </form>
        <p class="text-center mt-4"><a href="?p=login" class="text-blue-500">J'ai déjà un compte</a></p>
    </div>
</div>
<?php }
}
