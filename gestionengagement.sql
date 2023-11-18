-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Novembre 2023 à 12:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestionengagement`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapelle`
--

CREATE TABLE IF NOT EXISTS `chapelle` (
  `idchapelle` int(11) NOT NULL DEFAULT '0',
  `nomschapelle` text,
  PRIMARY KEY (`idchapelle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `chrestiens`
--

CREATE TABLE IF NOT EXISTS `chrestiens` (
  `numphone` int(11) NOT NULL DEFAULT '0',
  `photo` text,
  `noms` text,
  `genre` text,
  `adresse` text,
  PRIMARY KEY (`numphone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `engagement`
--

CREATE TABLE IF NOT EXISTS `engagement` (
  `idengager` int(11) NOT NULL DEFAULT '0',
  `libelle` text,
  PRIMARY KEY (`idengager`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `operengager`
--

CREATE TABLE IF NOT EXISTS `operengager` (
  `idoperengager` int(11) NOT NULL DEFAULT '0',
  `datejr` date DEFAULT NULL,
  `montant` double DEFAULT NULL,
  PRIMARY KEY (`idoperengager`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE IF NOT EXISTS `paiement` (
  `idpaiement` int(11) NOT NULL DEFAULT '0',
  `montant` double DEFAULT NULL,
  `datejr` date DEFAULT NULL,
  `libelle` text,
  PRIMARY KEY (`idpaiement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idutilisateur` int(11) NOT NULL DEFAULT '0',
  `noms` text,
  `genre` text,
  `motpass` text,
  `foncction` text,
  PRIMARY KEY (`idutilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
