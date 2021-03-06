-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 20 mai 2021 à 19:02
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion etudiants`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants_ajout`
--

CREATE TABLE `etudiants_ajout` (
  `Matricule` char(6) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `DatNaissance` date NOT NULL,
  `Sexe` varchar(70) NOT NULL,
  `Filiere` varchar(50) NOT NULL,
  `Niveau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants_ajout`
--

INSERT INTO `etudiants_ajout` (`Matricule`, `Nom`, `DatNaissance`, `Sexe`, `Filiere`, `Niveau`) VALUES
('I17657', 'Mohamed Lemin', '2345-02-12', 'Masc', 'RT', 'L2'),
('I17730', 'Admin', '2021-05-09', 'Masc', 'BA', 'L3'),
('I17733', 'Mohamed', '2021-05-22', 'Fem', 'GI', 'L2'),
('I17737', 'Khadjetou Sidi   ', '1997-05-21', 'Masc', 'RT', 'L2'),
('I17750', 'Meymoune Mohamed    ', '2000-12-08', 'Fem', 'BA', 'L1'),
('I17789', 'Mohamed Moussa', '1999-05-15', 'Masc', 'RT', 'L2'),
('I17908', 'Mohamed', '2345-02-21', 'Masc', 'RT', 'L2');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `Titre` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` int(50) NOT NULL,
  `Full` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`Titre`, `Nom`, `Prenom`, `Email`, `Password`, `Full`) VALUES
('Etudiant', 'Ahmed', 'Mohamed', 'Ahmed@gmail.com', 123456, 'Ahmed Mohamed'),
('Etudiant', 'Mohamed', 'Lemin', 'Mohamed@gmail.com', 123456, 'Mohamed Lemin'),
('Admis', 'Gabra', 'Ehelhe', 'Gabra8@gmail.com', 123456, 'Gabra Ehelhe'),
('Admis', 'Mohamed', 'Moussa', 'Mohamed@gmail.com', 123456, 'Mohamed Moussa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants_ajout`
--
ALTER TABLE `etudiants_ajout`
  ADD UNIQUE KEY `Matricule` (`Matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
