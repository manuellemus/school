-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 08:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registro`
--

-- --------------------------------------------------------

--
-- Table structure for table `alm__alumnos`
--

CREATE TABLE `alm__alumnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_grado` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alm__alumnos`
--

INSERT INTO `alm__alumnos` (`id`, `id_grado`, `codigo`, `nombre`, `edad`, `sexo`, `observacion`, `created_at`, `updated_at`) VALUES
(1, 6, 'A1', 'Manuel Angel', 26, 'M', 'atento', '2022-02-01 23:52:30', '2022-02-02 00:17:23'),
(3, 2, 'A3', 'Edwin', 34, 'M', 'test', '2022-02-02 00:47:32', '2022-02-02 00:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grd_grados`
--

CREATE TABLE `grd_grados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grd_grados`
--

INSERT INTO `grd_grados` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(2, 'Primer grado', '2022-02-01 12:57:55', '2022-02-01 13:37:30'),
(6, '5 grado', '2022-02-01 13:37:39', '2022-02-01 13:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `mat_materias`
--

CREATE TABLE `mat_materias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mat_materias`
--

INSERT INTO `mat_materias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Estudios Sociales', '2022-02-01 13:38:26', '2022-02-01 13:39:35'),
(2, 'Ciencia Salud y Medio Ambiente', '2022-02-01 13:38:42', '2022-02-01 13:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2022_01_31_235330_create_mat_materias_table', 1),
(18, '2022_01_31_235626_create_grd_grados_table', 1),
(19, '2022_01_31_235850_create_mxg_materias_x_grados_table', 1),
(20, '2022_01_31_235925_create_alm__alumnos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mxg_materias_x_grados`
--

CREATE TABLE `mxg_materias_x_grados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_grado` bigint(20) UNSIGNED NOT NULL,
  `id_materia` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mxg_materias_x_grados`
--

INSERT INTO `mxg_materias_x_grados` (`id`, `id_grado`, `id_materia`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-02-01 14:03:04', '2022-02-01 14:57:21'),
(2, 2, 2, '2022-02-01 14:41:43', '2022-02-01 14:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alm__alumnos`
--
ALTER TABLE `alm__alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alm__alumnos_id_grado_foreign` (`id_grado`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grd_grados`
--
ALTER TABLE `grd_grados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mat_materias`
--
ALTER TABLE `mat_materias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mxg_materias_x_grados`
--
ALTER TABLE `mxg_materias_x_grados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mxg_materias_x_grados_id_grado_foreign` (`id_grado`),
  ADD KEY `mxg_materias_x_grados_id_materia_foreign` (`id_materia`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alm__alumnos`
--
ALTER TABLE `alm__alumnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grd_grados`
--
ALTER TABLE `grd_grados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mat_materias`
--
ALTER TABLE `mat_materias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mxg_materias_x_grados`
--
ALTER TABLE `mxg_materias_x_grados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alm__alumnos`
--
ALTER TABLE `alm__alumnos`
  ADD CONSTRAINT `alm__alumnos_id_grado_foreign` FOREIGN KEY (`id_grado`) REFERENCES `grd_grados` (`id`);

--
-- Constraints for table `mxg_materias_x_grados`
--
ALTER TABLE `mxg_materias_x_grados`
  ADD CONSTRAINT `mxg_materias_x_grados_id_grado_foreign` FOREIGN KEY (`id_grado`) REFERENCES `grd_grados` (`id`),
  ADD CONSTRAINT `mxg_materias_x_grados_id_materia_foreign` FOREIGN KEY (`id_materia`) REFERENCES `mat_materias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
