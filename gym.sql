-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 08 déc. 2024 à 00:18
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
-- Base de données : `gym`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `photo`) VALUES
(2, 'nadia', 'admin@admin.com', '$2y$10$KSdZU3kvKfC9WnqMOpbszuiyfbavTYJ.tcNBlUdbGml1RRtiW4qka', 'admin.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

CREATE TABLE `coach` (
  `id_coach` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_num` varchar(25) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` text DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `adress` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`id_coach`, `username`, `email`, `phone_num`, `password`, `photo`, `salary`, `adress`) VALUES
(2, 'Ali Radi', 'aliradi@gmail.com', '062345678', '$2y$10$/qHpZumGFXZjufXR9Xj2Oe75dkvmME/egtNCH.XpHd3D6r9tUlzDe', '1733082614_de77633f7dee1bfc75a1.jpg', 3300, 'dakhla, agadir'),
(3, 'Mido Saidi', 'midosaidi@gmail.com', '078765432', '$2y$10$Dzy7jXLetxj/ayX0yQ.K8./F0LsH4H1HwkosVBgeCYB3Z6rJPH2WK', '1733082673_8d391c33ffbac582bbbe.jpg', 3000, 'salam, Agadir'),
(4, 'jack dizan', 'jackdizan@gmail.com', '07435624345', '$2y$10$EejSjX3rDR37ydfqrdElZOBecYJXHNI/XlkxrW/FP1JNq7jZAYmJK', '1733082759_09476aba754620cf9cfd.jpg', 4000, 'El houda, agadir'),
(5, 'lina kamil', 'linakamil@gmail.com', '069834567', '$2y$10$SQB5WNQN4KjjCuo8VQm/zuFql3P6XW5kFOnWS2YaetZlUg4et881O', '1733082831_773c9fe2ca609d27436a.jpg', 3100, 'salam, Agadir'),
(6, 'salma zaki', 'salmazaki@gmail.com', '07356465', '$2y$10$lokzEIlpJNTw3qqPSRca9OfTgww3vL/eC3AQDDkc6V4f79XI3md4a', '1733083021_a6eaa5d1c0f7783725d1.jpg', 2800, 'El houda, agadir');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_num` varchar(25) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(24) DEFAULT NULL,
  `sexe` varchar(50) DEFAULT NULL,
  `nb_abs` int(24) DEFAULT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `phone_num`, `password`, `age`, `sexe`, `nb_abs`, `photo`) VALUES
(6, 'hiba nait', 'hibanait@gmail.com', '0675672237', '$2y$10$XkSJf7hwLP6kLqoDPnRacOo3XlgPkDxSw6stIW5LihHPid4zYNob2', 26, 'female', NULL, 'admin.jpg'),
(10, 'nadia123', 'n245y7@gmail.com', '0675672237', '$2y$10$x/YltTTCvV9YVVlrj63CS.8dBiAikuHzaGCSxDerWNlRiD.j6Oocm', NULL, NULL, NULL, '1732990123_152ed04a41fdf1e4b9a4.png'),
(11, 'karim yazid', 'karimyazid@gmail.com', '0787654323', '$2y$10$XUtA4FaaYcLUfWdKcsINHOmCVN4N1bwj.hWHehwVlJXwtkyyWw/4S', 28, 'male', NULL, '1733608648_220ad654e02e3e2f7159.webp'),
(12, 'eatwell', 'eatwell@gmail.com', '0675672237', '$2y$10$V5Lc5xr8jCdXetAHkLLOJeJz7OaUfUlQYucfcJ3skgpaG6AZomg/e', 34, 'male', NULL, '1733610165_7917bc5bf201c8d9a5f2.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id_coach`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `coach`
--
ALTER TABLE `coach`
  MODIFY `id_coach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
