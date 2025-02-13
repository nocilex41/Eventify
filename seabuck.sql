-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 13 jan. 2025 à 07:30
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `seabuck`
--

-- --------------------------------------------------------

--
-- Structure de la table `alimentation`
--

CREATE TABLE `alimentation` (
  `id_ali` int(11) NOT NULL,
  `nom_ali` varchar(50) NOT NULL,
  `desc_ali` text NOT NULL,
  `slug_ali` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `alimentation`
--

INSERT INTO `alimentation` (`id_ali`, `nom_ali`, `desc_ali`, `slug_ali`) VALUES
(1, 'Végan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'vegan'),
(2, 'Sans gluten', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sans-gluten'),
(3, 'Bio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'bio');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(50) NOT NULL,
  `slug_cat` varchar(255) NOT NULL,
  `desc_cat` text NOT NULL,
  `id_parent_cat` int(11) DEFAULT NULL,
  `id_img_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`, `slug_cat`, `desc_cat`, `id_parent_cat`, `id_img_cat`) VALUES
(1, 'Sundays', 'sundays', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, 4),
(2, 'Sundays fruits', 'sundays-fruits', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 1, 13),
(3, 'Sundays gourmands', 'sundays-gourmands', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, 3),
(4, 'Cakes', 'cakes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', NULL, 15);

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `id_ingr_cont` int(11) NOT NULL,
  `id_prod_cont` int(11) NOT NULL,
  `qte_cont` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`id_ingr_cont`, `id_prod_cont`, `qte_cont`) VALUES
(11, 7, 10),
(12, 7, 20),
(3, 7, 50),
(10, 12, 50),
(16, 12, 10),
(10, 1, 50),
(1, 1, 5),
(19, 1, 20);

-- --------------------------------------------------------

--
-- Structure de la table `convient`
--

CREATE TABLE `convient` (
  `id_prod_conv` int(11) NOT NULL,
  `id_ali_conv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `convient`
--

INSERT INTO `convient` (`id_prod_conv`, `id_ali_conv`) VALUES
(1, 1),
(1, 2),
(1, 3),
(4, 3),
(6, 1),
(7, 2),
(8, 2),
(8, 3),
(9, 3),
(12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `nom_image` varchar(50) NOT NULL,
  `alt_image` varchar(50) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `slug_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `nom_image`, `alt_image`, `url_image`, `slug_image`) VALUES
(1, 'acid-citrus', 'acid-citrus', 'acid-citrus.png', 'acid-citrus'),
(2, 'blue-mint', 'blue-mint', 'blue-mint.png', 'blue-mint'),
(3, 'cookie.png', 'cookie.png', 'cookie.png', ''),
(4, 'dark-chocolate.png', 'dark-chocolate.png', 'dark-chocolate.png', ''),
(5, 'dark-coffee.png', 'dark-coffee.png', 'dark-coffee.png', ''),
(6, 'fresh-lime.png', 'fresh-lime.png', 'fresh-lime.png', ''),
(7, 'green-mint.png', 'green-mint.png', 'green-mint.png', ''),
(8, 'lolipop.png', 'lolipop.png', 'lolipop.png', ''),
(9, 'orange-sugar.png', 'orange-sugar.png', 'orange-sugar.png', ''),
(10, 'purple-dream.png', 'purple-dream.png', 'purple-dream.png', ''),
(11, '', 'sweat-vanilla.png', 'sweat-vanilla.png', 'sweat-vanilla'),
(12, 'sweet-caramel.png', 'sweet-caramel.png', 'sweet-caramel.png', ''),
(13, 'sweet-strawberry.png', 'sweet-strawberry.png', 'sweet-strawberry.png', ''),
(14, 'white-chocolate.png', 'white-chocolate.png', 'white-chocolate.png', ''),
(15, 'Donut', 'Donut', 'donut.png', 'donut');

-- --------------------------------------------------------

--
-- Structure de la table `imageaffecter`
--

CREATE TABLE `imageaffecter` (
  `id_prod_affect` int(11) NOT NULL,
  `id_image_affect` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `id_ingre` int(11) NOT NULL,
  `nom_ingre` varchar(50) NOT NULL,
  `slug_ingre` varchar(255) NOT NULL,
  `desc_ingre` text NOT NULL,
  `allergies_ingre` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`id_ingre`, `nom_ingre`, `slug_ingre`, `desc_ingre`, `allergies_ingre`) VALUES
(1, 'Myrtilles', 'myrtilles', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(2, 'Vanille', 'vanille', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(3, 'Crème', 'creme', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(4, 'Caramel', 'caramel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(5, 'Fraises', 'fraises', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(6, 'Chocolat', 'chocolat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(7, 'Chocolat blanc', 'chocolat-blanc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(8, 'Menthe', 'menthe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(9, 'Sirop de menthe', 'sirop-de-menthe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(10, 'Crème de lait d\'amande', 'creme-de-lait-amande', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(11, 'Citron', 'citron', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(12, 'Crème de citron', 'creme-de-citron', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(13, 'Menthe glaciale', 'menthe-glaciale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(14, 'Cookie', 'cookie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(15, 'Café', 'cafe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(16, 'Citron vert', 'citron-vert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(17, 'Sirop lolipop', 'sirop-lolipop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(18, 'Sirop d\'orange', 'sirop-orange', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(19, 'Sirop de myrtille', 'sirop-de-myrtille', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0);

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

CREATE TABLE `lien` (
  `id_lien` int(11) NOT NULL,
  `texte_lien` varchar(50) NOT NULL,
  `url_lien` varchar(255) NOT NULL,
  `url_rw_lien` varchar(255) NOT NULL,
  `order_lien` int(11) NOT NULL,
  `id_menu_lien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lien`
--

INSERT INTO `lien` (`id_lien`, `texte_lien`, `url_lien`, `url_rw_lien`, `order_lien`, `id_menu_lien`) VALUES
(1, 'Produits', '?p=produits', 'produits/', 1, 1),
(2, 'Catégories', '?p=categories', 'categories/', 2, 1),
(3, 'Alimentations', '?p=alimentations', 'alimentations/', 3, 1),
(4, 'Panier', '?p=panier', 'panier/', 4, 1),
(5, 'Contact', '?p=contact', 'contact/', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nom_menu` varchar(50) NOT NULL,
  `position_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `nom_menu`, `position_menu`) VALUES
(1, 'menu principal', 'header');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_prod` int(11) NOT NULL,
  `nom_prod` varchar(50) NOT NULL,
  `slug_prod` varchar(255) NOT NULL,
  `desc_prod` text NOT NULL,
  `texte_prod` text NOT NULL,
  `img_prod` int(11) DEFAULT NULL,
  `id_cat_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `nom_prod`, `slug_prod`, `desc_prod`, `texte_prod`, `img_prod`, `id_cat_prod`) VALUES
(1, 'Purple dream vegan sunday', 'purple-dream-vegan-sunday', '', '', 10, 2),
(2, 'sweat vanilla sunday', 'sweat-vanilla-sunday', '', '', 11, 3),
(3, 'sweet caramel sunday', 'sweet-caramel-sunday', '', '', 12, 3),
(4, 'Sweet strawberry sunday', 'Sweet-strawberry-sunday', '', '', 13, 2),
(5, 'White chocolate sunday', 'white-chocolate-sunday', '', '', 14, 3),
(6, 'Green mint vegan sunday', 'Green-mint-vegan-sunday', '', '', 7, 2),
(7, 'acid-citrus sunday', 'acid-citrus-sunday', '', '', 1, 2),
(8, 'blue mint sunday', 'blue-mint-sunday', '', '', 2, 2),
(9, 'cookie crunch sunday', 'cookie-crunch-sunday', '', '', 3, 3),
(10, 'dark chocolate  sunday', 'dark-chocolate-sunday', '', '', 4, 3),
(11, 'darkcoffee sunday', 'darkcoffee-sunday', '', '', 5, 3),
(12, 'fresh lime vegan sunday', 'fresh-lime-vegan-sunday', '', '', 6, 2),
(13, 'lolipop sunday', 'lolipop-sunday', '', '', 8, 3),
(14, 'orange sugar sunday', 'orange-sugar-sunday', '', '', 9, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alimentation`
--
ALTER TABLE `alimentation`
  ADD PRIMARY KEY (`id_ali`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`),
  ADD KEY `id_parent_cat` (`id_parent_cat`),
  ADD KEY `id_img_cat` (`id_img_cat`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD KEY `id_ingr_cont` (`id_ingr_cont`,`id_prod_cont`),
  ADD KEY `id_prod_cont` (`id_prod_cont`);

--
-- Index pour la table `convient`
--
ALTER TABLE `convient`
  ADD KEY `id_prod_conv` (`id_prod_conv`,`id_ali_conv`),
  ADD KEY `id_ali_conv` (`id_ali_conv`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `imageaffecter`
--
ALTER TABLE `imageaffecter`
  ADD KEY `id_prod_affect` (`id_prod_affect`,`id_image_affect`),
  ADD KEY `id_image_affect` (`id_image_affect`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id_ingre`);

--
-- Index pour la table `lien`
--
ALTER TABLE `lien`
  ADD PRIMARY KEY (`id_lien`),
  ADD KEY `id_menu` (`id_menu_lien`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_cat_prod` (`id_cat_prod`),
  ADD KEY `img_prod` (`img_prod`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alimentation`
--
ALTER TABLE `alimentation`
  MODIFY `id_ali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id_ingre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `lien`
--
ALTER TABLE `lien`
  MODIFY `id_lien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`id_parent_cat`) REFERENCES `categorie` (`id_cat`),
  ADD CONSTRAINT `categorie_ibfk_2` FOREIGN KEY (`id_img_cat`) REFERENCES `image` (`id_image`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_ibfk_1` FOREIGN KEY (`id_ingr_cont`) REFERENCES `ingredient` (`id_ingre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`id_prod_cont`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `convient`
--
ALTER TABLE `convient`
  ADD CONSTRAINT `convient_ibfk_1` FOREIGN KEY (`id_prod_conv`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `convient_ibfk_2` FOREIGN KEY (`id_ali_conv`) REFERENCES `alimentation` (`id_ali`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `imageaffecter`
--
ALTER TABLE `imageaffecter`
  ADD CONSTRAINT `imageaffecter_ibfk_1` FOREIGN KEY (`id_prod_affect`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `imageaffecter_ibfk_2` FOREIGN KEY (`id_image_affect`) REFERENCES `image` (`id_image`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `lien`
--
ALTER TABLE `lien`
  ADD CONSTRAINT `lien_ibfk_1` FOREIGN KEY (`id_menu_lien`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_cat_prod`) REFERENCES `categorie` (`id_cat`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`img_prod`) REFERENCES `image` (`id_image`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
