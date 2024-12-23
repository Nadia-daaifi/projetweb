-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 déc. 2024 à 09:29
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
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `coach` varchar(255) NOT NULL,
  `max_participants` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `name`, `description`, `start_time`, `end_time`, `coach`, `max_participants`, `created_at`, `updated_at`) VALUES
(1, 'pilates', 'A training program to improve posture, balance, and flexibility.', '22:30:00', '23:00:00', '3', NULL, '2024-12-09 23:36:21', '2024-12-10 23:02:29'),
(2, 'Weight Training', 'Targeted workout for muscle development and strength', '19:00:00', '21:30:00', '4', NULL, '2024-12-09 23:53:00', '2024-12-09 23:53:00'),
(3, 'Cardio Training', 'Cardio workout to improve endurance and burn calories (running, cycling, etc.)', '18:00:00', '19:00:00', '6', NULL, '2024-12-09 23:55:27', '2024-12-09 23:55:27'),
(5, 'CrossFit', 'High-intensity training combining weightlifting, cardio, and gymnastics', '00:00:00', '14:00:00', '3', NULL, '2024-12-09 23:57:51', '2024-12-09 23:57:51'),
(6, 'Zumba', ' A fitness dance session with Latin-inspired moves', '16:00:00', '17:30:00', '5', NULL, '2024-12-09 23:58:53', '2024-12-09 23:58:53'),
(7, 'Circuit Training', 'A circuit-based workout with various exercises for full-body strength', '09:30:00', '00:00:00', '4', NULL, '2024-12-10 00:01:03', '2024-12-10 00:01:03');

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

CREATE TABLE `coach` (
  `id_coach` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_num` varchar(25) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `adress` text DEFAULT NULL,
  `nb_abs` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`id_coach`, `username`, `email`, `phone_num`, `photo`, `salary`, `adress`, `nb_abs`) VALUES
(2, 'Ali Radi', 'aliradi@gmail.com', '062345678', '1733082614_de77633f7dee1bfc75a1.jpg', 3300, 'dakhla, agadir', 2),
(3, 'Mido Saidi', 'midosaidi@gmail.com', '078765432', '1733082673_8d391c33ffbac582bbbe.jpg', 3000, 'salam, Agadir', 2),
(4, 'jack dizan', 'jackdizan@gmail.com', '07435624345', '1733082759_09476aba754620cf9cfd.jpg', 4000, 'El houda, agadir', 0),
(5, 'lina kamil', 'linakamil@gmail.com', '069834567', '1733082831_773c9fe2ca609d27436a.jpg', 3100, 'salam, Agadir', 0);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'nadia', 'nadiadaaifi@gmail.com', 'request', 'Hello Fitheal', '2024-12-10 18:08:45', '2024-12-10 18:08:45'),
(2, 'hiba', 'hibanait@gmail.com', 'hello', 'hello my gym', '2024-12-10 18:18:18', '2024-12-10 18:18:18'),
(3, 'nadia', 'nadiadaaifi@gmail.com', 'request', 'hello world', '2024-12-10 21:54:48', '2024-12-10 21:54:48'),
(4, 'nadia', 'n245y7@gmail.com', 'request', 'saluut', '2024-12-10 21:58:48', '2024-12-10 21:58:48'),
(5, 'nadia', 'n245y7@gmail.com', 'request', 'test', '2024-12-10 22:05:28', '2024-12-10 22:05:28');

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
  `photo` text DEFAULT NULL,
  `nb_abs` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `phone_num`, `password`, `age`, `sexe`, `photo`, `nb_abs`) VALUES
(6, 'hiba nait', 'hibanait@gmail.com', '0675672237', '$2y$10$XkSJf7hwLP6kLqoDPnRacOo3XlgPkDxSw6stIW5LihHPid4zYNob2', 26, 'female', 'admin.jpg', 2),
(10, 'nadia123', 'n245y7@gmail.com', '0675672237', '$2y$10$b3vxGBJEMK.DE3iogpOhPuEw9ATwLwlOReLjHLukkkCevibcX1yD6', 30, 'female', '1733863164_e44b7396da969146a3eb.jpg', 1),
(11, 'karim yazid', 'karimyazid@gmail.com', '0787654323', '$2y$10$XUtA4FaaYcLUfWdKcsINHOmCVN4N1bwj.hWHehwVlJXwtkyyWw/4S', 28, 'male', '1733608648_220ad654e02e3e2f7159.webp', 1),
(12, 'eatwell', 'eatwell@gmail.com', '0675672237', '$2y$10$V5Lc5xr8jCdXetAHkLLOJeJz7OaUfUlQYucfcJ3skgpaG6AZomg/e', 34, 'male', '1733863085_887aa30d5e5d3104cb6b.png', 0),
(13, 'meryem oub', 'meryemoub@gmail.com', '0675672237', '$2y$10$lNPNhth9QHR0PI0IhjMRD.F0hEjxekxzwtULYRAuV.toSJzmp6Zl.', 23, 'female', '1733867994_d751aaa35b93edaa1c1c.jpg', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id_coach`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `coach`
--
ALTER TABLE `coach`
  MODIFY `id_coach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
