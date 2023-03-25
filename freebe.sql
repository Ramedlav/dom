-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.29-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных dbs9848126
-- Дамп структуры для таблица dbs9848126.announcements
CREATE TABLE IF NOT EXISTS `announcements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.announcements: ~8 rows (приблизительно)
DELETE FROM `announcements`;
INSERT INTO `announcements` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'Apartments', NULL, NULL),
	(2, 'Studio apartments', NULL, NULL),
	(3, 'Houses', NULL, NULL),
	(4, 'Investments', NULL, NULL),
	(5, 'Rooms', NULL, NULL),
	(6, 'Commercial premises', NULL, NULL),
	(7, 'Halls and warehouses', NULL, NULL),
	(8, 'Garages', NULL, NULL);

-- Дамп структуры для таблица dbs9848126.construction
CREATE TABLE IF NOT EXISTS `construction` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.construction: ~7 rows (приблизительно)
DELETE FROM `construction`;
INSERT INTO `construction` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'Unit', NULL, NULL),
	(2, 'Tenement', NULL, NULL),
	(3, 'A detached house', NULL, NULL),
	(4, 'Seal', NULL, NULL),
	(5, 'Private', NULL, NULL),
	(6, 'Apartment building', NULL, NULL),
	(7, 'Loft', NULL, NULL);

-- Дамп структуры для таблица dbs9848126.dialogs
CREATE TABLE IF NOT EXISTS `dialogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `sub_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.dialogs: ~19 rows (приблизительно)
DELETE FROM `dialogs`;
INSERT INTO `dialogs` (`id`, `user_id`, `sub_id`, `post_id`, `created_at`, `updated_at`) VALUES
	(8, 1, 2, 2, '2023-03-02 15:27:57', '2023-03-02 15:27:57'),
	(9, 1, 2, 1, '2023-03-02 18:33:29', '2023-03-02 18:33:29'),
	(12, 2, 3, 6, '2023-03-08 08:12:18', '2023-03-08 08:12:18'),
	(13, 2, 3, 6, '2023-03-08 08:16:59', '2023-03-08 08:16:59'),
	(14, 2, 3, 6, '2023-03-08 08:19:06', '2023-03-08 08:19:06'),
	(15, 2, 3, 6, '2023-03-08 08:21:57', '2023-03-08 08:21:57'),
	(16, 2, 3, 6, '2023-03-08 08:22:48', '2023-03-08 08:22:48'),
	(17, 2, 3, 6, '2023-03-08 08:23:53', '2023-03-08 08:23:53'),
	(18, 2, 3, 6, '2023-03-08 08:26:39', '2023-03-08 08:26:39'),
	(19, 2, 3, 6, '2023-03-08 08:27:15', '2023-03-08 08:27:15'),
	(20, 2, 3, 6, '2023-03-08 08:28:16', '2023-03-08 08:28:16'),
	(21, 2, 3, 6, '2023-03-08 08:31:33', '2023-03-08 08:31:33'),
	(22, 2, 2, 6, '2023-03-08 08:16:45', '2023-03-08 08:16:45'),
	(23, 2, 2, 6, '2023-03-08 08:17:49', '2023-03-08 08:17:49'),
	(24, 2, 2, 6, '2023-03-08 08:19:25', '2023-03-08 08:19:25'),
	(25, 2, 2, 6, '2023-03-08 08:19:29', '2023-03-08 08:19:29'),
	(26, 2, 2, 6, '2023-03-08 08:19:48', '2023-03-08 08:19:48'),
	(27, 2, 2, 6, '2023-03-08 08:19:51', '2023-03-08 08:19:51'),
	(28, 2, 2, 6, '2023-03-08 08:20:20', '2023-03-08 08:20:20');

-- Дамп структуры для таблица dbs9848126.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.failed_jobs: ~0 rows (приблизительно)
DELETE FROM `failed_jobs`;

-- Дамп структуры для таблица dbs9848126.filters
CREATE TABLE IF NOT EXISTS `filters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.filters: ~0 rows (приблизительно)
DELETE FROM `filters`;

-- Дамп структуры для таблица dbs9848126.finish_condition
CREATE TABLE IF NOT EXISTS `finish_condition` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.finish_condition: ~3 rows (приблизительно)
DELETE FROM `finish_condition`;
INSERT INTO `finish_condition` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'to live', NULL, NULL),
	(2, 'to finish', NULL, NULL),
	(3, 'for renovation', NULL, NULL);

-- Дамп структуры для таблица dbs9848126.floor
CREATE TABLE IF NOT EXISTS `floor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.floor: ~14 rows (приблизительно)
DELETE FROM `floor`;
INSERT INTO `floor` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'basement', NULL, NULL),
	(2, 'ground floor', NULL, NULL),
	(3, '1', NULL, NULL),
	(4, '2', NULL, NULL),
	(5, '3', NULL, NULL),
	(6, '4', NULL, NULL),
	(7, '5', NULL, NULL),
	(8, '6', NULL, NULL),
	(9, '7', NULL, NULL),
	(10, '8', NULL, NULL),
	(11, '9', NULL, NULL),
	(12, '10', NULL, NULL),
	(13, '>10', NULL, NULL),
	(14, 'attic', NULL, NULL);

-- Дамп структуры для таблица dbs9848126.heating
CREATE TABLE IF NOT EXISTS `heating` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.heating: ~6 rows (приблизительно)
DELETE FROM `heating`;
INSERT INTO `heating` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'urban', NULL, NULL),
	(2, 'gas', NULL, NULL),
	(3, 'tiled stoves', NULL, NULL),
	(4, 'electric', NULL, NULL),
	(5, 'boiler', NULL, NULL),
	(6, 'other', NULL, NULL);

-- Дамп структуры для таблица dbs9848126.lenguages
CREATE TABLE IF NOT EXISTS `lenguages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numbers` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.lenguages: ~0 rows (приблизительно)
DELETE FROM `lenguages`;

-- Дамп структуры для таблица dbs9848126.logos
CREATE TABLE IF NOT EXISTS `logos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `img` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.logos: ~0 rows (приблизительно)
DELETE FROM `logos`;

-- Дамп структуры для таблица dbs9848126.material
CREATE TABLE IF NOT EXISTS `material` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.material: ~9 rows (приблизительно)
DELETE FROM `material`;
INSERT INTO `material` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'brick', NULL, NULL),
	(2, 'wood', NULL, NULL),
	(3, 'hollow', NULL, NULL),
	(4, 'expanded clay', NULL, NULL),
	(5, 'big slab', NULL, NULL),
	(6, 'concrete', NULL, NULL),
	(7, 'silicate', NULL, NULL),
	(8, 'cellular concrete', NULL, NULL),
	(9, 'other', NULL, NULL);

-- Дамп структуры для таблица dbs9848126.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dialog_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.messages: ~23 rows (приблизительно)
DELETE FROM `messages`;
INSERT INTO `messages` (`id`, `dialog_id`, `user_id`, `message`, `read`, `created_at`, `updated_at`) VALUES
	(1, 5, 2, 'my firt message', 0, '2023-03-02 15:25:51', '2023-03-02 15:25:51'),
	(2, 6, 2, 'second message', 0, '2023-03-02 15:27:15', '2023-03-02 15:27:15'),
	(3, 7, 2, '3333333333333333', 0, '2023-03-02 15:27:37', '2023-03-02 15:27:37'),
	(4, 8, 2, '4444444444444444444444444444444444444444', 0, '2023-03-02 15:27:57', '2023-03-02 15:27:57'),
	(5, 9, 2, 'бьыцвдьцвлд', 0, '2023-03-02 18:33:29', '2023-03-02 18:33:29'),
	(6, 9, 2, 'sdfsdfsdfds', 0, '2023-03-02 18:40:42', '2023-03-02 18:40:42'),
	(7, 12, 3, 'send a message1', 0, '2023-03-08 08:12:18', '2023-03-08 08:12:18'),
	(8, 13, 3, 'send a message1', 0, '2023-03-08 08:16:59', '2023-03-08 08:16:59'),
	(9, 14, 3, 'send a message1', 0, '2023-03-08 08:19:06', '2023-03-08 08:19:06'),
	(10, 15, 3, 'message2', 0, '2023-03-08 08:21:57', '2023-03-08 08:21:57'),
	(11, 16, 3, 'message2', 0, '2023-03-08 08:22:48', '2023-03-08 08:22:48'),
	(12, 17, 3, 'message2', 0, '2023-03-08 08:23:53', '2023-03-08 08:23:53'),
	(13, 18, 3, 'message2', 0, '2023-03-08 08:26:39', '2023-03-08 08:26:39'),
	(14, 19, 3, 'message2', 0, '2023-03-08 08:27:15', '2023-03-08 08:27:15'),
	(15, 20, 3, 'message2', 0, '2023-03-08 08:28:16', '2023-03-08 08:28:16'),
	(16, 21, 3, 'message2', 0, '2023-03-08 08:31:33', '2023-03-08 08:31:33'),
	(17, 22, 2, 'ваыаываывав', 0, '2023-03-08 08:16:45', '2023-03-08 08:16:45'),
	(18, 23, 2, 'уауацуацаццуцу', 0, '2023-03-08 08:17:49', '2023-03-08 08:17:49'),
	(19, 24, 2, 'кауваываыфваывфавф', 0, '2023-03-08 08:19:25', '2023-03-08 08:19:25'),
	(20, 25, 2, 'кауваываыфваывфавф', 0, '2023-03-08 08:19:29', '2023-03-08 08:19:29'),
	(21, 26, 2, 'кауваываыфваывфавф', 0, '2023-03-08 08:19:48', '2023-03-08 08:19:48'),
	(22, 27, 2, 'кауваываыфваывфавф', 0, '2023-03-08 08:19:51', '2023-03-08 08:19:51'),
	(23, 28, 2, '1111111111111111111111', 0, '2023-03-08 08:20:20', '2023-03-08 08:20:20');

-- Дамп структуры для таблица dbs9848126.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.migrations: ~32 rows (приблизительно)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_01_25_191735_create_posts_table', 1),
	(6, '2023_01_25_191826_create_photos_table', 1),
	(7, '2023_01_25_191931_create_lenguages_table', 1),
	(8, '2023_01_25_192000_create_logos_table', 1),
	(9, '2023_01_25_192018_create_numbers_table', 1),
	(10, '2023_02_09_102116_create_filters_table', 1),
	(11, '2023_02_09_114639_create_provinces_table', 1),
	(12, '2023_02_09_114730_create_towns_table', 1),
	(13, '2023_02_26_144251_add_column_latitude_to_posts_table', 1),
	(14, '2023_02_26_145223_add_column_longitude_to_posts_table', 1),
	(15, '2023_03_02_100922_create_messages_table', 2),
	(16, '2023_03_02_101611_create_dialogs_table', 2),
	(17, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
	(18, '2023_03_16_072321_create_sessions_table', 3),
	(19, '2023_03_16_074556_add_google_id_column', 4),
	(20, '2023_03_19_055127_delete_column_index_to_posts_table', 5),
	(21, '2023_03_19_073147_create_statuses_table', 5),
	(22, '2023_03_19_083735_add_column_status_id_to_posts_table', 5),
	(23, '2023_03_20_052228_create_sales_table', 6),
	(24, '2023_03_20_054224_add_column_sale_id_to_posts_table', 6),
	(38, '2023_03_24_105910_add_colums_to_posts_table', 7),
	(39, '2023_03_24_115822_create_finish_condition_table', 7),
	(40, '2023_03_24_115904_create_heating_table', 7),
	(41, '2023_03_24_115927_create_material_table', 7),
	(42, '2023_03_24_115953_create_windows_table', 7),
	(43, '2023_03_24_120016_create_floor_table', 7),
	(44, '2023_03_24_120044_create_construction_table', 7),
	(45, '2023_03_25_044329_create_announcements_table', 8);

-- Дамп структуры для таблица dbs9848126.numbers
CREATE TABLE IF NOT EXISTS `numbers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.numbers: ~0 rows (приблизительно)
DELETE FROM `numbers`;

-- Дамп структуры для таблица dbs9848126.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.password_resets: ~0 rows (приблизительно)
DELETE FROM `password_resets`;

-- Дамп структуры для таблица dbs9848126.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.personal_access_tokens: ~0 rows (приблизительно)
DELETE FROM `personal_access_tokens`;

-- Дамп структуры для таблица dbs9848126.photos
CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.photos: ~15 rows (приблизительно)
DELETE FROM `photos`;
INSERT INTO `photos` (`id`, `post_id`, `img`, `created_at`, `updated_at`) VALUES
	(1, 1, 'photo/196aeed35ad453310f2c7023c5b72149.svg', '2023-02-26 15:45:01', '2023-02-26 15:45:01'),
	(2, 2, 'photo/b6c32b031ecc91047131357d01f59768.jpg', '2023-02-26 17:48:59', '2023-02-26 17:48:59'),
	(3, 3, 'photo/b218503c27d43de0a666dae3e130c508.jpg', '2023-03-02 07:05:38', '2023-03-02 07:05:38'),
	(4, 4, 'photo/6a549f4c9324ff8dd0e475c954c421f1.jpg', '2023-03-03 10:16:20', '2023-03-03 10:16:20'),
	(5, 4, 'photo/0c28293f329704d54a7f862e29b76e35.jpg', '2023-03-03 10:16:20', '2023-03-03 10:16:20'),
	(6, 4, 'photo/9aab524b79c2da95dd2bb76db6937801.jpg', '2023-03-03 10:16:20', '2023-03-03 10:16:20'),
	(7, 5, 'photo/c877b120d80455607f5de798bee6a529.png', '2023-03-08 07:51:35', '2023-03-08 07:51:35'),
	(8, 5, 'photo/c278911753dcef6769656c59a240cf10.png', '2023-03-08 07:51:35', '2023-03-08 07:51:35'),
	(9, 5, 'photo/33825dcb8bdf9e458da3c6dc8eccf071.png', '2023-03-08 07:51:35', '2023-03-08 07:51:35'),
	(10, 5, 'photo/60d2cda20a172aebdb48683d65fff141.png', '2023-03-08 07:51:35', '2023-03-08 07:51:35'),
	(11, 6, 'photo/cb9b119927fb71578a59e9641d3f672a.png', '2023-03-08 08:09:34', '2023-03-08 08:09:34'),
	(12, 6, 'photo/cb63c070a8aa469acfb18940cf357cf8.png', '2023-03-08 08:09:34', '2023-03-08 08:09:34'),
	(13, 6, 'photo/c77ee4cb1cb6e9f71afb869d074bcc9b.png', '2023-03-08 08:09:34', '2023-03-08 08:09:34'),
	(14, 6, 'photo/dead396db08f75a8d659f13b33c07f15.png', '2023-03-08 08:09:34', '2023-03-08 08:09:34'),
	(15, 19, 'photo/1f40001a246799ede553ce7f62b9d9c3.jpg', '2023-03-24 18:30:25', '2023-03-24 18:30:25'),
	(16, 20, 'photo/90224f22e88f141eeeaaf6e85bef42e7.jpg', '2023-03-25 05:36:01', '2023-03-25 05:36:01');

-- Дамп структуры для таблица dbs9848126.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_announcement` bigint(20) unsigned NOT NULL DEFAULT 0,
  `status_id` bigint(20) unsigned DEFAULT NULL,
  `sale_id` bigint(20) unsigned DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_longitude` double DEFAULT NULL,
  `address_latitude` double DEFAULT NULL,
  `rooms` int(11) NOT NULL,
  `square` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `garage` tinyint(1) NOT NULL,
  `balcony` tinyint(1) NOT NULL,
  `terrace` tinyint(1) NOT NULL,
  `garden` tinyint(1) NOT NULL,
  `room_utilitarian` smallint(5) unsigned DEFAULT NULL,
  `two_level` smallint(5) unsigned DEFAULT NULL,
  `separate_kitchen` smallint(5) unsigned DEFAULT NULL,
  `only_for_non_smokers` smallint(5) unsigned DEFAULT NULL,
  `air_conditioning` smallint(5) unsigned DEFAULT NULL,
  `elevator` smallint(5) unsigned DEFAULT NULL,
  `basement` smallint(5) unsigned DEFAULT NULL,
  `type_construction` bigint(20) unsigned DEFAULT NULL,
  `floor` bigint(20) unsigned DEFAULT NULL,
  `floors` bigint(20) unsigned DEFAULT NULL,
  `material` bigint(20) unsigned DEFAULT NULL,
  `windows` bigint(20) unsigned DEFAULT NULL,
  `heating` bigint(20) unsigned DEFAULT NULL,
  `year_construction` int(10) unsigned DEFAULT NULL,
  `finish_condition` bigint(20) unsigned DEFAULT NULL,
  `available_date` date DEFAULT NULL,
  `furniture` smallint(5) unsigned DEFAULT NULL,
  `refrigerator` smallint(5) unsigned DEFAULT NULL,
  `tv_set` smallint(5) unsigned DEFAULT NULL,
  `washing_machine` smallint(5) unsigned DEFAULT NULL,
  `stove` smallint(5) unsigned DEFAULT NULL,
  `dishwasher` smallint(5) unsigned DEFAULT NULL,
  `oven` smallint(5) unsigned DEFAULT NULL,
  `anti_burglary_blinds` smallint(5) unsigned DEFAULT NULL,
  `monitoring_protection` smallint(5) unsigned DEFAULT NULL,
  `anti_burglar_doors_windows` smallint(5) unsigned DEFAULT NULL,
  `alarm_system` smallint(5) unsigned DEFAULT NULL,
  `intercom_videophone` smallint(5) unsigned DEFAULT NULL,
  `closed_area` smallint(5) unsigned DEFAULT NULL,
  `internet` smallint(5) unsigned DEFAULT NULL,
  `cable_tv` smallint(5) unsigned DEFAULT NULL,
  `telephone` smallint(5) unsigned DEFAULT NULL,
  `rent_price` int(10) unsigned DEFAULT NULL,
  `movie_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wirtual_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_status_idx` (`status_id`),
  KEY `post_sale_idx` (`sale_id`),
  CONSTRAINT `post_sale_fk` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`),
  CONSTRAINT `post_status_fk` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.posts: ~20 rows (приблизительно)
DELETE FROM `posts`;
INSERT INTO `posts` (`id`, `user_id`, `title`, `type_announcement`, `status_id`, `sale_id`, `description`, `address`, `address_longitude`, `address_latitude`, `rooms`, `square`, `price`, `bedrooms`, `garage`, `balcony`, `terrace`, `garden`, `room_utilitarian`, `two_level`, `separate_kitchen`, `only_for_non_smokers`, `air_conditioning`, `elevator`, `basement`, `type_construction`, `floor`, `floors`, `material`, `windows`, `heating`, `year_construction`, `finish_condition`, `available_date`, `furniture`, `refrigerator`, `tv_set`, `washing_machine`, `stove`, `dishwasher`, `oven`, `anti_burglary_blinds`, `monitoring_protection`, `anti_burglar_doors_windows`, `alarm_system`, `intercom_videophone`, `closed_area`, `internet`, `cable_tv`, `telephone`, `rent_price`, `movie_link`, `wirtual_link`, `is_published`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Browse job', 0, 1, 1, 'Browse jobs that match your experience to a client\'s hiring preferences. Ordered by most relevant.', 'Kiev, Украина', 30.5234, 50.4501, 3, 3, 1050, 7, 1, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-02-26 13:45:01', '2023-02-26 13:45:01'),
	(2, 1, 'testPostMap', 0, 1, 1, 'lkdfnvlknvl;ksdf;lkdmfvlkzmdfvl,zfv\'mfvadf\r\ndfbadfbadfbadfbadfbadfbadfb\r\ndabadfbadbsfgnbsgfbsfgdfbafdbadfbadfb\r\nadfbadfbadfbadfbzxvbafdadfbadfbabadfb\r\nadfbadfbafdbafdbadfbadfbafbxcvafbzdfba\r\nafvarv afvavrrvrwv', '5091 AN Oost-, West- en Middelbeers, Netherlands', 5.245458, 51.4683138, 1, 55, 1000, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-02-26 15:48:59', '2023-02-26 15:48:59'),
	(3, 2, 'бульвар', 0, 1, 1, 'dwwdwdwdwd', 'бульвар Юности, 6, Энергодар, Запорожская область, Украина', 0, 0, 1, 50, 60000, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-02 05:05:38', '2023-03-02 05:05:38'),
	(4, 2, 'title', 0, 1, 1, 'postpostpostpost', 'Poleska 4, Вроцлав, Польша', 0, 0, 1, 75, 60000, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-03 08:16:20', '2023-03-03 08:16:20'),
	(5, 2, 'rent the house', 0, 1, 1, 'big house with small rooms', 'Berthelotstraat 2, 1098 SV Amsterdam, Нидерланды', 4.9431332, 52.3503912, 5, 200, 60000, 2, 0, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-08 05:51:35', '2023-03-08 06:04:50'),
	(6, 2, 'new rent tomessage', 0, 1, 1, 'this is a try to check message controller', 'Horsterweg 64, 5975 NB Sevenum, Нидерланды', 0, 0, 1, 50, 1, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-08 06:09:34', '2023-03-08 06:09:34'),
	(7, 3, 'new post for dialog', 0, 1, 1, 'pdofkv\'pdfkv\'psdkfv\'ldv\'p;dlfvpoadfvadadfvafvaadfvasfvadfvdfvfdadfvafvafvafvafvadkmnvljahbdvlhabdlvhbadlkn cnkxbvalifdhbvailjfnv;almcnv;jkasfnvo;jakfd', 'Greensboro, Северная Каролина, США', -79.7919754, 36.0726354, 4, 80, 60000, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-09 06:09:22', '2023-03-09 06:17:31'),
	(8, 3, 'ksdlkcmldkmlk', 0, 1, 1, 'lkjfdnvjdnfv;lkzmdf;lvkmzd;m z;km', 'New York, Нью-Йорк, США', -74.0059728, 40.7127753, 1, 70, 6000, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-09 06:15:39', '2023-03-09 06:15:39'),
	(9, 3, 'testDIalodsMy', 0, 1, 1, 'kajfn;jnera;onaekamfv\'kmaf\'vkma\'lvp,s;lv,as\'lva\'pfkmvádfmv\'vMvmv', 'California, США', -119.4179324, 36.778261, 1, 70, 60000, 1, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-09 06:17:06', '2023-03-09 06:17:06'),
	(10, 4, 'postButtonMessage', 0, 1, 1, 'zdkjlfvnkdjfnv;zdjnv;zdkjfv;lkdf', 'Enerhodar, Запорожская область, Украина', 34.6341859, 47.5015067, 1, 70, 60, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-09 09:01:55', '2023-03-09 09:01:55'),
	(11, 4, 'newYourk', 0, 1, 1, 'fklvndkjfnvlakjdnfvakd vakjdj v', 'New York, Нью-Йорк, США', 0, 0, 1, 71, 70, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-09 10:56:18', '2023-03-09 10:56:18'),
	(12, 4, 'nnewll', 0, 1, 1, 'hgvkhvkh', 'New York, Нью-Йорк, США', 0, 0, 1, 70, 60, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-09 11:25:23', '2023-03-09 11:25:23'),
	(13, 1, 'Browse job', 1, NULL, NULL, 'Browse jobs that match your experience to a client\'s hiring preferences. Ordered by most relevant.', 'Kiev, Украина', 5.2430774, 51.471631, 3, 3, 1050, 7, 1, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-02-26 15:45:01', '2023-02-26 15:45:01'),
	(14, 1, 'testPostMap', 1, NULL, NULL, 'lkdfnvlknvl;ksdf;lkdmfvlkzmdfvl,zfv\'mfvadf\r\ndfbadfbadfbadfbadfbadfbadfb\r\ndabadfbadbsfgnbsgfbsfgdfbafdbadfbadfb\r\nadfbadfbadfbadfbzxvbafdadfbadfbabadfb\r\nadfbadfbafdbafdbadfbadfbafbxcvafbzdfba\r\nafvarv afvavrrvrwv', '5091 AN Oost-, West- en Middelbeers, Netherlands', 5.2430774, 51.471631, 1, 55, 1000, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-02-26 17:48:59', '2023-02-26 17:48:59'),
	(15, 2, 'бульвар', 1, NULL, NULL, 'пппппппппппппппппппп', 'бульвар Юности, 6, Энергодар, Запорожская область, Украина', -74.0059728, 40.7127753, 1, 50, 60000, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-02 07:05:38', '2023-03-02 07:05:38'),
	(16, 2, 'title', 1, NULL, NULL, 'postpostpostpost', 'Poleska 4, Вроцлав, Польша', 0, 0, 1, 75, 60000, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-03 10:16:20', '2023-03-03 10:16:20'),
	(17, 2, 'rent the house', 1, NULL, NULL, 'big house with small rooms', 'Berthelotstraat 2, 1098 SV Amsterdam, Нидерланды', 4.9431332, 52.3503912, 5, 200, 60000, 2, 0, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-08 07:51:35', '2023-03-08 08:04:50'),
	(18, 2, 'new rent tomessage', 1, NULL, NULL, 'this is a try to check message controller', 'Horsterweg 64, 5975 NB Sevenum, Нидерланды', 6.0353639, 51.4236887, 1, 50, 1, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-03-08 08:09:34', '2023-03-08 08:09:34'),
	(19, 5, 'TTTTTT', 1, 1, 1, '<p><b>fsdfgds </b><u>asdga </u>g</p>', 'Berlin, Germany', 13.404954, 52.52000659999999, 3, 65, 55000, 2, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 2, 4, 5, 2, 2, 5, NULL, 0, '2023-03-25', 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, NULL, 1, '2023-03-24 18:30:25', '2023-03-24 18:30:25'),
	(20, 5, 'in Amsterdam', 3, 1, 2, '<p><b>fggfergerg </b>ee rwerhwerhwhtwhrwh</p>', 'Amsterdam, Netherlands', 4.9041389, 52.3675734, 7, 125, 115000, 3, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1, 5, 1, 2, 2, 2, 1990, 1, '2023-03-26', 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 115, NULL, NULL, 1, '2023-03-25 05:36:01', '2023-03-25 08:23:55');

-- Дамп структуры для таблица dbs9848126.provinces
CREATE TABLE IF NOT EXISTS `provinces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.provinces: ~0 rows (приблизительно)
DELETE FROM `provinces`;

-- Дамп структуры для таблица dbs9848126.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.sales: ~2 rows (приблизительно)
DELETE FROM `sales`;
INSERT INTO `sales` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'Buy', NULL, NULL),
	(2, 'Rent', NULL, NULL);

-- Дамп структуры для таблица dbs9848126.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.sessions: ~1 rows (приблизительно)
DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('PTuiYaFVjtvSHEMAYtb7vlo1mEVTjh7Aje0nNykS', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYW9UdEFyOENyeVVUOTJsR05GVTg4Ym1wNXpnQUdVZXEzaTVYYjRJVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9wbGFjZS5sb2MvaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNjc5NzE3ODkxO319', 1679739855);

-- Дамп структуры для таблица dbs9848126.statuses
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.statuses: ~1 rows (приблизительно)
DELETE FROM `statuses`;
INSERT INTO `statuses` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Status 1', '', NULL, NULL);

-- Дамп структуры для таблица dbs9848126.towns
CREATE TABLE IF NOT EXISTS `towns` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` bigint(20) NOT NULL,
  `post_index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.towns: ~0 rows (приблизительно)
DELETE FROM `towns`;

-- Дамп структуры для таблица dbs9848126.windows
CREATE TABLE IF NOT EXISTS `windows` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы dbs9848126.windows: ~3 rows (приблизительно)
DELETE FROM `windows`;
INSERT INTO `windows` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'pladtic', NULL, NULL),
	(2, 'wooden', NULL, NULL),
	(3, 'aluminum', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
