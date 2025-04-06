<?php
/* Smarty version 5.4.3, created on 2025-04-06 11:24:57
  from 'file:views/sections/admin/menu.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f2648945f9b7_99501869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2c18b60ba6e6af13ab98eaf8f1455f55ff917d9' => 
    array (
      0 => 'views/sections/admin/menu.html',
      1 => 1743938696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f2648945f9b7_99501869 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections/admin';
?>
<div class="bg-gray-100 dark:bg-gray-900 h-screen ">

<!-- Menu latéral -->
<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full bg-gray-50 dark:bg-gray-800">
    <div class="h-full px-3 py-4 overflow-y-auto">
        <ul class="space-y-2 text-lg font-medium">
            <li>
                <a href="#" class="flex items-center text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 p-2 rounded">
                    Événements
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 p-2 rounded">
                    Créer un événement
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 p-2 rounded">
                    Messages
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 p-2 rounded">
                    Gestion utilisateurs
                </a>
            </li>
        </ul>
    </div>
</aside>

<!-- Contenu principal -->
<div class="p-4 ml-64 lg:ml-64 sm:ml-0">
    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4">
        <!-- Colonne principale -->
        <div class="md:col-span-2">
            <!-- Événement reçu -->
            <div class="bg-white shadow rounded-lg p-4 mb-4">
                <h2 class="text-lg font-semibold mb-2 text-gray-700">Évènement reçu</h2>
                <table class="w-full table-fixed border text-left text-sm">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="p-2 border">Nom</th>
                            <th class="p-2 border">Date début</th>
                            <th class="p-2 border">Date insérée</th>
                            <th class="p-2 border">État</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 border">Chartres lumière</td>
                            <td class="p-2 border">10/12/2025</td>
                            <td class="p-2 border">10/05/2025</td>
                            <td class="p-2 border"><span class="px-2 py-1 text-xs text-gray-700 bg-gray-200 rounded">Pas traité</span></td>
                        </tr>
                        <tr>
                            <td class="p-2 border">Chartres lumière</td>
                            <td class="p-2 border">10/12/2025</td>
                            <td class="p-2 border">10/05/2025</td>
                            <td class="p-2 border"><span class="px-2 py-1 text-xs text-gray-700 bg-gray-200 rounded">Pas traité</span></td>
                        </tr>
                        <tr>
                            <td class="p-2 border">Chartres lumière</td>
                            <td class="p-2 border">10/12/2025</td>
                            <td class="p-2 border">10/05/2025</td>
                            <td class="p-2 border"><span class="px-2 py-1 text-xs text-gray-700 bg-gray-200 rounded">Pas traité</span></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right mt-2">
                    <a href="#" class="text-blue-500 hover:underline text-sm">Voir tous...</a>
                </div>
            </div>

            <!-- Messages reçus -->
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-lg font-semibold mb-2 text-gray-700">Messages reçus</h2>
                <div class="h-32 border rounded bg-gray-50"></div>
            </div>
        </div>

        <!-- Colonne secondaire -->
        <div>
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-lg font-semibold mb-2 text-gray-700">Évènement en cours</h2>
                <div class="h-56 border rounded bg-gray-50"></div>
            </div>
        </div>
    </div>
</div>

</div>
<?php }
}
