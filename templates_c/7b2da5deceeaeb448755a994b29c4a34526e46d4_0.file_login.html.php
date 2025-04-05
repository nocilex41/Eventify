<?php
/* Smarty version 5.4.3, created on 2025-02-14 13:37:09
  from 'file:views/sections/login.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67af47059cbdf1_42823782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b2da5deceeaeb448755a994b29c4a34526e46d4' => 
    array (
      0 => 'views/sections/login.html',
      1 => 1739540222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67af47059cbdf1_42823782 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections';
?><!-- loginForm-->
<div class="flex justify-center items-center h-screen bg-gray-900">
    <div class="bg-white p-6 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4 text-center">Connexion</h2>
        <form id="login-form" method="post">
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" id="login-email" class="w-full p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" id="login-password" class="w-full p-2 border rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg">Se connecter</button>
        </form>
        <p class="text-center mt-4"><a href="?p=register" class="text-blue-500">Créer un compte</a></p>
    </div>
</div>

 <!-- endLoginForm-->
 <?php }
}
