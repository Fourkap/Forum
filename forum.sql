{\rtf1\ansi\ansicpg1252\cocoartf1561\cocoasubrtf200
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.7.7\
-- https://www.phpmyadmin.net/\
--\
-- H\'f4te : localhost:8889\
-- G\'e9n\'e9r\'e9 le :  Dim 25 mars 2018 \'e0 21:32\
-- Version du serveur :  5.6.38\
-- Version de PHP :  7.2.1\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Base de donn\'e9es :  `forum`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Structure de la table `categories`\
--\
\
CREATE TABLE `categories` (\
  `id_cat` int(11) NOT NULL,\
  `titre` varchar(50) DEFAULT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- D\'e9chargement des donn\'e9es de la table `categories`\
--\
\
INSERT INTO `categories` (`id_cat`, `titre`) VALUES\
(1, 'macbook '),\
(2, 'Iphone '),\
(3, 'Imac'),\
(4, 'Mac OS High Sierra'),\
(5, 'Ipad'),\
(6, 'Apple Watch');\
\
-- --------------------------------------------------------\
\
--\
-- Structure de la table `posts`\
--\
\
CREATE TABLE `posts` (\
  `id_p` int(11) NOT NULL,\
  `contenu` text,\
  `date_p` datetime DEFAULT NULL,\
  `id_u` int(11) NOT NULL,\
  `id_t` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- D\'e9chargement des donn\'e9es de la table `posts`\
--\
\
INSERT INTO `posts` (`id_p`, `contenu`, `date_p`, `id_u`, `id_t`) VALUES\
(18, '      post 1', '2018-03-25 20:11:49', 22, 8),\
(19, '      post 2 ', '2018-03-25 20:11:54', 22, 8),\
(20, '      post 3 ', '2018-03-25 20:11:58', 22, 8),\
(21, '      POST 4 \\r\\n', '2018-03-25 20:12:02', 22, 8),\
(22, '      POST 5 ', '2018-03-25 20:12:05', 22, 8),\
(23, '      POST 6 ', '2018-03-25 20:12:10', 22, 8),\
(24, '      POST 7 ', '2018-03-25 20:12:18', 22, 8),\
(25, '      POST 8 ', '2018-03-25 20:12:22', 22, 8),\
(26, '      POST 9 ', '2018-03-25 20:12:26', 22, 8),\
(27, '      POST 10 ', '2018-03-25 20:12:31', 22, 8),\
(28, '      POST 11 ', '2018-03-25 20:12:35', 22, 8),\
(29, '      e&quot;nfenfe', '2018-03-25 21:00:32', 22, 16),\
(30, '      efefefef', '2018-03-25 21:00:34', 22, 16),\
(31, '      efefefefef', '2018-03-25 21:00:36', 22, 16),\
(32, '      efefefefefe', '2018-03-25 21:00:38', 22, 16),\
(33, '      efefefefefef', '2018-03-25 21:00:40', 22, 16),\
(34, '      efefefefefef', '2018-03-25 21:00:42', 22, 16),\
(35, 'Salut les mecs ', '2018-03-25 21:45:46', 22, 8),\
(36, ' Bonjour, Comment allez vous ?      ', '2018-03-25 21:48:17', 22, 5),\
(37, '      OK d\\'accord ', '2018-03-25 21:48:25', 22, 5),\
(38, '      test', '2018-03-25 22:57:14', 17, 17),\
(39, '      Salut les gars !! ', '2018-03-25 22:57:24', 17, 17),\
(40, '      LOL 1129 euros vous \'eates des Fous ', '2018-03-25 22:58:05', 17, 18),\
(41, '      Mais nan c\\'est pas cher en vrai ', '2018-03-25 22:58:42', 17, 18),\
(42, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:22', 17, 7),\
(43, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:23', 17, 7),\
(44, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:25', 17, 7),\
(45, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:26', 17, 7),\
(46, 'Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de       ', '2018-03-25 22:59:28', 17, 7),\
(47, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:30', 17, 7),\
(48, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:32', 17, 7),\
(49, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:33', 17, 7),\
(50, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:35', 17, 7),\
(51, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:38', 17, 7),\
(52, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:40', 17, 7),\
(53, '      Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', '2018-03-25 22:59:56', 17, 7),\
(54, '      C\\'est l\\'ancien l\\'iphone X est mieux \\r\\n', '2018-03-25 23:19:44', 17, 19),\
(55, '      ekfeknf', '2018-03-25 23:23:02', 17, 18);\
\
-- --------------------------------------------------------\
\
--\
-- Structure de la table `topics`\
--\
\
CREATE TABLE `topics` (\
  `id_t` int(11) NOT NULL,\
  `titre_c` varchar(100) DEFAULT NULL,\
  `description` text,\
  `id_cat` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- D\'e9chargement des donn\'e9es de la table `topics`\
--\
\
INSERT INTO `topics` (`id_t`, `titre_c`, `description`, `id_cat`) VALUES\
(5, 'Le Lorem Ipsum est simplement du faux texte ', 'Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', 6),\
(7, 'Le Lorem Ipsum est simplement du faux texte', 'Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', 6),\
(8, 'Le Lorem Ipsum est simplement du faux texte ', 'Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', 6),\
(9, 'Le Lorem Ipsum est simplement du faux texte ', 'Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', 5),\
(14, 'Le Lorem Ipsum est simplement du faux texte ', 'Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', 3),\
(15, 'Le Lorem Ipsum est simplement du faux texte ', 'Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', 3),\
(16, 'Le Lorem Ipsum est simplement du faux texte ', 'Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', 3),\
(17, 'Le Lorem Ipsum est simplement du faux texte ', 'Le Lorem Ipsum est simplement du faux texte employ\'e9 dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\'imprimerie depuis les ann\'e9es 1500, quand un peintre anonyme assembla ensemble des morceaux de ', 3),\
(18, 'LE nouvelle iPhone X ', 'SUPER ', 2),\
(19, 'iPhone 7 ', 'ezdefefefe', 2);\
\
-- --------------------------------------------------------\
\
--\
-- Structure de la table `users`\
--\
\
CREATE TABLE `users` (\
  `id_u` int(11) NOT NULL,\
  `login` varchar(100) DEFAULT NULL,\
  `prenom` varchar(255) NOT NULL,\
  `nom` varchar(255) NOT NULL,\
  `adresse` varchar(255) NOT NULL,\
  `mdp` varchar(255) DEFAULT NULL,\
  `email` varchar(255) DEFAULT NULL,\
  `avatar` varchar(255) DEFAULT NULL,\
  `date_inscription` datetime DEFAULT NULL,\
  `datelastco` datetime DEFAULT NULL,\
  `ip` varchar(50) DEFAULT NULL,\
  `lvl` int(11) DEFAULT '1'\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- D\'e9chargement des donn\'e9es de la table `users`\
--\
\
INSERT INTO `users` (`id_u`, `login`, `prenom`, `nom`, `adresse`, `mdp`, `email`, `avatar`, `date_inscription`, `datelastco`, `ip`, `lvl`) VALUES\
(17, 'fourkap', 'Alexandre ', 'Kaprielian', '44 bis all\'e9e de Bougainville ', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'alex.kaprielian@gmail.com', '17.jpeg', '2018-03-19 00:00:00', NULL, NULL, 3),\
(22, 'aza', 'jean-marc', 'kaprielian', 'aa', 'c44f60d4dd5c219dbc2108441bfaad138c8085df', 'azer@azer.com', NULL, '2018-03-20 00:00:00', NULL, NULL, 1);\
\
--\
-- Index pour les tables d\'e9charg\'e9es\
--\
\
--\
-- Index pour la table `categories`\
--\
ALTER TABLE `categories`\
  ADD PRIMARY KEY (`id_cat`);\
\
--\
-- Index pour la table `posts`\
--\
ALTER TABLE `posts`\
  ADD PRIMARY KEY (`id_p`),\
  ADD KEY `id_u` (`id_u`),\
  ADD KEY `id_t` (`id_t`);\
\
--\
-- Index pour la table `topics`\
--\
ALTER TABLE `topics`\
  ADD PRIMARY KEY (`id_t`),\
  ADD KEY `id_cat` (`id_cat`);\
\
--\
-- Index pour la table `users`\
--\
ALTER TABLE `users`\
  ADD PRIMARY KEY (`id_u`);\
\
--\
-- AUTO_INCREMENT pour les tables d\'e9charg\'e9es\
--\
\
--\
-- AUTO_INCREMENT pour la table `categories`\
--\
ALTER TABLE `categories`\
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;\
\
--\
-- AUTO_INCREMENT pour la table `posts`\
--\
ALTER TABLE `posts`\
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;\
\
--\
-- AUTO_INCREMENT pour la table `topics`\
--\
ALTER TABLE `topics`\
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;\
\
--\
-- AUTO_INCREMENT pour la table `users`\
--\
ALTER TABLE `users`\
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;\
\
--\
-- Contraintes pour les tables d\'e9charg\'e9es\
--\
\
--\
-- Contraintes pour la table `posts`\
--\
ALTER TABLE `posts`\
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`),\
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`id_t`) REFERENCES `topics` (`id_t`);\
\
--\
-- Contraintes pour la table `topics`\
--\
ALTER TABLE `topics`\
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`id_cat`);\
}