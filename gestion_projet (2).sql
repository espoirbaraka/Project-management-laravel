-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 11 jan. 2023 à 14:14
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bailleurs`
--

CREATE TABLE `bailleurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bailleur` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `codeprojet` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bailleurs`
--

INSERT INTO `bailleurs` (`id`, `bailleur`, `codeprojet`, `created_at`, `updated_at`) VALUES
(1, 'ISIG-GOMA', 3, '2023-01-11 11:29:11', '2023-01-11 11:29:11'),
(2, 'ULB', 3, '2023-01-11 11:29:23', '2023-01-11 11:29:23'),
(3, 'FONDS SOCIAL DE LA RDC', 6, '2023-01-11 11:36:40', '2023-01-11 11:36:40'),
(4, 'Union Europeene', 6, '2023-01-11 11:36:56', '2023-01-11 11:36:56'),
(5, 'FONDS SOCIAL DE LA RDC', 8, '2023-01-11 11:51:21', '2023-01-11 11:51:21'),
(6, 'Gouvernement congolais', 8, '2023-01-11 11:51:41', '2023-01-11 11:51:41'),
(7, 'UNICEF', 9, '2023-01-11 11:54:58', '2023-01-11 11:54:58');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(84, '2014_10_12_000000_create_users_table', 1),
(85, '2014_10_12_100000_create_password_resets_table', 1),
(86, '2019_08_19_000000_create_failed_jobs_table', 1),
(87, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(88, '2022_11_12_112742_create_admins_table', 1),
(89, '2022_11_12_113702_create_utilisateurs_table', 1),
(90, '2022_11_12_190816_create_projets_table', 1),
(91, '2022_11_14_211330_create_taches_table', 1),
(92, '2022_11_14_211730_create_participations_table', 1),
(93, '2023_01_11_074628_create_bailleurs_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `participations`
--

CREATE TABLE `participations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_projet` int(11) NOT NULL,
  `code_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `participations`
--

INSERT INTO `participations` (`id`, `code_projet`, `code_user`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '2023-01-11 11:29:47', '2023-01-11 11:29:47'),
(2, 6, 1, '2023-01-11 11:36:19', '2023-01-11 11:36:19'),
(3, 8, 3, '2023-01-11 11:51:58', '2023-01-11 11:51:58'),
(4, 9, 1, '2023-01-11 11:54:46', '2023-01-11 11:54:46');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` double(8,2) NOT NULL,
  `localisation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `secteur` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `datearret` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `designation`, `budget`, `localisation`, `secteur`, `datedebut`, `datefin`, `datearret`, `created_by`, `statut`, `created_at`, `updated_at`) VALUES
(3, 'Projet CONJOINT ISIG-ULB', 50000.00, 'Goma', 'Renforcement de la colaboration entre l\'ISIG et l\'UCB', '2023-01-15 00:00:00', '2023-01-29 00:00:00', NULL, 1, 1, '2023-01-11 11:25:26', '2023-01-11 11:27:09'),
(4, 'Projet CODEPO', 50000.00, 'Goma', 'Projets collaboratif entre ISIG et ULB', '2023-01-12 00:00:00', '2023-01-31 00:00:00', '2023-01-11 11:52:30', 1, 2, '2023-01-11 11:28:16', '2023-01-11 11:52:30'),
(5, 'Projet UNICEF', 100000.00, 'Goma', 'Protection de l\'enfant', '2023-01-11 00:00:00', '2023-01-29 00:00:00', '2023-01-11 11:56:37', 1, 2, '2023-01-11 11:31:31', '2023-01-11 11:56:37'),
(6, 'Projet de plantation d\'arbre', 30000.00, 'Goma, Bukavu', 'Environnement', '2023-01-14 00:00:00', '2023-01-29 00:00:00', NULL, 3, 0, '2023-01-11 11:35:12', '2023-01-11 11:35:12'),
(8, 'Projet CONSTRUCTION DES ROUTES', 10000.00, 'Goma', 'Développement', '2023-01-11 00:00:00', '2023-01-31 00:00:00', NULL, 1, 1, '2023-01-11 11:49:46', '2023-01-11 11:50:57'),
(9, 'Projet PROTECTION DE L\'ENFANT CONGOLAIS', 5000.00, 'Goma', 'Protection de l\'enfant', '2023-01-11 00:00:00', '2023-01-13 00:00:00', NULL, 3, 0, '2023-01-11 11:54:01', '2023-01-11 11:54:01');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double(8,2) NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `codeprojet` int(11) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `designation`, `montant`, `datedebut`, `datefin`, `codeprojet`, `statut`, `created_at`, `updated_at`) VALUES
(1, 'Identification des acteurs', 1000.00, '2023-01-12 00:00:00', '2023-01-13 00:00:00', 3, 2, '2023-01-11 11:25:55', '2023-01-11 11:47:40'),
(2, 'Reunion avec les participants', 1000.00, '2023-01-14 00:00:00', '2023-01-16 00:00:00', 3, 1, '2023-01-11 11:26:58', '2023-01-11 11:47:50'),
(3, 'Identification des participants', 500.00, '2023-01-13 00:00:00', '2023-01-14 00:00:00', 4, 1, '2023-01-11 11:30:30', '2023-01-11 11:48:13'),
(4, 'Descente sur terrain', 1000.00, '2023-01-05 00:00:00', '2023-01-28 00:00:00', 5, 0, '2023-01-11 11:31:58', '2023-01-11 11:31:58'),
(5, 'Achat des plantines', 1000.00, '2023-01-14 00:00:00', '2023-01-16 00:00:00', 6, 0, '2023-01-11 11:35:55', '2023-01-11 11:35:55'),
(6, 'Redaction du budget', 500.00, '2023-01-20 00:00:00', '2023-01-21 00:00:00', 4, 0, '2023-01-11 11:48:50', '2023-01-11 11:48:50'),
(7, 'Achat des materiaux', 1000.00, '2023-01-11 00:00:00', '2023-01-12 00:00:00', 8, 1, '2023-01-11 11:50:19', '2023-01-11 11:51:07'),
(8, 'Deploiement des materiaux', 1000.00, '2023-01-13 00:00:00', '2023-01-14 00:00:00', 8, 0, '2023-01-11 11:50:46', '2023-01-11 11:50:46'),
(9, 'Descente sur terrain', 500.00, '2023-01-12 00:00:00', '2023-01-13 00:00:00', 9, 0, '2023-01-11 11:54:35', '2023-01-11 11:54:35');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postnom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `postnom`, `prenom`, `email`, `password`, `organisation`, `created_at`, `updated_at`) VALUES
(1, 'Baraka', 'Bigega', 'Espoir', 'esbarakabigega@gmail.com', '$2y$10$FL6OGsdMVlxMDsVJuOigfeSZbRpP54raBt0YqxHIBX3j3XrohGBJi', 'ISIG-GOMA', '2023-01-11 08:36:31', '2023-01-11 08:36:31'),
(2, 'Siwa', 'Mumbere', 'Carin', 'siwamumberecarin@gmail.com', '$2y$10$dfNJGgppTopblUg9gTnrZOe2G3QyjHe7zfwh3baTYMbnoA4cRopAy', 'ISIG-GOMA', '2023-01-11 11:23:39', '2023-01-11 11:23:39'),
(3, 'Providence', 'Baraka', 'Provi', 'provi@gmail.com', '$2y$10$gZn8F.RsvdwRm/5VAS.LwOYe8KE9Mu18NNIJ.JNMr3WaoX5l.hI.O', 'OVG', '2023-01-11 11:24:05', '2023-01-11 11:24:05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bailleurs`
--
ALTER TABLE `bailleurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `participations`
--
ALTER TABLE `participations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bailleurs`
--
ALTER TABLE `bailleurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT pour la table `participations`
--
ALTER TABLE `participations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
