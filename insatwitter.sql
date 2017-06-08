-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Juin 2017 à 08:40
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
(1, 2),
(9, 1),
(3, 2),
(3, 1),
(2, 3),
(10, 1),
(2, 10);

-- --------------------------------------------------------

--
-- Structure de la table `aime`
--

CREATE TABLE `aime` (
  `ID_USER` int(11) NOT NULL,
  `ID_MESSAGE` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `atog`
--

CREATE TABLE `atog` (
  `IDUSER` int(11) NOT NULL,
  `IDGROUPE` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `atog`
--

INSERT INTO `atog` (`IDUSER`, `IDGROUPE`) VALUES
(1, 1),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `ID` int(4) NOT NULL,
  `NOM` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`ID`, `NOM`) VALUES
(1, 'Les paras'),
(2, 'les 3A');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `ID` int(4) NOT NULL,
  `IDUSER` int(4) NOT NULL,
  `CONTENU` varchar(256) NOT NULL,
  `NOM` varchar(256) NOT NULL,
  `PRENOM` varchar(256) NOT NULL,
  `IMAGE` varchar(256) NOT NULL,
  `THUMBSUP` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`ID`, `IDUSER`, `CONTENU`, `NOM`, `PRENOM`, `IMAGE`, `THUMBSUP`) VALUES
(1, 1, 'Salut ceci est un test pour la base de donnée', 'Savoldelli', 'Jean', 'jiroco', 0),
(2, 2, 'Ceci est un test de message pour david neyron', 'Neyron', 'David', 'dneyron', 0),
(3, 2, 'Ceci est le deuxieme message pour un test de bdd', 'Neyron', 'David', 'dneyron', 0),
(4, 1, 'TEST d\'abonnée', 'Savoldelli', 'Jean', 'jiroco', 0),
(5, 1, 'Bonjour à tous j\'espere que tout le monde va bien!!! ceci est un test de publication', 'Savoldelli', 'Jean', 'jiroco', 0),
(6, 2, 'Ceci est un message test que l\'on fait avec david neyron', 'Neyron', 'David', 'dneyron', 0),
(7, 9, 'Vous etes tous moche !', 'abdallah', 'yanis', 'sansuser', 0),
(12, 2, 'bonjour c\'est moi david', 'Neyron', 'David', 'dneyron', 0),
(13, 10, 'coucou c\'est mon premier jour dessus :)', 'Aublet', 'Marine', 'sansuser', 0),
(19, 2, 'essaie pour yanis', 'Neyron', 'David', 'dneyron', 0),
(20, 2, 'coucou', 'Neyron', 'David', 'dneyron', 0);

-- --------------------------------------------------------

--
-- Structure de la table `messagetog`
--

CREATE TABLE `messagetog` (
    `ID` int(4) NOT NULL,
    `IDGROUPE` int(4) NOT NULL,
    `MESSAGE` varchar(256) NOT NULL,
    `NOM` varchar(256) NOT NULL,
    `PRENOM` varchar(256) NOT NULL,
    `IMAGE` varchar(256) NOT NULL
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- Contenu de la table `messagetog`
--

INSERT INTO `messagetog` (`ID`, `IDGROUPE`, `MESSAGE`, `NOM`, `PRENOM`, `IMAGE`) VALUES
 (3, 2, 'test Message 3A', '', '', ''),
 (4, 2, 'test2', '', '', ''),
 (6, 2, 'ceci est un test de message pour les 3A', '', '', ''),
 (10, 1, 'test de message de groupe', 'Neyron', 'David', 'dneyron');
  
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
  `PASSWORD` varchar(256) NOT NULL,
  `DEPARTEMENT` varchar(256) NOT NULL,
  `IMAGE_PROFIL` varchar(256) DEFAULT 'sansuser'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`ID`, `NOM`, `PRENOM`, `MAIL`, `USERNAME`, `PASSWORD`, `DEPARTEMENT`, `IMAGE_PROFIL`) VALUES
(1, 'Savoldelli', 'Jean', 'jean.savoldelli@insa-cvl.fr', 'jiroco', 'd4e457004f39e01ec1c25fdc0cfb20d5a9ebb792', 'STI', 'jiroco'),
(3, 'Leprêtre', 'Kévin', 'kevin.lepretre@insa-cvl.fr', 'klepretr', '965cff85d41273e529083032d195147f0a0ad0d1', 'STI', 'klepretr'),
(2, 'Neyron', 'David', 'david.neyron@insa-cvl.fr', 'dneyron', '3b6fbdb8226354a706dc9f70221c6e3794e7a296', 'STI', 'dneyron'),
(9, 'abdallah', 'yanis', 'yanis.abdallah@insa-cvl.fr', 'yabda', '9d9a0b447934653304e8524cf877a4b36b4df366', 'STI', 'sansuser'),
(10, 'Aublet', 'Marine', 'marine.aublet@insa-cvl.fr', 'maublet', 'f474ad826aca1a5bea8416f225c649da4246052e', 'MRI', 'sansuser');

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
-- Index pour la table `messagetog`
--
ALTER TABLE `messagetog`
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
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `messagetog`
--
ALTER TABLE `messagetog`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
