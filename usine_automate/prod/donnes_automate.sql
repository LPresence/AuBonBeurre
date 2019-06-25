-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Sam 25 Mai 2019 à 18:12
-- Version du serveur :  10.3.15-MariaDB-1:10.3.15+maria~stretch-log
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `devops`
--

-- --------------------------------------------------------

--
-- Structure de la table `donnees_automates`
--

CREATE TABLE `donnees_automates` (
  `id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `id_unite` int(255) NOT NULL,
  `numero_automate` int(255) NOT NULL,
  `type_automate` varchar(255) NOT NULL,
  `temp_cuve` float NOT NULL,
  `temp_exterieur` float NOT NULL,
  `poids_lait_cuve` int(255) NOT NULL,
  `mesure_ph` float NOT NULL,
  `mesure_k` int(255) NOT NULL,
  `concent_nacl` float NOT NULL,
  `niveau_bact_salmo` int(255) NOT NULL,
  `niveau_bact_ecoli` int(255) NOT NULL,
  `niveau_bact_listeria` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Index pour la table `donnees_automates`
--
ALTER TABLE `donnees_automates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour la table `donnees_automates`
--
ALTER TABLE `donnees_automates`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
