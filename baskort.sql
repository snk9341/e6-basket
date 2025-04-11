-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 11 avr. 2025 à 15:39
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `baskort`
--
CREATE DATABASE IF NOT EXISTS `baskort` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci;
USE `baskort`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ID_ARTICLE` int NOT NULL AUTO_INCREMENT,
  `NOM` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(500) NOT NULL,
  `PRIX` float NOT NULL,
  `ID_TYPE_ARTICLE` int NOT NULL,
  `ID_MARQUE` int NOT NULL,
  `nomimage` varchar(50) DEFAULT NULL,
  `ID_USER` int NOT NULL,
  PRIMARY KEY (`ID_ARTICLE`),
  KEY `ARTICLE_TYPEARTICLE_FK` (`ID_TYPE_ARTICLE`),
  KEY `ARTICLE_MARQUE0_FK` (`ID_MARQUE`),
  KEY `nestor` (`ID_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ID_ARTICLE`, `NOM`, `DESCRIPTION`, `PRIX`, `ID_TYPE_ARTICLE`, `ID_MARQUE`, `nomimage`, `ID_USER`) VALUES
(1, 'maillot golden states warriors', 'maillot golden states warriors domicile 2022-2023', 79.99, 3, 1, 'article1.png', 1),
(2, 'panier basket 3,05m pb500', 'Panier basket hauteur règlementaire ', 749.99, 2, 8, 'article2.png', 2),
(3, 'ballon warriors ', 'Ballon taille 7 warriors', 19.99, 1, 4, 'article3.png', 4),
(4, 'ballon nba officiel', 'Ballon Wilson officiel de la NBA ', 29.99, 1, 5, 'article4.png', 3),
(5, 'Maillot all star est ', 'Maillot du all star game 2024 (équipe est)', 79.99, 3, 1, 'article5.png', 1),
(6, 'maillot all star ouest', 'Maillot all star game (équipe ouest)', 79.99, 3, 1, 'article6.png', 2),
(7, 'Ballon adidas A700', 'Ballon adidas A700 taille 7 ', 19.99, 1, 2, 'article7.png', 2),
(8, 'maillot miami heat city edition', 'Maillot miami  heat city edition 2023-2024', 79.99, 3, 3, 'article8.png', 3),
(9, 'panier miniature ', 'Panier miniature pour enfant ', 24.99, 2, 4, 'article9.png', 3),
(10, 'panier basket 2,50m', 'Panier de basket exterieur pour enfant ', 149.99, 2, 8, 'article10.png', 2),
(11, 'panier 2,20m  T220', 'Panier 2,20m pour enfant extérieur ', 249.99, 2, 8, 'article11.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

DROP TABLE IF EXISTS `concerner`;
CREATE TABLE IF NOT EXISTS `concerner` (
  `ID_COULEURS` int NOT NULL,
  `ID_ARTICLE` int NOT NULL,
  PRIMARY KEY (`ID_COULEURS`,`ID_ARTICLE`),
  KEY `CONCERNER_ARTICLE0_FK` (`ID_ARTICLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `couleurs`
--

DROP TABLE IF EXISTS `couleurs`;
CREATE TABLE IF NOT EXISTS `couleurs` (
  `ID_COULEURS` int NOT NULL AUTO_INCREMENT,
  `COULEURS` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_COULEURS`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `couleurs`
--

INSERT INTO `couleurs` (`ID_COULEURS`, `COULEURS`) VALUES
(1, 'rouge'),
(2, 'bleu'),
(3, 'jaune'),
(4, 'violet'),
(5, 'noir'),
(6, 'blanc'),
(7, 'rose'),
(8, 'orange'),
(9, 'marron'),
(10, 'vert'),
(11, 'gris');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `ID_MARQUE` int NOT NULL AUTO_INCREMENT,
  `MARQUE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_MARQUE`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`ID_MARQUE`, `MARQUE`) VALUES
(1, 'nike'),
(2, 'adidas'),
(3, 'jordan'),
(4, 'spalding'),
(5, 'wilson'),
(6, 'puma'),
(7, 'converse'),
(8, 'tarmak'),
(9, 'GoTEK');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `utilisateur_ID_USER` int NOT NULL,
  `article_ID_ARTICLE` int NOT NULL,
  `nombre_article` int NOT NULL,
  KEY `fk_panier_utilisateur1_idx` (`utilisateur_ID_USER`),
  KEY `fk_panier_article1` (`article_ID_ARTICLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`utilisateur_ID_USER`, `article_ID_ARTICLE`, `nombre_article`) VALUES
(1, 2, 1),
(1, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typearticle`
--

DROP TABLE IF EXISTS `typearticle`;
CREATE TABLE IF NOT EXISTS `typearticle` (
  `ID_TYPE_ARTICLE` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_TYPE_ARTICLE`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `typearticle`
--

INSERT INTO `typearticle` (`ID_TYPE_ARTICLE`, `Nom`) VALUES
(1, 'Ballon'),
(2, 'Panier'),
(3, 'Maillot');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_USER` int NOT NULL AUTO_INCREMENT,
  `IDENTIFIANT` varchar(50) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `TELEPHONE` varchar(20) NOT NULL,
  `LIVRAISON` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_USER`, `IDENTIFIANT`, `PASSWORD`, `PRENOM`, `NOM`, `MAIL`, `TELEPHONE`, `LIVRAISON`) VALUES
(1, 'tsuki', 'lalunelalune1.', 'sorcier', 'lala', 'fissuredevie@gmail.com', '06 99 44 75 69', '11 rue de la lune, 75020 Paris '),
(2, 'Zam', 'pleurepleurepleure1.', 'SOLSAD', 'larme', '3arbilarmoyant@gmail.com', '06 13 21 20 97', '212 rue de la peine, Marseille 13010'),
(3, 'Man of the year', 'bipbipbip225.', 'Lay', 'Neo', 'lamatrix@gmail.com', '06 22 50 31 93', '15 place de la matrice, Paris 75018'),
(4, 'Larosh', 'oraoraora243.', 'Captaine', 'roshi', 'yohoooo@gmail.com', '06 24 30 01 18 ', '7 route des pirates, 75009 Paris');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`),
  ADD CONSTRAINT `ARTICLE_MARQUE0_FK` FOREIGN KEY (`ID_MARQUE`) REFERENCES `marque` (`ID_MARQUE`),
  ADD CONSTRAINT `ARTICLE_TYPEARTICLE_FK` FOREIGN KEY (`ID_TYPE_ARTICLE`) REFERENCES `typearticle` (`ID_TYPE_ARTICLE`);

--
-- Contraintes pour la table `concerner`
--
ALTER TABLE `concerner`
  ADD CONSTRAINT `CONCERNER_ARTICLE0_FK` FOREIGN KEY (`ID_ARTICLE`) REFERENCES `article` (`ID_ARTICLE`),
  ADD CONSTRAINT `CONCERNER_COULEURS_FK` FOREIGN KEY (`ID_COULEURS`) REFERENCES `couleurs` (`ID_COULEURS`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_panier_article1` FOREIGN KEY (`article_ID_ARTICLE`) REFERENCES `article` (`ID_ARTICLE`),
  ADD CONSTRAINT `fk_panier_utilisateur1` FOREIGN KEY (`utilisateur_ID_USER`) REFERENCES `utilisateur` (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
