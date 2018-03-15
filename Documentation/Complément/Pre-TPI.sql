-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 09 mars 2018 à 12:53
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Pre-TPI`
--

-- --------------------------------------------------------

--
-- Structure de la table `Abris`
--

CREATE TABLE `Abris` (
  `IDAbris` int(11) NOT NULL,
  `Etat` varchar(300) COLLATE utf8_bin NOT NULL,
  `Rue` varchar(30) COLLATE utf8_bin NOT NULL,
  `Ville` varchar(30) COLLATE utf8_bin NOT NULL,
  `NPA` smallint(5) NOT NULL,
  `NombrePlace` tinyint(5) NOT NULL,
  `N°abris` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `Abris`
--

INSERT INTO `Abris` (`IDAbris`, `Etat`, `Rue`, `Ville`, `NPA`, `NombrePlace`, `N°abris`) VALUES
(1, 'Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.', 'Tramstrasse 11', 'Berneck', 9442, 120, 'PC_A280'),
(2, 'Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.', 'Chemin d\'Otan 5', 'Vernayaz', 1904, 80, 'PC_A180'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue.', 'Wiesenweg 2', 'Zoug', 6300, 120, 'PC_AB280'),
(8, 'Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod semper.', 'Via Muggina 13', 'Lugano', 6962, 80, 'PC_AB180');

-- --------------------------------------------------------

--
-- Structure de la table `ContreVisite`
--

CREATE TABLE `ContreVisite` (
  `IDContreVisite` int(11) NOT NULL,
  `FKVisite` int(11) NOT NULL,
  `Etat` varchar(300) COLLATE utf8_bin NOT NULL,
  `DateContreVisite` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `Visite`
--

CREATE TABLE `Visite` (
  `IDVisite` int(11) NOT NULL,
  `FKVisiteurs` int(11) NOT NULL,
  `FKAbris` int(11) NOT NULL,
  `DateVisite` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `Visiteurs`
--

CREATE TABLE `Visiteurs` (
  `IDVisiteurs` int(11) NOT NULL,
  `Nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `Visiteurs`
--

INSERT INTO `Visiteurs` (`IDVisiteurs`, `Nom`, `Prenom`) VALUES
(1, 'Auboisdormant', 'Abel'),
(2, 'Troijours', 'Adam'),
(3, 'Aubois', 'Abdel'),
(4, 'Thévenaz', 'Armand'),
(5, 'Térieur', 'Alain'),
(6, 'Verse', 'Alain'),
(7, 'Tagère', 'Alain'),
(8, 'Versace', 'Alain'),
(9, 'Naline', 'André'),
(10, 'Hyère', 'Claire'),
(11, 'Mottay', 'Gwen'),
(12, 'Odin', 'Thor'),
(13, 'Dyossi', 'Daisy'),
(14, 'Chon', 'Denis'),
(15, 'Dormi', 'Djamal'),
(16, 'Honnête', 'Camille'),
(17, 'Diossi', 'Kelly'),
(18, 'Di-Domenico', 'Tiff'),
(19, 'Shouwey', 'Zaid'),
(20, 'Berney', 'Alec'),
(21, 'Premium', 'Flip'),
(22, 'Time', 'Vincent');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Abris`
--
ALTER TABLE `Abris`
  ADD PRIMARY KEY (`IDAbris`);

--
-- Index pour la table `ContreVisite`
--
ALTER TABLE `ContreVisite`
  ADD PRIMARY KEY (`IDContreVisite`),
  ADD KEY `FKVisite` (`FKVisite`);

--
-- Index pour la table `Visite`
--
ALTER TABLE `Visite`
  ADD PRIMARY KEY (`IDVisite`),
  ADD KEY `FKAbris` (`FKAbris`),
  ADD KEY `FKVisiteurs` (`FKVisiteurs`);

--
-- Index pour la table `Visiteurs`
--
ALTER TABLE `Visiteurs`
  ADD PRIMARY KEY (`IDVisiteurs`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Abris`
--
ALTER TABLE `Abris`
  MODIFY `IDAbris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `ContreVisite`
--
ALTER TABLE `ContreVisite`
  MODIFY `IDContreVisite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Visite`
--
ALTER TABLE `Visite`
  MODIFY `IDVisite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Visiteurs`
--
ALTER TABLE `Visiteurs`
  MODIFY `IDVisiteurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ContreVisite`
--
ALTER TABLE `ContreVisite`
  ADD CONSTRAINT `contrevisite_ibfk_1` FOREIGN KEY (`FKVisite`) REFERENCES `Visite` (`IDVisite`);

--
-- Contraintes pour la table `Visite`
--
ALTER TABLE `Visite`
  ADD CONSTRAINT `visite_ibfk_1` FOREIGN KEY (`FKAbris`) REFERENCES `Abris` (`IDAbris`),
  ADD CONSTRAINT `visite_ibfk_2` FOREIGN KEY (`FKVisiteurs`) REFERENCES `Visiteurs` (`IDVisiteurs`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
