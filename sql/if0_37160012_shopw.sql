-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql110.byetcluster.com
-- Généré le :  Dim 24 nov. 2024 à 15:22
-- Version du serveur :  10.11.9-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `if0_37160012_shopw`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('admin', '20042005OW');

-- --------------------------------------------------------

--
-- Structure de la table `imgpg`
--

CREATE TABLE `imgpg` (
  `id` int(11) NOT NULL,
  `linkimg` varchar(100) NOT NULL,
  `idP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE `links` (
  `idlink` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `link` varchar(500) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pagep`
--

CREATE TABLE `pagep` (
  `titre` varchar(100) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `IMPORTANT1` varchar(1000) NOT NULL,
  `vu` int(11) NOT NULL,
  `IMPORTANT2` varchar(1000) NOT NULL,
  `AW` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pagep`
--

INSERT INTO `pagep` (`titre`, `bio`, `IMPORTANT1`, `vu`, `IMPORTANT2`, `AW`) VALUES
('Opp Shop', 'lahna iktb ta3rif 3am', 'haja lazem ya3refha ili bach ysta5dm il page hathi', 0, 'haja o5ra lazmo ya3rifha', 'ili wa9fin 3ala sit web oowa9tah t3mal\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `part`
--

CREATE TABLE `part` (
  `linkimg` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `part`
--

INSERT INTO `part` (`linkimg`, `nom`, `id`) VALUES
('http://oussamabenalitn.great-site.net/assets/Sans%20titre.jpg', 'Oussama Benali - Developer', 1);

-- --------------------------------------------------------

--
-- Structure de la table `prod`
--

CREATE TABLE `prod` (
  `idP` int(11) NOT NULL,
  `nomP` varchar(50) NOT NULL,
  `imgP` varchar(100) NOT NULL,
  `diP` varchar(1000) NOT NULL,
  `prix` varchar(60) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typep`
--

CREATE TABLE `typep` (
  `idP` int(11) NOT NULL,
  `nameP` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `typep`
--

INSERT INTO `typep` (`idP`, `nameP`) VALUES
(1, 'Clothes'),
(2, 'Bags'),
(3, 'Phone');

-- --------------------------------------------------------

--
-- Structure de la table `vu`
--

CREATE TABLE `vu` (
  `ip` varchar(50) NOT NULL,
  `vile` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `typeNT` varchar(50) NOT NULL,
  `NVu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vu`
--

INSERT INTO `vu` (`ip`, `vile`, `position`, `typeNT`, `NVu`) VALUES
('102.152.210.10', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'Tunisie Telecom', 3),
('102.152.217.193', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'Tunisie Telecom', 1),
('102.154.140.64', 'Tunis Governorate - Tunis', '36.7994,10.1652', 'Tunisie Telecom', 2),
('102.156.47.236', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'ADSL Home TOpnet', 4),
('102.157.253.212', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'ADSL Home Topnet', 1),
('102.158.93.250', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'ADSL Home Topnet', 3),
('102.173.220.225', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'ooredoo TN', 1),
('102.26.181.21', 'Zaghouan Governorate - Zaghouan', '36.4061,10.1398', 'Tunisie Telecom', 2),
('102.27.159.163', 'Tunis Governorate - La Marsa', '36.8752,10.3341', 'Tunisie Telecom', 1),
('102.27.163.38', 'Tunis Governorate - La Marsa', '36.8752,10.3341', 'Tunisie Telecom', 4),
('102.30.161.217', 'Bizerte Governorate - Bizerte', '37.2774,9.8749', 'Tunisie Telecom', 3),
('160.158.118.73', 'Ben Arous Governorate - MÃ©grine', '36.7707,10.2404', 'Orange Tunisie', 2),
('165.51.188.240', 'Bizerte Governorate - Ferryville', '37.1554,9.7861', 'Orange Tunisie', 1),
('165.51.243.36', 'Ben Arous Governorate - Ben Arous', '36.7496,10.2126', 'Orange Tunisie', 1),
('173.252.107.114', 'Virginia - Sandston', '37.5137,-77.2664', 'Facebook, Inc.', 2),
('173.252.107.31', 'Virginia - Sandston', '37.5137,-77.2664', 'Facebook, Inc.', 1),
('173.252.95.5', 'Iowa - Altoona', '41.6473,-93.4744', 'Facebook, Inc.', 1),
('193.148.48.252', 'Hesse - Frankfurt am Main', '50.1109,8.68213', 'Lycatel Distribution UK Limited', 2),
('196.179.214.22', 'Zaghouan Governorate - El Fahs', '36.3735,9.8995', 'ooredoo TN', 2),
('196.203.81.4', 'Tunis Governorate - Tunis', '36.822,10.1717', 'SOCIETE NATIONALE DES TELECOMMUNICATIONS (Tunisie ', 1),
('196.224.30.247', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'Orange Tunisie', 12),
('197.0.55.36', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'TOPNET', 2),
('197.2.182.142', 'Monastir Governorate - Monastir', '35.7875,10.8253', 'TOPNET', 2),
('197.25.127.223', 'Manouba - Manouba', '36.8101,10.0956', 'Orange Tunisie', 1),
('197.4.165.39', 'Sousse Governorate - Sousse', '35.8251,10.6446', 'SOCIETE NATIONALE DES TELECOMMUNICATIONS (Tunisie ', 2),
('31.13.127.10', 'Leinster - Clonee', '53.4117,-6.4495', 'Facebook, Inc.', 1),
('41.226.21.164', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'TOPNET', 1),
('41.62.168.184', 'Tunis Governorate - Tunis', '36.8232,10.1701', 'TOPNET', 3),
('66.102.9.170', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 1),
('66.102.9.172', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 1),
('66.220.149.37', 'Oregon - Prineville', '44.3041,-120.8364', 'Facebook, Inc.', 1),
('66.220.149.63', 'Oregon - Prineville', '44.3041,-120.8364', 'Facebook, Inc.', 2),
('66.249.81.129', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 1),
('66.249.81.130', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 1),
('66.249.81.131', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 2),
('66.249.93.37', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 1),
('66.249.93.39', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 1),
('69.171.249.23', 'Virginia - Ashburn', '39.0469,-77.4903', 'Facebook, Inc.', 1),
('69.171.249.24', 'Virginia - Ashburn', '39.0469,-77.4903', 'Facebook, Inc.', 1),
('69.171.249.31', 'Virginia - Ashburn', '39.0469,-77.4903', 'Facebook, Inc.', 2),
('74.125.210.33', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 2),
('74.125.210.34', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 1),
('74.125.210.35', 'California - Mountain View', '37.422,-122.084', 'Google LLC', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `imgpg`
--
ALTER TABLE `imgpg`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`idlink`);

--
-- Index pour la table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `type` (`type`);

--
-- Index pour la table `typep`
--
ALTER TABLE `typep`
  ADD PRIMARY KEY (`idP`);

--
-- Index pour la table `vu`
--
ALTER TABLE `vu`
  ADD PRIMARY KEY (`ip`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `imgpg`
--
ALTER TABLE `imgpg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `links`
--
ALTER TABLE `links`
  MODIFY `idlink` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `part`
--
ALTER TABLE `part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `prod`
--
ALTER TABLE `prod`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `typep`
--
ALTER TABLE `typep`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `prod`
--
ALTER TABLE `prod`
  ADD CONSTRAINT `prod_ibfk_1` FOREIGN KEY (`type`) REFERENCES `typep` (`idP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
