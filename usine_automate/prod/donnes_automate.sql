-- Généré le :  Lun 01 Juillet 2019 à 13:46
-- Version du serveur :  10.3.16-MariaDB

--
-- Base de données :  `devops`
--

-- --------------------------------------------------------

--
-- Structure de la table `donnees_automates`
--

CREATE TABLE `donnees_automates` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `id_unite` int(255) NOT NULL,
  `numero_automate` int(255) NOT NULL,
  `type_automate` varchar(255) NOT NULL DEFAULT '0XFFFFFFFF',
  `temp_cuve` float NOT NULL DEFAULT 99.99,
  `temp_exterieur` float NOT NULL DEFAULT 99.99,
  `poids_lait_cuve` int(255) NOT NULL DEFAULT 9999999,
  `mesure_ph` float NOT NULL DEFAULT 9999.9,
  `mesure_k` int(255) NOT NULL DEFAULT 65534,
  `concent_nacl` float NOT NULL DEFAULT 9999.9,
  `niveau_bact_salmo` int(255) NOT NULL DEFAULT 65534,
  `niveau_bact_ecoli` int(255) NOT NULL DEFAULT 65534,
  `niveau_bact_listeria` int(255) NOT NULL DEFAULT 65534
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `donnees_err`
--

CREATE TABLE `donnees_err` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `donnees_automates`
--
ALTER TABLE `donnees_automates`
  ADD PRIMARY KEY (`id`);


