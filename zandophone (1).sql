-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 22 juil. 2020 à 11:08
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zandophone`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_aside` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`, `icon`, `image_aside`) VALUES
(3, NULL, 1, 'samsung', 'samsung', '2020-07-21 10:33:18', '2020-07-21 14:00:57', 'categories\\July2020\\FIh2sW1HBncqw5o6J6NB.png', 'categories\\July2020\\esrEOL0lMYrWbTRgcafO.png'),
(4, NULL, 1, 'nokia', 'nokia', '2020-07-21 10:33:34', '2020-07-21 14:00:31', 'categories\\July2020\\4H6BFiJDfJJav3CPs9Tz.png', 'categories\\July2020\\sXIp5SWd9ma5je3cee7q.png'),
(5, NULL, 1, 'tecno', 'tecno', '2020-07-21 10:33:52', '2020-07-21 14:00:02', 'categories\\July2020\\lLGlUyMP6Qac1yqeMH2L.png', 'categories\\July2020\\dbTADRD8qa7SU9zjggOd.jpg'),
(6, NULL, 1, 'itel', 'itel', '2020-07-21 10:34:06', '2020-07-21 13:59:22', 'categories\\July2020\\2chP8ZfeRNQyNsXZWZ8u.png', 'categories\\July2020\\s6RKBRJ2FAzy3FfSxChg.png'),
(7, NULL, 1, 'iphone', 'iphone', '2020-07-21 10:34:29', '2020-07-21 13:58:54', 'categories\\July2020\\MdL17Jyc8WN9oVeH0ZWM.png', 'categories\\July2020\\psWxpglwyDWNesLT7Jfd.png'),
(8, NULL, 1, 'motorola', 'motorola', '2020-07-21 10:34:48', '2020-07-21 13:58:30', 'categories\\July2020\\L7RZTOmtB2t8LncRpFtD.png', 'categories\\July2020\\i1DniNlpdFTqKI1yKTS5.png'),
(9, NULL, 1, 'infinix', 'infinix', '2020-07-21 10:35:02', '2020-07-21 13:58:00', 'categories\\July2020\\xor5camUfnrqP3BTEHna.png', 'categories\\July2020\\2IB5EIDemnsM1kUIGChE.png');

-- --------------------------------------------------------

--
-- Structure de la table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'name', 'text', 'Nom', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'price', 'text', 'Prix', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 4),
(60, 7, 'picture_gallery', 'multiple_images', 'Picture Gallery', 0, 0, 0, 0, 0, 0, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 5),
(61, 7, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 6),
(62, 7, 'delivery', 'rich_text_box', 'Delivery', 0, 1, 1, 1, 1, 1, '{}', 7),
(63, 7, 'caracteristique', 'rich_text_box', 'Caracteristique', 0, 1, 1, 1, 1, 1, '{}', 8),
(64, 7, 'quantity', 'text', 'Quantity', 0, 1, 1, 1, 1, 1, '{}', 9),
(65, 7, 'garanty', 'rich_text_box', 'Garanty', 0, 1, 1, 1, 1, 1, '{}', 10),
(66, 7, 'slug', 'text', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 11),
(68, 7, 'user_id', 'text', 'User Id', 1, 0, 0, 0, 0, 0, '{}', 13),
(69, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 14),
(70, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 15),
(73, 7, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 16),
(75, 4, 'icon', 'image', 'Icon', 0, 1, 1, 1, 1, 1, '{}', 8),
(76, 4, 'image_aside', 'image', 'Image Aside', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 9),
(77, 7, 'phone_belongsto_category_relationship_1', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 18),
(78, 7, 'category_id', 'text', 'Category Id', 1, 1, 1, 1, 1, 1, '{}', 12);

-- --------------------------------------------------------

--
-- Structure de la table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-07-21 08:15:03', '2020-07-21 08:15:03'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-07-21 08:15:03', '2020-07-21 08:15:03'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-07-21 08:15:03', '2020-07-21 08:15:03'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-07-21 08:15:09', '2020-07-21 13:51:00'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2020-07-21 08:15:10', '2020-07-21 08:15:10'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(7, 'phones', 'phones', 'Phone', 'Phones', NULL, 'App\\Phone', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-07-21 08:23:28', '2020-07-22 06:41:37');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-07-21 08:15:04', '2020-07-21 08:15:04');

-- --------------------------------------------------------

--
-- Structure de la table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-07-21 08:15:04', '2020-07-21 08:15:04', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-07-21 08:15:04', '2020-07-21 08:15:04', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-07-21 08:15:04', '2020-07-21 08:15:04', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-07-21 08:15:04', '2020-07-21 08:15:04', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2020-07-21 08:15:04', '2020-07-21 08:15:04', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2020-07-21 08:15:04', '2020-07-21 08:15:04', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2020-07-21 08:15:04', '2020-07-21 08:15:04', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2020-07-21 08:15:04', '2020-07-21 08:15:04', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2020-07-21 08:15:04', '2020-07-21 08:15:04', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2020-07-21 08:15:04', '2020-07-21 08:15:04', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2020-07-21 08:15:09', '2020-07-21 08:15:09', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2020-07-21 08:15:11', '2020-07-21 08:15:11', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2020-07-21 08:15:11', '2020-07-21 08:15:11', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2020-07-21 08:15:13', '2020-07-21 08:15:13', 'voyager.hooks', NULL),
(15, 1, 'Phones', '', '_self', NULL, NULL, NULL, 15, '2020-07-21 08:23:28', '2020-07-21 08:23:28', 'voyager.phones.index', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `book_id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `company_name`, `email`, `phone`, `address`, `city`, `user_id`, `created_at`, `updated_at`, `comment`, `book_id`, `active`) VALUES
(2, 'Guerth', 'Manzala', NULL, 'guerthmanzala@gmail.com', '+243820558443', 'Kinshasa', 'Kinshasa', 1, '2020-02-26 12:49:46', '2020-02-26 12:49:46', NULL, 7, 1),
(3, 'Guerth', 'Manzala', NULL, 'guerthmanzala@gmail.com', '+243820558443', 'Kinshasa', 'Kinshasa', 1, '2020-02-26 12:49:46', '2020-02-26 12:49:46', NULL, 3, 1),
(4, 'bvvg', 'aaa', 'aaa', 'aaaa@aaa', 'aaaaahhhhhhhh', 'aaaa', 'aaa', 1, '2020-02-26 14:37:36', '2020-02-26 14:37:36', NULL, 8, 1),
(0, 'bedi', 'TSHITSHOMPO', NULL, 'tshitshob@gmail.com', '+243812380589', 'kinshasa/gombe', 'Kinshasa', 1, '2020-04-13 12:58:20', '2020-04-13 12:58:20', NULL, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-07-21 08:15:12', '2020-07-21 08:15:12');

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
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(2, 'browse_bread', NULL, '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(3, 'browse_database', NULL, '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(4, 'browse_media', NULL, '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(5, 'browse_compass', NULL, '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(6, 'browse_menus', 'menus', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(7, 'read_menus', 'menus', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(8, 'edit_menus', 'menus', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(9, 'add_menus', 'menus', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(10, 'delete_menus', 'menus', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(11, 'browse_roles', 'roles', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(12, 'read_roles', 'roles', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(13, 'edit_roles', 'roles', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(14, 'add_roles', 'roles', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(15, 'delete_roles', 'roles', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(16, 'browse_users', 'users', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(17, 'read_users', 'users', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(18, 'edit_users', 'users', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(19, 'add_users', 'users', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(20, 'delete_users', 'users', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(21, 'browse_settings', 'settings', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(22, 'read_settings', 'settings', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(23, 'edit_settings', 'settings', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(24, 'add_settings', 'settings', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(25, 'delete_settings', 'settings', '2020-07-21 08:15:05', '2020-07-21 08:15:05'),
(26, 'browse_categories', 'categories', '2020-07-21 08:15:09', '2020-07-21 08:15:09'),
(27, 'read_categories', 'categories', '2020-07-21 08:15:09', '2020-07-21 08:15:09'),
(28, 'edit_categories', 'categories', '2020-07-21 08:15:09', '2020-07-21 08:15:09'),
(29, 'add_categories', 'categories', '2020-07-21 08:15:09', '2020-07-21 08:15:09'),
(30, 'delete_categories', 'categories', '2020-07-21 08:15:09', '2020-07-21 08:15:09'),
(31, 'browse_posts', 'posts', '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(32, 'read_posts', 'posts', '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(33, 'edit_posts', 'posts', '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(34, 'add_posts', 'posts', '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(35, 'delete_posts', 'posts', '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(36, 'browse_pages', 'pages', '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(37, 'read_pages', 'pages', '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(38, 'edit_pages', 'pages', '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(39, 'add_pages', 'pages', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(40, 'delete_pages', 'pages', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(41, 'browse_hooks', NULL, '2020-07-21 08:15:13', '2020-07-21 08:15:13'),
(42, 'browse_phones', 'phones', '2020-07-21 08:23:28', '2020-07-21 08:23:28'),
(43, 'read_phones', 'phones', '2020-07-21 08:23:28', '2020-07-21 08:23:28'),
(44, 'edit_phones', 'phones', '2020-07-21 08:23:28', '2020-07-21 08:23:28'),
(45, 'add_phones', 'phones', '2020-07-21 08:23:28', '2020-07-21 08:23:28'),
(46, 'delete_phones', 'phones', '2020-07-21 08:23:28', '2020-07-21 08:23:28');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1);

-- --------------------------------------------------------

--
-- Structure de la table `phones`
--

CREATE TABLE `phones` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `delivery` longtext COLLATE utf8mb4_unicode_ci,
  `caracteristique` text COLLATE utf8mb4_unicode_ci,
  `quantity` int(11) DEFAULT NULL,
  `garanty` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `phones`
--

INSERT INTO `phones` (`id`, `name`, `price`, `image`, `picture_gallery`, `description`, `delivery`, `caracteristique`, `quantity`, `garanty`, `slug`, `category_id`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Samsung Galaxy J7 Prime', 350, 'phones\\July2020\\i9nE6VvYsUkdTB0isZHL.jpg', '[\"phones\\\\July2020\\\\lhSnB9OO5uiBmUB9vanR.jpg\",\"phones\\\\July2020\\\\vXnK6yiaGe1PhRqPfCoX.jpg\",\"phones\\\\July2020\\\\sjIr5akptwLvnBfKC4o5.jpg\",\"phones\\\\July2020\\\\axJrJgfJTbrcEuvSciCv.jpg\"]', '<ul class=\"spec\" style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; text-rendering: optimizelegibility; list-style-position: initial; list-style-image: initial; color: #505050; font-family: Poppins;\">\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Technology: No cellular connectivity</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Dimensions: 46 x 46 x 11.4 mm</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Weight: IPS LCD g</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Display: AMOLED 1.56 inches</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Resolution: 360 x 330</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">OS: Android Wear OS</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Chipset: Snapdragon 400</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">CPU: Quad-core 1.2 GHz Cortex-A7</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Internal: 4 GB, 512 MB RAM</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Camera: No</li>\r\n</ul>\r\n<div class=\"desc\" style=\"box-sizing: border-box; color: #505050; font-family: Poppins;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-rendering: optimizelegibility;\">A year after the first generation took the smartwatch world by storm with its timeless looks, it is time for the new Moto 360 to step up to the plate. The new iteration of Motorola\'s acclaimed Android Wear device arrives on the market with revamped design, highly customizable body in two sizes, a version designed for ladies, and a brand new Sport model.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-rendering: optimizelegibility;\">Of course, in addition to new looks and levels of customizability, the new Moto 360 also features improved hardware over the first generation. The newcomer packs a more powerful Qualcomm Snapdragon 400 solution, sharper display, and bigger battery. Take a look at its key features below.</p>\r\n</div>', '<h2 style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.15; font-family: Poppins; margin: 0px 0px 0.5em; text-rendering: optimizelegibility; text-transform: uppercase; color: #505050;\">PURCHASING &amp; DELIVERY</h2>\r\n<p><span style=\"color: #505050; font-family: Poppins;\">Before you make your purchase, it�s helpful to know the measurements of the area you plan to place the furniture. You should also measure any doorways and hallways through which the furniture will pass to get to its final destination.</span></p>\r\n<h5 style=\"box-sizing: border-box; font-family: Poppins; font-weight: 400; margin: 0px 0px 0.5em; line-height: 1.4; text-rendering: optimizelegibility; font-size: 0.85714em; color: #505050;\">Picking up at the store</h5>\r\n<p><span style=\"color: #505050; font-family: Poppins;\">HTML Shop requires that all products are properly inspected BEFORE you take it home to insure there are no surprises. Our team is happy to open all packages and will assist in the inspection process. We will then reseal packages for safe transport. We encourage all customers to bring furniture pads or blankets to protect the items during transport as well as rope or tie downs. HTML Shop will not be responsible for damage that occurs after leaving the store or during transit. It is the purchaser�s responsibility to make sure the correct items are picked up and in good condition.</span></p>\r\n<h5 style=\"box-sizing: border-box; font-family: Poppins; font-weight: 400; margin: 0px 0px 0.5em; line-height: 1.4; text-rendering: optimizelegibility; font-size: 0.85714em; color: #505050;\">Delivery</h5>\r\n<p><span style=\"color: #505050; font-family: Poppins;\">Customers are able to pick the next available delivery day that best fits their schedule. However, to route stops as efficiently as possible, HTML Shop will provide the time frame. Customers will not be able to choose a time. You will be notified in advance of your scheduled time frame. Please make sure that a responsible adult (18 years or older) will be home at that time.</span><br style=\"box-sizing: border-box; color: #505050; font-family: Poppins;\" /><span style=\"color: #505050; font-family: Poppins;\">In preparation for your delivery, please remove existing furniture, pictures, mirrors, accessories, etc. to prevent damages. Also insure that the area where you would like your furniture placed is clear of any old furniture and any other items that may obstruct the passageway of the delivery team. HTML Shop will deliver, assemble, and set-up your new furniture purchase and remove all packing materials from your home. Our delivery crews are not permitted to move your existing furniture or other household items. Delivery personnel will attempt to deliver the purchased items in a safe and controlled manner but will not attempt to place furniture if they feel it will result in damage to the product or your home. Delivery personnel are unable to remove doors, hoist furniture or carry furniture up more than 3 flights of stairs. An elevator must be available for deliveries to the 4th floor and above.</span></p>', '<ul class=\"spec\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-rendering: optimizelegibility; list-style: none; color: #505050; font-family: Poppins;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Technology: No cellular connectivity</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Dimensions: 46 x 46 x 11.4 mm</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Weight: IPS LCD g</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Display: AMOLED 1.56 inches</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Resolution: 360 x 330</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">OS: Android Wear OS</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Chipset: Snapdragon 400</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">CPU: Quad-core 1.2 GHz Cortex-A7</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Internal: 4 GB, 512 MB RAM</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Camera: No</li>\r\n</ul>', 12, '<h2 style=\"box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.15; font-family: Poppins; margin: 0px 0px 0.5em; text-rendering: optimizelegibility; text-transform: uppercase; color: #505050;\">WARRANTY INFORMATION</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-rendering: optimizelegibility; color: #505050; font-family: Poppins;\">LIMITED WARRANTIES<br style=\"box-sizing: border-box;\" />Limited Warranties are non-transferable. The following Limited Warranties are given to the original retail purchaser of the following Ashley Furniture Industries, Inc.Products:</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-rendering: optimizelegibility; color: #505050; font-family: Poppins;\">Frames Used In Upholstered and Leather Products<br style=\"box-sizing: border-box;\" />Limited Lifetime Warranty<br style=\"box-sizing: border-box;\" />A Limited Lifetime Warranty applies to all frames used in sofas, couches, love seats, upholstered chairs, ottomans, sectionals, and sleepers. Ashley Furniture Industries,Inc. warrants these components to you, the original retail purchaser, to be free from material manufacturing defects.</p>', 'samsung-s7', 3, '2020-07-21 10:39:56', '2020-07-21 10:39:56', 'PUBLISHED'),
(2, 'nokia', 350, 'phones\\July2020\\0BSXaktpUDmUJbDHU5Hk.jpg', NULL, '<ul class=\"spec\" style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; text-rendering: optimizelegibility; list-style-position: initial; list-style-image: initial; color: #505050; font-family: Poppins;\">\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Technology: No cellular connectivity</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Dimensions: 46 x 46 x 11.4 mm</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Weight: IPS LCD g</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Display: AMOLED 1.56 inches</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Resolution: 360 x 330</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">OS: Android Wear OS</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Chipset: Snapdragon 400</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">CPU: Quad-core 1.2 GHz Cortex-A7</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Internal: 4 GB, 512 MB RAM</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; list-style: inside disc;\">Camera: No</li>\r\n</ul>\r\n<div class=\"desc\" style=\"box-sizing: border-box; color: #505050; font-family: Poppins;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-rendering: optimizelegibility;\">A year after the first generation took the smartwatch world by storm with its timeless looks, it is time for the new Moto 360 to step up to the plate. The new iteration of Motorola\'s acclaimed Android Wear device arrives on the market with revamped design, highly customizable body in two sizes, a version designed for ladies, and a brand new Sport model.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-rendering: optimizelegibility;\">Of course, in addition to new looks and levels of customizability, the new Moto 360 also features improved hardware over the first generation. The newcomer packs a more powerful Qualcomm Snapdragon 400 solution, sharper display, and bigger battery. Take a look at its key features below.</p>\r\n</div>', '<p><span style=\"color: #505050; font-family: Poppins;\">Before you make your purchase, it�s helpful to know the measurements of the area you plan to place the furniture. You should also measure any doorways and hallways through which the furniture will pass to get to its final destination.</span></p>\r\n<h5 style=\"box-sizing: border-box; font-family: Poppins; font-weight: 400; margin: 0px 0px 0.5em; line-height: 1.4; text-rendering: optimizelegibility; font-size: 0.85714em; color: #505050;\">Picking up at the store</h5>\r\n<p><span style=\"color: #505050; font-family: Poppins;\">HTML Shop requires that all products are properly inspected BEFORE you take it home to insure there are no surprises. Our team is happy to open all packages and will assist in the inspection process. We will then reseal packages for safe transport. We encourage all customers to bring furniture pads or blankets to protect the items during transport as well as rope or tie downs. HTML Shop will not be responsible for damage that occurs after leaving the store or during transit. It is the purchaser�s responsibility to make sure the correct items are picked up and in good condition.</span></p>\r\n<h5 style=\"box-sizing: border-box; font-family: Poppins; font-weight: 400; margin: 0px 0px 0.5em; line-height: 1.4; text-rendering: optimizelegibility; font-size: 0.85714em; color: #505050;\">Delivery</h5>\r\n<p><span style=\"color: #505050; font-family: Poppins;\">Customers are able to pick the next available delivery day that best fits their schedule. However, to route stops as efficiently as possible, HTML Shop will provide the time frame. Customers will not be able to choose a time. You will be notified in advance of your scheduled time frame. Please make sure that a responsible adult (18 years or older) will be home at that time.</span><br style=\"box-sizing: border-box; color: #505050; font-family: Poppins;\" /><span style=\"color: #505050; font-family: Poppins;\">In preparation for your delivery, please remove existing furniture, pictures, mirrors, accessories, etc. to prevent damages. Also insure that the area where you would like your furniture placed is clear of any old furniture and any other items that may obstruct the passageway of the delivery team. HTML Shop will deliver, assemble, and set-up your new furniture purchase and remove all packing materials from your home. Our delivery crews are not permitted to move your existing furniture or other household items. Delivery personnel will attempt to deliver the purchased items in a safe and controlled manner but will not attempt to place furniture if they feel it will result in damage to the product or your home. Delivery personnel are unable to remove doors, hoist furniture or carry furniture up more than 3 flights of stairs. An elevator must be available for deliveries to the 4th floor and above.</span></p>', '<ul class=\"spec\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-rendering: optimizelegibility; list-style: none; color: #505050; font-family: Poppins;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Technology: No cellular connectivity</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Dimensions: 46 x 46 x 11.4 mm</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Weight: IPS LCD g</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Display: AMOLED 1.56 inches</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Resolution: 360 x 330</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">OS: Android Wear OS</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Chipset: Snapdragon 400</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">CPU: Quad-core 1.2 GHz Cortex-A7</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Internal: 4 GB, 512 MB RAM</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 5px; list-style: inside square;\">Camera: No</li>\r\n</ul>', 12, '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-rendering: optimizelegibility; color: #505050; font-family: Poppins;\">LIMITED WARRANTIES<br style=\"box-sizing: border-box;\" />Limited Warranties are non-transferable. The following Limited Warranties are given to the original retail purchaser of the following Ashley Furniture Industries, Inc.Products:</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-rendering: optimizelegibility; color: #505050; font-family: Poppins;\">Frames Used In Upholstered and Leather Products<br style=\"box-sizing: border-box;\" />Limited Lifetime Warranty<br style=\"box-sizing: border-box;\" />A Limited Lifetime Warranty applies to all frames used in sofas, couches, love seats, upholstered chairs, ottomans, sectionals, and sleepers. Ashley Furniture Industries,Inc. warrants these components to you, the original retail purchaser, to be free from material manufacturing defects.</p>', 'nokia', 4, '2020-07-22 06:43:54', '2020-07-22 06:43:54', 'PUBLISHED');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-07-21 08:15:11', '2020-07-21 08:15:11'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-07-21 08:15:11', '2020-07-21 08:15:11');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-07-21 08:15:04', '2020-07-21 08:15:04'),
(2, 'user', 'Normal User', '2020-07-21 08:15:04', '2020-07-21 08:15:04');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-07-21 08:15:12', '2020-07-21 08:15:12'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-07-21 08:15:12', '2020-07-21 08:15:12');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$1ABOvMNOCtyoura33M257e8Gx293ClI0MNekbD6dM.ueaOvI..gU6', 'Qk93VIe3dyCXnH2vmV7UiAK0LBZqgQoRhHfAkiRCKoZTp9XWzL6zwrbERIdz', '{\"locale\":\"fr\"}', '2020-07-21 08:15:10', '2020-07-22 06:29:13');

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Index pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Index pour la table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Index pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Index pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Index pour la table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phones_catergory_id_index` (`category_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Index pour la table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Index pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
