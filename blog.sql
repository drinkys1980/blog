-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-12-2020 a las 23:06:31
-- Versión del servidor: 8.0.22-0ubuntu0.20.04.3
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `content` text COLLATE latin1_spanish_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `slug`) VALUES
(4, 'Almacenamiento de imagenes nueva etapa', 'Como disenar imagenes de las sailor scouts con JAVA', 1, 2, '2019-02-06 22:31:35', '2019-02-06 22:31:35', 'almacenamiento-de-imagenes-nueva-etapa'),
(5, 'Sailor Scout en JAVA', '<h1><strong>HABIA UNA VEZ</strong></h1><p><strong>Una heroina que fue desarrollada en JAVA</strong></p><p><strong><br></strong></p><p><img src=\"data:image/jpeg;base64,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\" alt=\"Sera senshi\"><strong><br></strong></p>', 1, 2, '2019-02-07 01:43:58', '2019-02-12 04:29:16', 'sailor-scout-en-java'),
(6, 'nueva prueba', '<h1><strong>prueba habia una vez algo que no se puede dejar en vacío</strong></h1>', 1, 1, '2019-02-08 04:29:53', '2019-02-08 04:29:53', 'nueva-prueba'),
(7, 'las sailor scouts en c++!!', '<h3 style=\"text-align: center;\"><strong><em>No se puede creer tanta belleza en C++!!!</em></strong></h3>', 1, 3, '2019-02-14 03:33:11', '2019-02-14 03:33:11', 'las-sailor-scouts-en-c'),
(8, 'Tranquilidad', 'ioyiguyftyfu y uyd tu ufiiftub cu iylulth .cvb jh syrytf&nbsp; z6erdtfgiuj&nbsp; 68uikgfdzedgf.', 1, 1, '2019-02-14 03:34:32', '2019-02-14 03:34:32', 'tranquilidad'),
(9, 'prueba total', 'Este es un archivo en MySQL. Esto sirve para guardar bastantes datos en una tabla.', 2, 7, '2019-03-27 05:16:32', '2019-03-27 05:16:32', 'prueba-total');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article_tag`
--

CREATE TABLE `article_tag` (
  `id` int UNSIGNED NOT NULL,
  `article_id` int UNSIGNED NOT NULL,
  `tag_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 4, 3, '2019-02-06 22:31:35', '2019-02-06 22:31:35'),
(2, 4, 2, '2019-02-06 22:31:35', '2019-02-06 22:31:35'),
(4, 6, 2, '2019-02-08 04:29:53', '2019-02-08 04:29:53'),
(5, 5, 2, '2019-02-12 04:34:35', '2019-02-12 04:34:35'),
(6, 5, 3, '2019-02-12 04:34:51', '2019-02-12 04:34:51'),
(7, 7, 2, '2019-02-14 03:33:11', '2019-02-14 03:33:11'),
(8, 8, 2, '2019-02-14 03:34:32', '2019-02-14 03:34:32'),
(9, 9, 3, '2019-03-27 05:16:32', '2019-03-27 05:16:32'),
(10, 9, 2, '2019-03-27 05:16:32', '2019-03-27 05:16:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PHP', '2018-08-20 17:43:58', '2018-08-20 17:43:58'),
(2, 'JAVA', '2018-08-20 17:44:03', '2018-08-20 17:44:03'),
(3, 'C++', '2018-08-20 17:44:10', '2018-08-20 17:44:10'),
(4, 'ASP.NET', '2018-08-20 17:44:23', '2018-08-20 17:44:23'),
(5, 'PHYTON', '2018-08-20 17:44:32', '2018-08-20 17:44:32'),
(6, 'SQL SERVER', '2018-08-20 17:44:41', '2018-08-20 17:44:41'),
(7, 'MySQL', '2018-08-20 17:44:47', '2018-08-20 17:44:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `article_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `name`, `article_id`, `created_at`, `updated_at`) VALUES
(2, 'image_1549492295.jpg', 4, '2019-02-06 22:31:35', '2019-02-06 22:31:35'),
(3, 'image_1549503838.jpg', 5, '2019-02-07 01:43:58', '2019-02-07 01:43:58'),
(4, 'image_1549600193.jpg', 6, '2019-02-08 04:29:53', '2019-02-08 04:29:53'),
(5, 'image_1550115191.jpg', 7, '2019-02-14 03:33:11', '2019-02-14 03:33:11'),
(6, 'image_1550115272.png', 8, '2019-02-14 03:34:32', '2019-02-14 03:34:32'),
(7, 'image_1553663792.png', 9, '2019-03-27 05:16:32', '2019-03-27 05:16:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_24_170238_add_categories_table', 1),
(4, '2018_06_24_171306_add_articles_table', 1),
(5, '2018_06_24_172027_add_images_table', 1),
(6, '2018_06_24_172310_add_tags_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `token` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Programacion', '2018-10-07 23:42:50', '2018-10-07 23:43:38'),
(3, 'Diseno', '2018-10-07 23:43:45', '2018-10-07 23:44:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `type` enum('member','admin') COLLATE latin1_spanish_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'David Rincon', 'ingedars@gmail.com', '$2y$12$IaMww1PzC77Y1Xnjne1xieQSaDPZMxnYvOsXcGrVPP3Ht1QK6RrVO', 'admin', 'BdMsc6mWlEoks3ZLucPYovGNHh0jq2XjgbgC3QUTxIoYH0xLHRmq0mmZZJeX', '2018-08-20 17:43:23', '2018-10-07 19:35:29'),
(2, 'Andres Suarez', 'davidrincon_co@yahoo.com', '$2y$12$IaMww1PzC77Y1Xnjne1xieQSaDPZMxnYvOsXcGrVPP3Ht1QK6RrVO', 'member', 'tAo8Pq8o52I7VsI2lDTP1QpC56bfWzYbeuXNYa7jClbiuGeiv4Q1pD1RBQcK', '2018-08-20 17:43:44', '2018-08-20 17:43:44'),
(3, 'SQM1pSjXIG', 'LmgRfcuwyS@gmail.com', '$2y$10$MMXDsDfWlaFBLT1OJgwKXuzLi2UrdiZeThET7WOeO0uszVlDKrng.', 'member', NULL, NULL, NULL),
(4, 'tx4SyNYGCf', 'wNWKnKkiok@gmail.com', '$2y$10$bf.j5gWH1iloTH0iRnl.yO8VOxfNP0elUU6NZzzwpylfrudmGH/DK', 'member', NULL, NULL, NULL),
(5, 'r9q9gEaCl7', 'gYRoYYCueR@gmail.com', '$2y$10$ZkwfWCpZvxehmkoSubJCS.QgWQObWC8sOjaL.C9KILJTKp5.QzpQ2', 'member', NULL, NULL, NULL),
(6, 'Elta Wilkinson', 'darwin19@example.org', '$2y$10$PTDGLFc2P8.vonNpOTgRbu9P9KrO8X85cVOaEuQjt9AzI3uKaOwX6', 'member', 'KPwCj0crGy', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(7, 'Cathryn Feil', 'ujones@example.net', '$2y$10$ngo7mjP8STtJedq6zJ5bkuL3llXulGg6ZqK8uzeBUE3RIKklSJm3y', 'member', 'OsDf6uXHD5', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(8, 'Ms. Thalia Jaskolski DVM', 'shanahan.mariam@example.com', '$2y$10$/sjg7k5l5tHq6ZVnGy.6qeN1D0cGMbwhxh85cNUuEYKCzmArh5Miu', 'member', 'fGYciSertF', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(9, 'Prof. Newell Wilderman DVM', 'carlo37@example.org', '$2y$10$ya9MWjVR3k0fi1A1vZ5nY.Xqh.BPHjOcDEdMCeWa/inM7i48h/Xsa', 'member', '5xk2XnQ91s', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(10, 'Duncan Gulgowski III', 'ebarrows@example.com', '$2y$10$cfaK1BTe0cSTninnLxuk4uoqwev9IooDpr.i8n027co7HaMwIELmi', 'member', 'XMQSKWr0Pv', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(11, 'Isadore Heathcote', 'terry.angeline@example.com', '$2y$10$TSK7T6kzgA68U7hX1g4IH.Aogmk8iybM2XsqZSkEGHjaaax/B0AgK', 'member', 'P7yc2CaVca', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(12, 'Augusta Lind', 'ana83@example.org', '$2y$10$XS17bHkq2vlsVWJEWvcGy.FzgdJSlaFxfjgGxeWghNg2rkZLekVHK', 'member', 'CJ55EZkChi', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(13, 'Miss Sheila Fadel III', 'hosea.zboncak@example.net', '$2y$10$0yB1z4Et96dni3OSKgEzfOaQ06gtrzppv3kOSa/aiNgUCmA5N3Ity', 'member', 'P6Jq0LMd1A', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(14, 'Rosalind Block II', 'awyman@example.com', '$2y$10$ZwQZm.Rrhaz8PStJTJe83O1Rc0xC/XR1KSsbl4TfNeYp6dRFrAY0a', 'member', 'fMIDWWXuK3', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(15, 'Patsy Feil', 'febert@example.net', '$2y$10$7gMSJ236iUQ9JI9TxRVGaOM6gamhIL/g60LPO4KWeyzI8xp8s8z3C', 'member', 'cLo8ZTuh1v', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(16, 'Prof. Franco Jacobs V', 'madisyn.lueilwitz@example.com', '$2y$10$efIllBdyl6G95sQf6xo4JekbZ4mEiCJnCX6QVGFSNj6ew0axXRqT2', 'member', 'CR3e7Otp4n', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(17, 'Prof. Jacey Terry I', 'orville49@example.com', '$2y$10$km1qj.cmq1ix.jw7BXMVJe1mdp67.haCAwhraEVfkAYgnPhs9m7H2', 'member', 'yC7xgAPXnR', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(18, 'Maye Osinski Jr.', 'simonis.willard@example.com', '$2y$10$n9tP/ShYMXXPZ5kU1RuDMuXeFUrfQmqy/FZhXjowtx2WqvWPMvEPK', 'member', 'lTYLugBjfY', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(19, 'Ardith Schuppe', 'phermiston@example.net', '$2y$10$R.lqAK7z.oZTP5ZfaAN3YelSP9IZ.ed2rDZZ3VMeKxsAfE/tmXTb.', 'member', 'Jb6oE7Stnv', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(20, 'Octavia Pouros II', 'troy.sporer@example.net', '$2y$10$Qbp/6oTpmKMbpW5vi5lprOmhckD3NLIdKPKYOSKqVK7SadAgHkVWm', 'member', 'rukBFvUvSL', '2019-03-18 00:34:07', '2019-03-18 00:34:07'),
(21, 'Chase Schroeder', 'uwintheiser@example.com', '$2y$10$cTDRoKf9dgpm96LsnUYBWeJxXibYHkN1IT1bh9Dx8pTPSDNmsh3qO', 'member', 'MF5qBc7oAd', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(22, 'Ms. Delpha Hyatt DVM', 'kassulke.aidan@example.com', '$2y$10$b3IlSNMF8KX6rMK1B7/VpuWK/I/rfSRAVi770t7.9/b7p1RGCQlLq', 'member', 'PXJCc1vl86', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(23, 'Noel Schmidt DVM', 'carter.geo@example.net', '$2y$10$CiKuNgOllvutbqLvfzYbrOA8A4X5yOiQ9FFq6E30cCdexZB.DaJLa', 'member', 'U1TBY2jrYf', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(24, 'Anita Langosh', 'dmedhurst@example.net', '$2y$10$a1CuBi1EBe3LB8CsLzVciuw4dXP5L8XC5xBu11bzlIani4PqKHXty', 'member', 'wmbSgxj6rQ', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(25, 'Reece Abernathy', 'bernice.paucek@example.com', '$2y$10$7DCoFzbHWDZIUyoIT0oLn.gpCtSYR5ibG4k9mC76yjrWkhCulVD8W', 'member', 'dCjtpgmyDC', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(26, 'Elisabeth Upton', 'larue.braun@example.org', '$2y$10$Sc7uv/GJeoEacBI5WlhY4..zRdZakS6Q5EQZqLn7fzXDP5a/12V/u', 'member', 'egVzOTPfqO', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(27, 'Darius Senger', 'antwon.von@example.com', '$2y$10$R0fd3PgSbKHsuSGNBRCDsu2RJHMUPh5qOxSBup0HnoBllVEscrX/a', 'member', 'VwZ3iuvJAE', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(28, 'Jillian Goodwin', 'toy.emmett@example.com', '$2y$10$aROsj23tWFORkd6iVAkrKub/0UsHFn2ZUowikeyrHf83iciR32vY.', 'member', 'oQLqCr0u6l', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(29, 'Bill Bechtelar', 'wilderman.deshaun@example.com', '$2y$10$ohuNiSmWlsa7P3DoXG2e9OM8GJJ8tOX/GM.cvzfCn5E6P.kL2.NeC', 'member', '6Xxx92BVH6', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(30, 'Daniela Barrows', 'beth.sipes@example.org', '$2y$10$VjDlu53ySQDmCWPCpx7ImupD9ffQsmXarODnmeEorcoI1wngJdnbC', 'member', 'G97uXNJbzv', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(31, 'Paolo Howe', 'tom65@example.com', '$2y$10$AdS4dZpxX8bT2mp8LcHlvOljZavtGXXfRXqy.pydApJlvfHk.RAIW', 'member', 'sBGYW89aWF', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(32, 'Prof. Zack Rutherford', 'spfannerstill@example.com', '$2y$10$4lkw0GQV81Pnf2FGP0OBaeoKd.xFq.MBkcJfJNP9BhKX9sXqiYBu2', 'member', 'g5myuuVurX', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(33, 'Ruth Wunsch', 'qfarrell@example.com', '$2y$10$NGe5fO4WeahANwiYW6eIiuzyWBZAVW7/7o0bunJZCCcE2PNjfYkTq', 'member', 'Ug9z9n4HL6', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(34, 'Johnpaul Rutherford', 'rhaag@example.net', '$2y$10$ctC9Cs1QURVnKa0YeIiAAeOPuWR.hS1K46JVzORFe0YJyQSM9xfkq', 'member', 'x4OfT00bmT', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(35, 'Prof. Liliana McClure DVM', 'goconnell@example.org', '$2y$10$SESk2UmZAhHwLAZs9lkgquViSPCMzd2c3pjllDlCpQlziv54M.RZS', 'member', '3UqEeJTGPw', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(36, 'Mozell Swift', 'donna.littel@example.org', '$2y$10$iXmVM.JMKTvGXh3sQd5nBOUJr0Wp75sL/0nf17k.j8cRboW0O6/YC', 'member', 'v99EgHkovN', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(37, 'Weldon Heidenreich IV', 'hudson.botsford@example.net', '$2y$10$SFE14N0GJv9Brrluf55nhuxtBObUqcX/eA8BJG9wj5qud9mejeT1K', 'member', 'yLIxo6eumX', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(38, 'Ms. Shana Bradtke V', 'goldner.meredith@example.com', '$2y$10$82xqoieTk8yNk5sEkQfSteEfTZYkgr1NC0wcYBDvzfzqUAGdbY4XW', 'member', 'irQcV6uInW', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(39, 'Prof. Janelle Schmitt MD', 'anya.krajcik@example.org', '$2y$10$f2L5IMq9XLfBZ.dj2V0j5eQgcPnMbo60WnScNcJJv3EiPaqzyCvLK', 'member', 'RXOuW9W3FB', '2019-03-18 00:34:08', '2019-03-18 00:34:08'),
(41, 'Nedra Rau', 'harmony49@example.org', '$2y$10$.7bT2Mf/CVOw5iJpfCFC1ecnw0iGQWsOpoZ7UItrZpOLcaOG.L2/6', 'member', 'wk4ouc6XJC', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(42, 'Prof. Duane Hane', 'marvin24@example.org', '$2y$10$4viysejv9b2vO2AAimuBEeGFO69kbGd02aETMR/fovPucXzld2tv2', 'member', 'sUfaaPbdZH', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(43, 'Toby Kulas', 'america.schumm@example.com', '$2y$10$/T7pYlK95hBgYkJfyArI2u1jXACDY3EnJ2bB/p23/aC0b0kvdAbDe', 'member', 'zDzLTgC2Q9', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(44, 'Cortez Ritchie', 'djohnston@example.net', '$2y$10$W2lP8Zyxi4HtQ2CGgQrPAucccA7YHW2/dfSOKeWmN6QOYPDA9VxTK', 'member', 'hsfYY2wwSm', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(45, 'Mr. Troy Walsh I', 'ahilll@example.org', '$2y$10$xBiYq9xiGSDj8yObB3FUIuNuhnhvIPK/T4Pzx3d/DDLDhVZa7Jk.W', 'member', 'HI87oIXgM3', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(46, 'Rafael Willms', 'jacobi.magali@example.com', '$2y$10$QVgdF3m6M1T/aLIHSsjLbug.xr0lzC60TPfegRShxiolQQEL9tMmS', 'member', 'u9TNPmBuut', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(47, 'Miss Gabriella Metz PhD', 'wgislason@example.net', '$2y$10$wkg8jBOpwEPLL1SHXQPnTOmJnazvIsKvzvdO4yVswC6Xta9cKyMX2', 'member', 'F6ydgHKAbF', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(48, 'Ms. Jazmyn Funk IV', 'ardith.kreiger@example.com', '$2y$10$LXNlQ4kwpJyF.81vbjZj3uV56bMMLiIgQHzRYaW20frnjWU7mM9ji', 'member', 'orqIRZml7p', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(49, 'Edna Keebler', 'noemy.schmeler@example.net', '$2y$10$CyG0UuK3f3nQOYhRQDqNr.m.Wx7IyFAYnZys9kduYbjfaZKiEKwS6', 'member', 'aMbbhlBR6J', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(50, 'Dock Welch', 'mrenner@example.net', '$2y$10$jL51NXBv/iFBMGgbcQSJ3OXIVUpnDpvQ1LuQKgrfNJpElyNgYI9kC', 'member', 'bc9lQvAcbq', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(51, 'Dr. Summer Simonis Jr.', 'katarina.skiles@example.net', '$2y$10$gunQJ4OcLrKwHBq8gzuUS.jzLrsKSbw3cAKB0b.LhqYSmO6AEFPfy', 'member', 'VxTGLPp5tx', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(52, 'Martin Christiansen I', 'eulah11@example.org', '$2y$10$5t1m.UeTPH6lvZbRaj43deKlBqCJrM3wHUPjhmWv7vfwgvSxeUEyW', 'member', 'VqF8wHlU95', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(53, 'Sterling Rath', 'pearline.bradtke@example.org', '$2y$10$7PX4eICmrllAkNLbNXg6B.sulbj.t/r1u7E.VMVINakvnDj3Fix36', 'member', 'U4hMXvAyB7', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(54, 'Mr. Jovan Schneider', 'garett.toy@example.org', '$2y$10$EEyQRHyqXrjvQeTGzKj7u.Y/5Tudnos3llXuSUlI0TvgbqpUU341e', 'member', 'Dtppi2Iwjo', '2019-03-18 00:34:09', '2019-03-18 00:34:09'),
(55, 'Alvah Schimmel', 'schamberger.judson@example.com', '$2y$10$z6amGKKKvrLMeTWrJAgDf.jnF4Onoy3XiDEiTBlLKm/XYFIhbOy4m', 'member', 'U9ImX5SFZ0', '2019-03-18 00:34:09', '2019-03-18 00:34:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_tag_article_id_foreign` (`article_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_article_id_foreign` (`article_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Filtros para la tabla `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
