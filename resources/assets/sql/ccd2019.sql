-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 06 Février 2019 à 15:38
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ccd2019`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Administratif : assistant comptable'),
(2, 'Administratif : comptable'),
(3, 'Administratif : secrétaire'),
(4, 'Administratif : standardiste'),
(5, 'Administratif : comptable'),
(6, 'Administratif : secrétaire'),
(7, 'Administratif : standardiste'),
(8, 'Bâtiment/Travaux Publics : conducteur d\'engin'),
(9, 'Bâtiment/Travaux Publics : manœuvre'),
(10, 'Bâtiment/Travaux Publics : maçon'),
(11, 'Bâtiment/Travaux Publics : électricien'),
(12, 'Commerce et vente : assistant commercial'),
(13, 'Commerce et vente : commercial'),
(14, 'Commerce et vente : manager'),
(15, 'Commerce et vente : vendeur polyvalent'),
(16, 'Logistique : magasinier'),
(17, 'Logistique : préparateur de commandes'),
(18, 'Restauration et hôtellerie : aide cuisinier'),
(19, 'Restauration et hôtellerie : cuisinier'),
(20, 'Restauration et hôtellerie : employé polyvalent'),
(21, 'Restauration et hôtellerie : serveur'),
(22, 'Transport : cariste'),
(23, 'Transport : chauffeur de bus'),
(24, 'Transport : conducteur poids lourd'),
(25, 'Transport : livreur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`) VALUES
(1, 'Cassandre'),
(2, 'Achille'),
(3, 'Calypso'),
(4, 'Bacchus'),
(5, 'Diane'),
(6, 'Clark'),
(7, 'Helene'),
(8, 'Jason'),
(9, 'Bruce'),
(10, 'Pénélope'),
(11, 'Ariane'),
(12, 'Lois');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
