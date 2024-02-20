-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 fév. 2024 à 18:03
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `garage`
--

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

CREATE TABLE `horaires` (
  `id` int(1) NOT NULL,
  `days` varchar(8) NOT NULL,
  `time_am` varchar(13) NOT NULL,
  `time_pm` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`id`, `days`, `time_am`, `time_pm`) VALUES
(1, 'lundi', '08:45 - 12:00', '14:00 - 18:00'),
(2, 'mardi', '08:45 - 12:00', '14:00 - 18:00'),
(3, 'mercredi', '08:40 - 12:00', '14:00 - 18:00'),
(4, 'jeudi', '08:45 - 12:00', '14:00 - 18:00'),
(5, 'vendredi', '08:45 - 12:00', '14:00 - 18:00'),
(6, 'samedi', '08:45 - 12:00', 'Fermé'),
(7, 'dimanche', 'Fermé', 'Fermé');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(191) NOT NULL,
  `mdp` text NOT NULL,
  `date_creation_compte` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `mail`, `mdp`, `date_creation_compte`) VALUES
(1, 'essai', 'essai', 'test@free.fr', '*0', '2024-02-19 21:22:04'),
(5, 'Turner', 'Paul', 'turner@gmail.com', '*0', '2024-02-20 09:05:30'),
(6, 'Vincent', 'Parrot', 'mbaudouin674@gmail.com', '*0', '2024-02-20 11:20:07'),
(7, 'Collins', 'Kate', 'collins@free.fr', '*0', '2024-02-20 15:07:23'),
(8, 'Test', 'test2', 'test5@free.fr', '*0', '2024-02-20 15:10:43');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `days` (`days`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
