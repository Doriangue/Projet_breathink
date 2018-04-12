-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 12 avr. 2018 à 17:18
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `breathink`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `title`) VALUES
(12, 'Pack debutant', 39, 'Notre premier pack debutant pour debuter la cigarette electronique : simples, ne necessitant aucun reglage. Avec une excellente production de vapeur, de saveurs et une sensation en gorge efficace.'),
(13, 'pack intermediaire', 49, 'Vous avez besoin d\'une cigarette electronique disposant d\'une bonne autonomie ? Vous souhaitez decouvrir differents types de vape comme le controle de temperature ? Le pack moyen est fait pour vous !'),
(14, 'pack avance', 89, 'Vous connaissez la cigarette electronique et vous voulez une vape plus intense. Fabriquer vous-meme vos resistances et faire de la vapeur, decouvrir le materiel reconstructible et les resistances avec cables complexes, etc avec le pack expert.'),
(15, 'gecko', 69, 'La cigarette la plus apprécie selon nos utilisateurs.');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `prenom`, `comment`) VALUES
(12, 'Rihanna', 'Good Work work work work work ! I really liked the website and its products. I recommend it to all the celebrities <3 <3'),
(14, 'Eugenie', 'gyrhgr');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(10) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `nom`, `prenom`, `adresse`, `date_naissance`, `ville`, `email`, `password`) VALUES
(6, 'Amomo', 'Dorian', '08 squre du beaujolais', '2018-12-31', '78310 - MAUREPAS', 'root@root.com', '$2y$10$ur/FyDAqKgwOqfzcz5rCRu4o8zCLNdgGo3O8vXO9EpbJ3igS95bue'),
(7, 'Dorian', 'root', 'root', '1001-12-03', 'root', 'rooting@root.col', '$2y$10$9PYDgzS0aZi1O88m7VuSy.VJyelcyb134QCMUxTT6oyErI1BXKXmy'),
(8, 'Riri', 'Rihanna', 'ny', '1912-09-23', 'la', 'riri@hanna.com', '$2y$10$SS0JJmjcSdHqfhNUq7bptOBhmvdFDCw697erHbVBAW4twFwqwe39C'),
(9, 'Roques', 'Eugenie', 'eugenie', '9191-01-03', 'eugenie', 'eugenie@eugeni.com', '$2y$10$fVFTvrURJOplN1pMBrCx3uKE6sjK5l1EuCcNKKSHORSr61CqZn/6m');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
