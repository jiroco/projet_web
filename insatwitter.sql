-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Mai 2017 à 10:03
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `insatwitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnee`
--

CREATE TABLE `abonnee` (
  `IDUSER` int(4) NOT NULL,
  `IDUSERABONNE` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `abonnee`
--

INSERT INTO `abonnee` (`IDUSER`, `IDUSERABONNE`) VALUES
(2, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `ID` int(4) NOT NULL,
  `NOM` varchar(256) NOT NULL,
  `ABONNE` varchar(256) NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `ID` int(4) NOT NULL,
  `IDUSER` int(4) NOT NULL,
  `CONTENU` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`ID`, `IDUSER`, `CONTENU`) VALUES
(1, 1, 'Salut ceci est un test pour la base de donnée'),
(2, 2, 'Ceci est un test de message pour david neyron'),
(3, 2, 'Ceci est le deuxieme message pour un test de bdd'),
(4, 1, 'TEST d\'abonnée'),
(5, 1, 'Bonjour à tous j\'espere que tout le monde va bien!!! ceci est un test de publication');

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

CREATE TABLE `parametres` (
  `IDUSER` int(4) NOT NULL,
  `GROUPES` int(4) NOT NULL,
  `ABONNE` int(4) NOT NULL,
  `PUBLIC` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(4) NOT NULL,
  `NOM` varchar(256) NOT NULL,
  `PRENOM` varchar(256) NOT NULL,
  `MAIL` varchar(256) NOT NULL,
  `USERNAME` varchar(256) NOT NULL,
  `PASSWORD` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`ID`, `NOM`, `PRENOM`, `MAIL`, `USERNAME`, `PASSWORD`) VALUES
(1, 'Savoldelli', 'Jean', 'jean.savoldelli@insa-cvl.fr', 'jiroco', 'd4e457004f39e01ec1c25fdc0cfb20d5a9ebb792'),
(3, 'Lepêtre', 'Kévin', 'kevin.lepretre@insa-cvl.fr', 'klepretr', '965cff85d41273e529083032d195147f0a0ad0d1'),
(2, 'Neyron', 'David', 'david.neyron@insa-cvl.fr', 'dneyron', '3b6fbdb8226354a706dc9f70221c6e3794e7a296');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `parametres`
--
ALTER TABLE `parametres`
  ADD PRIMARY KEY (`IDUSER`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
