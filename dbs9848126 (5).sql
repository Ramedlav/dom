-- MySQL dump 10.13  Distrib 5.6.45, for Linux (x86_64)
--
-- Host: database-5011687425.webspace-host.com    Database: dbs9848126
-- ------------------------------------------------------
-- Server version	5.7.41-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements`
--

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
INSERT INTO `announcements` VALUES (1,'Apartments',NULL,NULL),(2,'Studio apartments',NULL,NULL),(3,'Houses',NULL,NULL),(4,'Investments',NULL,NULL),(5,'Rooms',NULL,NULL),(6,'Commercial premises',NULL,NULL),(7,'Halls and warehouses',NULL,NULL),(8,'Garages',NULL,NULL);
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `construction`
--

DROP TABLE IF EXISTS `construction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `construction` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `construction`
--

LOCK TABLES `construction` WRITE;
/*!40000 ALTER TABLE `construction` DISABLE KEYS */;
INSERT INTO `construction` VALUES (1,'Unit',NULL,NULL),(2,'Tenement',NULL,NULL),(3,'A detached house',NULL,NULL),(4,'Seal',NULL,NULL),(5,'Private',NULL,NULL),(6,'Apartment building',NULL,NULL),(7,'Loft',NULL,NULL);
/*!40000 ALTER TABLE `construction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dialogs`
--

DROP TABLE IF EXISTS `dialogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dialogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `sub_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dialogs`
--

LOCK TABLES `dialogs` WRITE;
/*!40000 ALTER TABLE `dialogs` DISABLE KEYS */;
INSERT INTO `dialogs` VALUES (8,1,2,2,'2023-03-02 15:27:57','2023-03-02 15:27:57'),(9,1,2,1,'2023-03-02 18:33:29','2023-03-02 18:33:29'),(12,2,3,6,'2023-03-08 08:12:18','2023-03-08 08:12:18'),(13,2,3,6,'2023-03-08 08:16:59','2023-03-08 08:16:59'),(14,2,3,6,'2023-03-08 08:19:06','2023-03-08 08:19:06'),(15,2,3,6,'2023-03-08 08:21:57','2023-03-08 08:21:57'),(16,2,3,6,'2023-03-08 08:22:48','2023-03-08 08:22:48'),(17,2,3,6,'2023-03-08 08:23:53','2023-03-08 08:23:53'),(18,2,3,6,'2023-03-08 08:26:39','2023-03-08 08:26:39'),(19,2,3,6,'2023-03-08 08:27:15','2023-03-08 08:27:15'),(20,2,3,6,'2023-03-08 08:28:16','2023-03-08 08:28:16'),(21,2,3,6,'2023-03-08 08:31:33','2023-03-08 08:31:33'),(22,2,2,6,'2023-03-08 08:16:45','2023-03-08 08:16:45'),(23,2,2,6,'2023-03-08 08:17:49','2023-03-08 08:17:49'),(24,2,2,6,'2023-03-08 08:19:25','2023-03-08 08:19:25'),(25,2,2,6,'2023-03-08 08:19:29','2023-03-08 08:19:29'),(26,2,2,6,'2023-03-08 08:19:48','2023-03-08 08:19:48'),(27,2,2,6,'2023-03-08 08:19:51','2023-03-08 08:19:51'),(28,2,2,6,'2023-03-08 08:20:20','2023-03-08 08:20:20'),(30,5,1,2,'2023-04-11 06:29:47','2023-04-11 06:29:47'),(31,1,5,2,'2023-04-11 06:31:20','2023-04-11 06:31:20'),(32,1,5,2,'2023-04-11 06:32:46','2023-04-11 06:32:46'),(33,1,5,2,'2023-04-11 06:37:36','2023-04-11 06:37:36'),(34,1,5,2,'2023-04-11 06:39:08','2023-04-11 06:39:08'),(35,1,5,2,'2023-04-11 06:48:42','2023-04-11 06:48:42'),(36,1,5,2,'2023-04-11 06:49:20','2023-04-11 06:49:20'),(37,1,5,2,'2023-04-11 06:50:42','2023-04-11 06:50:42'),(38,1,5,2,'2023-04-11 06:57:18','2023-04-11 06:57:18'),(39,1,5,2,'2023-04-11 07:04:16','2023-04-11 07:04:16'),(40,1,5,2,'2023-04-11 07:05:22','2023-04-11 07:05:22'),(41,1,5,2,'2023-04-11 07:05:48','2023-04-11 07:05:48'),(42,1,5,2,'2023-04-11 07:07:03','2023-04-11 07:07:03'),(43,1,5,2,'2023-04-11 07:07:36','2023-04-11 07:07:36'),(44,1,5,2,'2023-04-11 07:08:33','2023-04-11 07:08:33'),(45,1,5,2,'2023-04-11 07:09:41','2023-04-11 07:09:41'),(46,1,5,2,'2023-04-11 07:10:48','2023-04-11 07:10:48'),(47,1,5,2,'2023-04-11 07:12:49','2023-04-11 07:12:49'),(48,1,5,2,'2023-04-11 07:13:58','2023-04-11 07:13:58'),(49,1,5,2,'2023-04-11 07:18:30','2023-04-11 07:18:30'),(50,1,5,2,'2023-04-11 07:20:00','2023-04-11 07:20:00'),(51,1,5,2,'2023-04-11 07:20:57','2023-04-11 07:20:57'),(52,5,9,20,'2023-04-12 04:25:30','2023-05-11 08:52:30'),(53,2,5,4,'2023-04-12 04:27:20','2023-04-12 04:27:20'),(54,9,9,21,'2023-04-18 16:58:21','2023-04-18 16:58:21'),(55,9,9,21,'2023-04-18 16:58:46','2023-04-18 16:58:46'),(56,9,9,21,'2023-04-18 16:58:55','2023-04-18 16:58:55'),(57,9,9,21,'2023-04-18 16:58:56','2023-04-18 16:58:56'),(58,9,9,21,'2023-04-18 16:59:44','2023-04-18 16:59:44'),(59,9,9,21,'2023-04-18 16:59:46','2023-04-18 16:59:46'),(60,2,5,18,'2023-04-26 04:13:46','2023-05-10 13:38:40'),(61,5,2,20,'2023-04-26 06:59:39','2023-04-26 06:59:39'),(62,5,2,20,'2023-04-26 06:59:56','2023-04-26 06:59:56'),(63,2,5,18,'2023-04-26 10:32:32','2023-04-26 10:32:32'),(64,2,5,18,'2023-04-26 10:33:31','2023-04-26 10:33:31'),(65,2,5,18,'2023-04-26 11:19:51','2023-04-26 11:19:51'),(66,2,5,18,'2023-04-26 11:19:59','2023-04-26 11:19:59'),(67,2,5,18,'2023-04-26 11:20:45','2023-04-26 11:20:45'),(68,5,9,20,'2023-05-04 05:31:39','2023-05-04 05:31:39'),(69,5,9,20,'2023-05-10 04:23:12','2023-05-10 04:23:12'),(70,5,2,19,'2023-05-11 03:31:31','2023-05-11 04:39:32');
/*!40000 ALTER TABLE `dialogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filters`
--

DROP TABLE IF EXISTS `filters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filters`
--

LOCK TABLES `filters` WRITE;
/*!40000 ALTER TABLE `filters` DISABLE KEYS */;
/*!40000 ALTER TABLE `filters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `finish_condition`
--

DROP TABLE IF EXISTS `finish_condition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finish_condition` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finish_condition`
--

LOCK TABLES `finish_condition` WRITE;
/*!40000 ALTER TABLE `finish_condition` DISABLE KEYS */;
INSERT INTO `finish_condition` VALUES (1,'to live',NULL,NULL),(2,'to finish',NULL,NULL),(3,'for renovation',NULL,NULL);
/*!40000 ALTER TABLE `finish_condition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `floor`
--

DROP TABLE IF EXISTS `floor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `floor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `floor`
--

LOCK TABLES `floor` WRITE;
/*!40000 ALTER TABLE `floor` DISABLE KEYS */;
INSERT INTO `floor` VALUES (1,'basement',NULL,NULL),(2,'ground floor',NULL,NULL),(3,'1',NULL,NULL),(4,'2',NULL,NULL),(5,'3',NULL,NULL),(6,'4',NULL,NULL),(7,'5',NULL,NULL),(8,'6',NULL,NULL),(9,'7',NULL,NULL),(10,'8',NULL,NULL),(11,'9',NULL,NULL),(12,'10',NULL,NULL),(13,'>10',NULL,NULL),(14,'attic',NULL,NULL);
/*!40000 ALTER TABLE `floor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heating`
--

DROP TABLE IF EXISTS `heating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `heating` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heating`
--

LOCK TABLES `heating` WRITE;
/*!40000 ALTER TABLE `heating` DISABLE KEYS */;
INSERT INTO `heating` VALUES (1,'urban',NULL,NULL),(2,'gas',NULL,NULL),(3,'tiled stoves',NULL,NULL),(4,'electric',NULL,NULL),(5,'boiler',NULL,NULL),(6,'other',NULL,NULL);
/*!40000 ALTER TABLE `heating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lenguages`
--

DROP TABLE IF EXISTS `lenguages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lenguages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numbers` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lenguages`
--

LOCK TABLES `lenguages` WRITE;
/*!40000 ALTER TABLE `lenguages` DISABLE KEYS */;
/*!40000 ALTER TABLE `lenguages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `img` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logos`
--

LOCK TABLES `logos` WRITE;
/*!40000 ALTER TABLE `logos` DISABLE KEYS */;
/*!40000 ALTER TABLE `logos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` VALUES (1,'brick',NULL,NULL),(2,'wood',NULL,NULL),(3,'hollow',NULL,NULL),(4,'expanded clay',NULL,NULL),(5,'big slab',NULL,NULL),(6,'concrete',NULL,NULL),(7,'silicate',NULL,NULL),(8,'cellular concrete',NULL,NULL),(9,'other',NULL,NULL);
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dialog_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,5,2,'my firt message',0,'2023-03-02 15:25:51','2023-03-02 15:25:51'),(2,6,2,'second message',0,'2023-03-02 15:27:15','2023-03-02 15:27:15'),(3,7,2,'3333333333333333',0,'2023-03-02 15:27:37','2023-03-02 15:27:37'),(4,8,2,'4444444444444444444444444444444444444444',0,'2023-03-02 15:27:57','2023-03-02 15:27:57'),(5,9,2,'бьыцвдьцвлд',0,'2023-03-02 18:33:29','2023-03-02 18:33:29'),(6,9,2,'sdfsdfsdfds',0,'2023-03-02 18:40:42','2023-03-02 18:40:42'),(7,12,3,'send a message1',0,'2023-03-08 08:12:18','2023-03-08 08:12:18'),(8,13,3,'send a message1',0,'2023-03-08 08:16:59','2023-03-08 08:16:59'),(9,14,3,'send a message1',0,'2023-03-08 08:19:06','2023-03-08 08:19:06'),(10,15,3,'message2',0,'2023-03-08 08:21:57','2023-03-08 08:21:57'),(11,16,3,'message2',0,'2023-03-08 08:22:48','2023-03-08 08:22:48'),(12,17,3,'message2',0,'2023-03-08 08:23:53','2023-03-08 08:23:53'),(13,18,3,'message2',0,'2023-03-08 08:26:39','2023-03-08 08:26:39'),(14,19,3,'message2',0,'2023-03-08 08:27:15','2023-03-08 08:27:15'),(15,20,3,'message2',0,'2023-03-08 08:28:16','2023-03-08 08:28:16'),(16,21,3,'message2',1,'2023-03-08 08:31:33','2023-05-11 04:34:36'),(17,22,2,'ваыаываывав',0,'2023-03-08 08:16:45','2023-03-08 08:16:45'),(18,23,2,'уауацуацаццуцу',0,'2023-03-08 08:17:49','2023-03-08 08:17:49'),(19,24,2,'кауваываыфваывфавф',0,'2023-03-08 08:19:25','2023-03-08 08:19:25'),(20,25,2,'кауваываыфваывфавф',0,'2023-03-08 08:19:29','2023-03-08 08:19:29'),(21,26,2,'кауваываыфваывфавф',0,'2023-03-08 08:19:48','2023-03-08 08:19:48'),(22,27,2,'кауваываыфваывфавф',0,'2023-03-08 08:19:51','2023-03-08 08:19:51'),(23,28,2,'1111111111111111111111',0,'2023-03-08 08:20:20','2023-03-08 08:20:20'),(24,30,5,'у кйц уцйайй',0,'2023-04-11 06:29:47','2023-04-11 06:29:47'),(25,31,5,'у кйц уцйайй',0,'2023-04-11 06:31:20','2023-04-11 06:31:20'),(26,32,5,'у кйц уцйайй',0,'2023-04-11 06:32:46','2023-04-11 06:32:46'),(27,33,5,'у кйц уцйайй',0,'2023-04-11 06:37:36','2023-04-11 06:37:36'),(28,34,5,'у кйц уцйайй',0,'2023-04-11 06:39:08','2023-04-11 06:39:08'),(29,35,5,'у кйц уцйайй',0,'2023-04-11 06:48:42','2023-04-11 06:48:42'),(30,36,5,'у кйц уцйайй',0,'2023-04-11 06:49:20','2023-04-11 06:49:20'),(31,37,5,'у кйц уцйайй',0,'2023-04-11 06:50:42','2023-04-11 06:50:42'),(32,38,5,'у кйц уцйайй',0,'2023-04-11 06:57:18','2023-04-11 06:57:18'),(33,39,5,'у кйц уцйайй',0,'2023-04-11 07:04:16','2023-04-11 07:04:16'),(34,40,5,'у кйц уцйайй',0,'2023-04-11 07:05:22','2023-04-11 07:05:22'),(35,41,5,'у кйц уцйайй',0,'2023-04-11 07:05:48','2023-04-11 07:05:48'),(36,42,5,'у кйц уцйайй',0,'2023-04-11 07:07:03','2023-04-11 07:07:03'),(37,43,5,'у кйц уцйайй',0,'2023-04-11 07:07:36','2023-04-11 07:07:36'),(38,44,5,'у кйц уцйайй',0,'2023-04-11 07:08:33','2023-04-11 07:08:33'),(39,45,5,'у кйц уцйайй',0,'2023-04-11 07:09:41','2023-04-11 07:09:41'),(40,46,5,'у кйц уцйайй',0,'2023-04-11 07:10:48','2023-04-11 07:10:48'),(41,47,5,'у кйц уцйайй',0,'2023-04-11 07:12:49','2023-04-11 07:12:49'),(42,48,5,'у кйц уцйайй',0,'2023-04-11 07:13:58','2023-04-11 07:13:58'),(43,49,5,'у кйц уцйайй',0,'2023-04-11 07:18:30','2023-04-11 07:18:30'),(44,50,5,'у кйц уцйайй',0,'2023-04-11 07:20:00','2023-04-11 07:20:00'),(45,51,5,'у кйц уцйайй',0,'2023-04-11 07:20:57','2023-04-11 07:20:57'),(46,52,5,'ваыафа фа',1,'2023-04-11 07:22:22','2023-05-11 13:08:48'),(47,53,5,'ауауфафыафааа',0,'2023-04-11 08:16:01','2023-04-11 08:16:01'),(48,54,5,'ауауфафыафааа',1,'2023-04-11 08:18:01','2023-05-11 05:21:36'),(49,55,5,'ауауфафыафааа',1,'2023-04-11 08:22:47','2023-05-11 05:21:40'),(50,56,5,'ауауфафыафааа',1,'2023-04-11 08:23:12','2023-05-11 05:21:28'),(51,56,5,'werqwrewqrewrweqr',1,'2023-04-11 08:23:32','2023-05-11 05:21:28'),(52,57,5,'Привет первое сообщение',1,'2023-04-11 08:30:06','2023-05-11 05:21:22'),(53,58,5,'Привет первое сообщение',1,'2023-04-11 08:30:58','2023-05-11 05:21:16'),(54,59,5,'Привет первое сообщение',1,'2023-04-11 08:32:59','2023-05-11 05:21:10'),(55,60,5,'Привет первое сообщение',1,'2023-04-11 08:33:23','2023-05-11 04:38:02'),(56,61,5,'Привет первое сообщение',0,'2023-04-11 08:33:41','2023-04-11 08:33:41'),(57,62,5,'укцкйкйкйкйкйкй',0,'2023-04-11 08:34:05','2023-04-11 08:34:05'),(58,63,5,'укцкйкйкйкйкйкй',0,'2023-04-11 08:34:50','2023-04-11 08:34:50'),(59,64,5,'3к 3й цк3кк3',0,'2023-04-11 08:35:06','2023-04-11 08:35:06'),(60,65,5,'3к 3й цк3кк3',1,'2023-04-11 08:35:27','2023-05-11 04:34:39'),(61,66,5,'3к 3й цк3кк3',1,'2023-04-11 08:36:17','2023-05-11 04:34:40'),(62,67,5,'цукцйукцук',0,'2023-04-11 08:38:33','2023-04-11 08:38:33'),(63,68,5,'йцукен еппрпрк',1,'2023-04-11 08:40:42','2023-05-11 05:21:08'),(64,69,5,'йцукен еппрпрк',1,'2023-04-11 08:41:06','2023-05-11 13:10:59'),(65,70,5,'йцукен еппрпрк',1,'2023-04-11 08:47:04','2023-05-11 04:39:32'),(66,71,5,'йцукен еппрпрк',0,'2023-04-11 08:47:24','2023-04-11 08:47:24'),(67,72,5,'йцукен еппрпрк',0,'2023-04-11 08:48:36','2023-04-11 08:48:36'),(68,73,5,'ук йк',0,'2023-04-11 08:49:47','2023-04-11 08:49:47'),(69,74,5,'цууцу',0,'2023-04-11 08:50:57','2023-04-11 08:50:57'),(70,75,5,'цкуццку',0,'2023-04-11 08:52:32','2023-04-11 08:52:32'),(71,76,5,'укукуцккукцук',0,'2023-04-11 08:55:02','2023-04-11 08:55:02'),(72,77,5,'Аурпв и уавуа уауукаука',0,'2023-04-11 08:56:26','2023-04-11 08:56:26'),(73,78,5,'Первое сообщение',0,'2023-04-11 09:01:52','2023-04-11 09:01:52'),(74,79,5,'Сообщение',0,'2023-04-11 09:02:41','2023-04-11 09:02:41'),(75,80,5,'Пишу сообщение',0,'2023-04-11 09:07:52','2023-04-11 09:07:52'),(76,81,5,'Второе сообщение',0,'2023-04-11 09:09:32','2023-04-11 09:09:32'),(77,82,5,'Это сообщение прислано с сайта',0,'2023-04-11 11:45:51','2023-04-11 11:45:51'),(78,83,5,'Сообщение',0,'2023-04-12 04:09:43','2023-04-12 04:09:43'),(79,84,5,'Тест',0,'2023-04-12 04:20:55','2023-04-12 04:20:55'),(80,85,5,'Тест',0,'2023-04-12 04:22:03','2023-04-12 04:22:03'),(81,52,5,'Тест Тест Тест',1,'2023-04-12 04:25:30','2023-05-11 13:08:48'),(82,53,5,'Прикольное предложение. Но не вижу ни одной фотки тутай)))',0,'2023-04-12 04:27:20','2023-04-12 04:27:20'),(83,58,9,'Hi',0,'2023-04-18 16:59:44','2023-04-18 16:59:44'),(84,59,9,'Hi',0,'2023-04-18 16:59:46','2023-04-18 16:59:46'),(85,62,2,'ы',1,'2023-04-26 06:59:56','2023-05-10 13:57:19'),(86,68,5,'1234567',1,'2023-05-04 05:31:39','2023-05-11 05:21:08'),(87,69,9,'Первое сообщение',1,'2023-05-10 04:23:12','2023-05-12 04:54:42'),(88,69,9,'Второе сообщение',1,'2023-05-10 04:24:23','2023-05-12 04:54:42'),(89,60,5,'Попробуй ответить. лучше конечно с компа, но можно и с телефона',1,'2023-05-10 13:16:23','2023-05-11 04:38:02'),(90,60,5,'Ой...не ответить, а зайди в мои объявления (in Berlin or in Amsterdam) и там напиши сообщение',1,'2023-05-10 13:31:00','2023-05-11 04:38:02'),(91,60,5,'Ну и пройдись потом по \"Мои диалоги\"',1,'2023-05-10 13:32:46','2023-05-11 04:38:02'),(92,60,5,'Ну и после захода в какой диалог (где твои непрочитанные сообщения) должно уменьшится количество сообщений',1,'2023-05-10 13:37:35','2023-05-11 04:38:02'),(93,60,5,'Хотя попробуй тутай ответить)',1,'2023-05-10 15:29:23','2023-05-11 04:38:02'),(94,60,2,'Отвечаю',1,'2023-05-11 03:27:38','2023-05-12 04:59:11'),(95,60,2,'Только тут вообще никакой цсс',1,'2023-05-11 03:28:17','2023-05-12 04:59:11'),(96,61,2,'Ответ из поста',1,'2023-05-11 03:30:11','2023-05-11 08:25:58'),(97,70,2,'Ответ из поста Берлин',1,'2023-05-11 03:31:31','2023-05-12 04:54:13'),(98,70,5,'Ответ на ответ',1,'2023-05-11 04:38:16','2023-05-11 04:39:32'),(99,70,2,'Стали синие',1,'2023-05-11 04:39:32','2023-05-12 04:54:13'),(100,52,5,'Тест 1',1,'2023-05-11 08:51:45','2023-05-11 13:08:48'),(101,52,5,'Тест 2',1,'2023-05-11 08:52:30','2023-05-11 13:08:48');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_01_25_191735_create_posts_table',1),(6,'2023_01_25_191826_create_photos_table',1),(7,'2023_01_25_191931_create_lenguages_table',1),(8,'2023_01_25_192000_create_logos_table',1),(9,'2023_01_25_192018_create_numbers_table',1),(10,'2023_02_09_102116_create_filters_table',1),(11,'2023_02_09_114639_create_provinces_table',1),(12,'2023_02_09_114730_create_towns_table',1),(13,'2023_02_26_144251_add_column_latitude_to_posts_table',1),(14,'2023_02_26_145223_add_column_longitude_to_posts_table',1),(15,'2023_03_02_100922_create_messages_table',2),(16,'2023_03_02_101611_create_dialogs_table',2),(17,'2014_10_12_200000_add_two_factor_columns_to_users_table',3),(18,'2023_03_16_072321_create_sessions_table',3),(19,'2023_03_16_074556_add_google_id_column',4),(20,'2023_03_19_055127_delete_column_index_to_posts_table',5),(21,'2023_03_19_073147_create_statuses_table',5),(22,'2023_03_19_083735_add_column_status_id_to_posts_table',5),(23,'2023_03_20_052228_create_sales_table',6),(24,'2023_03_20_054224_add_column_sale_id_to_posts_table',6),(38,'2023_03_24_105910_add_colums_to_posts_table',7),(39,'2023_03_24_115822_create_finish_condition_table',7),(40,'2023_03_24_115904_create_heating_table',7),(41,'2023_03_24_115927_create_material_table',7),(42,'2023_03_24_115953_create_windows_table',7),(43,'2023_03_24_120016_create_floor_table',7),(44,'2023_03_24_120044_create_construction_table',7),(45,'2023_03_25_044329_create_announcements_table',8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `numbers`
--

DROP TABLE IF EXISTS `numbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `numbers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `numbers`
--

LOCK TABLES `numbers` WRITE;
/*!40000 ALTER TABLE `numbers` DISABLE KEYS */;
/*!40000 ALTER TABLE `numbers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('bob603@gmail.com','$2y$10$6RePUAgSqV5dlYECICXvaewigVPaH3r3VvJ8eb1GTvyLIeoxdXYQa','2023-04-26 04:22:48');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,1,'photo/196aeed35ad453310f2c7023c5b72149.svg','2023-02-26 15:45:01','2023-02-26 15:45:01'),(2,2,'photo/b6c32b031ecc91047131357d01f59768.jpg','2023-02-26 17:48:59','2023-02-26 17:48:59'),(3,3,'photo/b218503c27d43de0a666dae3e130c508.jpg','2023-03-02 07:05:38','2023-03-02 07:05:38'),(4,4,'photo/6a549f4c9324ff8dd0e475c954c421f1.jpg','2023-03-03 10:16:20','2023-03-03 10:16:20'),(5,4,'photo/0c28293f329704d54a7f862e29b76e35.jpg','2023-03-03 10:16:20','2023-03-03 10:16:20'),(6,4,'photo/9aab524b79c2da95dd2bb76db6937801.jpg','2023-03-03 10:16:20','2023-03-03 10:16:20'),(7,5,'photo/c877b120d80455607f5de798bee6a529.png','2023-03-08 07:51:35','2023-03-08 07:51:35'),(8,5,'photo/c278911753dcef6769656c59a240cf10.png','2023-03-08 07:51:35','2023-03-08 07:51:35'),(9,5,'photo/33825dcb8bdf9e458da3c6dc8eccf071.png','2023-03-08 07:51:35','2023-03-08 07:51:35'),(10,5,'photo/60d2cda20a172aebdb48683d65fff141.png','2023-03-08 07:51:35','2023-03-08 07:51:35'),(11,6,'photo/cb9b119927fb71578a59e9641d3f672a.png','2023-03-08 08:09:34','2023-03-08 08:09:34'),(12,6,'photo/cb63c070a8aa469acfb18940cf357cf8.png','2023-03-08 08:09:34','2023-03-08 08:09:34'),(13,6,'photo/c77ee4cb1cb6e9f71afb869d074bcc9b.png','2023-03-08 08:09:34','2023-03-08 08:09:34'),(14,6,'photo/dead396db08f75a8d659f13b33c07f15.png','2023-03-08 08:09:34','2023-03-08 08:09:34'),(15,19,'photo/1f40001a246799ede553ce7f62b9d9c3.jpg','2023-03-24 18:30:25','2023-03-24 18:30:25'),(16,20,'photo/90224f22e88f141eeeaaf6e85bef42e7.jpg','2023-03-25 05:36:01','2023-03-25 05:36:01'),(42,19,'photo/7db5618dbe60d6fe17e84f775432952d.jpg','2023-04-05 08:01:33','2023-04-05 08:01:33'),(43,19,'photo/2b722a733bc12f57f6ac8fb44ae1edaa.jpg','2023-04-05 08:01:33','2023-04-05 08:01:33'),(44,19,'photo/343b7832624b07c6f5ceb8f41c1e8edd.jpg','2023-04-05 08:01:33','2023-04-05 08:01:33'),(45,19,'photo/969a720b77c13bd74587b15d3b87ea17.jpg','2023-04-05 08:01:33','2023-04-05 08:01:33'),(46,21,'photo/cc6a263a3d7754471793498ee3e1901d.jpeg','2023-04-18 16:53:19','2023-04-18 16:53:19');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_announcement` bigint(20) unsigned NOT NULL DEFAULT '0',
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
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_status_idx` (`status_id`),
  KEY `post_sale_idx` (`sale_id`),
  CONSTRAINT `post_sale_fk` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`),
  CONSTRAINT `post_status_fk` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'Browse job',1,1,1,'Browse jobs that match your experience to a client\'s hiring preferences. Ordered by most relevant.','Kiev, Украина',30.5234,50.4501,3,3,1050,7,1,1,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-02-26 13:45:01','2023-02-26 13:45:01'),(2,1,'testPostMap',1,1,1,'lkdfnvlknvl;ksdf;lkdmfvlkzmdfvl,zfv\'mfvadf\r\ndfbadfbadfbadfbadfbadfbadfb\r\ndabadfbadbsfgnbsgfbsfgdfbafdbadfbadfb\r\nadfbadfbadfbadfbzxvbafdadfbadfbabadfb\r\nadfbadfbafdbafdbadfbadfbafbxcvafbzdfba\r\nafvarv afvavrrvrwv','5091 AN Oost-, West- en Middelbeers, Netherlands',5.245458,51.4683138,1,55,1000,1,1,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-02-26 15:48:59','2023-02-26 15:48:59'),(3,2,'бульвар',1,1,1,'dwwdwdwdwd','бульвар Юности, 6, Энергодар, Запорожская область, Украина',0,0,1,50,60000,1,0,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2023-03-02 05:05:38','2023-04-03 14:46:54'),(4,2,'titleTATATA',1,1,1,'postpostpostpost','Poleska 4, Вроцлав, Польша',0,0,1,75,60000,1,0,0,1,0,1,0,0,1,1,0,0,1,1,NULL,0,0,0,NULL,1,NULL,0,0,0,0,0,0,0,1,0,0,0,0,0,0,1,1,NULL,NULL,NULL,1,'2023-03-03 08:16:20','2023-04-03 11:45:35'),(5,2,'rent the house',1,1,1,'big house with small rooms','Berthelotstraat 2, 1098 SV Amsterdam, Нидерланды',4.9431332,52.3503912,5,200,60000,2,0,1,0,1,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-08 05:51:35','2023-03-08 06:04:50'),(6,2,'new rent tomessage',1,1,1,'this is a try to check message controller','Horsterweg 64, 5975 NB Sevenum, Нидерланды',0,0,1,50,1,1,0,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-08 06:09:34','2023-03-08 06:09:34'),(7,3,'new post for dialog',1,1,1,'pdofkv\'pdfkv\'psdkfv\'ldv\'p;dlfvpoadfvadadfvafvaadfvasfvadfvdfvfdadfvafvafvafvafvadkmnvljahbdvlhabdlvhbadlkn cnkxbvalifdhbvailjfnv;almcnv;jkasfnvo;jakfd','Greensboro, Северная Каролина, США',-79.7919754,36.0726354,4,80,60000,1,0,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-09 06:09:22','2023-03-09 06:17:31'),(8,3,'ksdlkcmldkmlk',1,1,1,'lkjfdnvjdnfv;lkzmdf;lvkmzd;m z;km','New York, Нью-Йорк, США',-74.0059728,40.7127753,1,70,6000,1,0,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-09 06:15:39','2023-03-09 06:15:39'),(9,3,'testDIalodsMy',1,1,1,'kajfn;jnera;onaekamfv\'kmaf\'vkma\'lvp,s;lv,as\'lva\'pfkmvádfmv\'vMvmv','California, США',-119.4179324,36.778261,1,70,60000,1,0,0,0,1,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-09 06:17:06','2023-03-09 06:17:06'),(10,1,'postButtonMessage',1,1,1,'zdkjlfvnkdjfnv;zdjnv;zdkjfv;lkdf','Enerhodar, Запорожская область, Украина',34.6341859,47.5015067,1,70,60,1,0,1,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-09 09:01:55','2023-03-09 09:01:55'),(11,1,'newYourk',1,1,1,'fklvndkjfnvlakjdnfvakd vakjdj v','New York, Нью-Йорк, США',0,0,1,71,70,1,0,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2023-03-09 10:56:18','2023-05-08 03:38:51'),(12,1,'nnewll',1,1,1,'hgvkhvkh','New York, Нью-Йорк, США',0,0,1,70,60,1,0,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-09 11:25:23','2023-03-09 11:25:23'),(13,1,'Browse job',1,1,1,'Browse jobs that match your experience to a client\'s hiring preferences. Ordered by most relevant.','Kiev, Украина',5.2430774,51.471631,3,3,1050,7,1,1,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-02-26 15:45:01','2023-02-26 15:45:01'),(14,1,'testPostMap',1,1,1,'lkdfnvlknvl;ksdf;lkdmfvlkzmdfvl,zfv\'mfvadf\r\ndfbadfbadfbadfbadfbadfbadfb\r\ndabadfbadbsfgnbsgfbsfgdfbafdbadfbadfb\r\nadfbadfbadfbadfbzxvbafdadfbadfbabadfb\r\nadfbadfbafdbafdbadfbadfbafbxcvafbzdfba\r\nafvarv afvavrrvrwv','5091 AN Oost-, West- en Middelbeers, Netherlands',5.2430774,51.471631,1,55,1000,1,1,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-02-26 17:48:59','2023-02-26 17:48:59'),(15,2,'бульвар',1,1,1,'пппппппппппппппппппп','бульвар Юности, 6, Энергодар, Запорожская область, Украина',-74.0059728,40.7127753,1,50,60000,1,0,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-02 07:05:38','2023-03-02 07:05:38'),(16,2,'title',1,1,1,'postpostpostpost','Poleska 4, Вроцлав, Польша',0,0,1,75,60000,1,1,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2023-03-03 10:16:20','2023-04-03 11:46:07'),(17,2,'rent the house',1,1,1,'big house with small rooms','Berthelotstraat 2, 1098 SV Amsterdam, Нидерланды',4.9431332,52.3503912,5,200,60000,2,0,1,0,1,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-08 07:51:35','2023-03-08 08:04:50'),(18,2,'new rent tomessage',1,1,1,'this is a try to check message controller','Horsterweg 64, 5975 NB Sevenum, Нидерланды',6.0353639,51.4236887,1,50,1,1,0,0,0,0,1,0,0,0,1,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-03-08 08:09:34','2023-03-08 08:09:34'),(19,5,'in Berlin',1,1,1,'<p><b>fsdfgds </b><u>asdga </u>g</p>','Berlin, Germany',13.404954,52.52000659999999,3,65,55000,2,0,0,1,1,1,0,0,0,1,0,1,1,1,5,2,2,5,1990,1,'2023-03-25',1,0,1,1,0,0,0,1,0,0,1,0,0,1,1,0,NULL,NULL,NULL,1,'2023-03-24 18:30:25','2023-03-27 18:29:19'),(20,5,'in Amsterdam',1,1,1,'<p><b>fggfergerg </b>ee rwerhwerhwhtwhrwh</p>','Amsterdam, Netherlands',4.9041389,52.3675734,7,125,115000,3,0,0,1,1,1,0,0,0,1,1,1,1,1,1,2,2,2,1990,1,'2023-03-26',0,1,1,1,0,0,0,1,0,0,1,0,0,1,1,0,115,'youtube',NULL,1,'2023-03-25 05:36:01','2023-03-25 09:55:29'),(21,9,'Mieszkanie',1,0,1,'<p>Malownicza okolica</p>','Rietveldseweg 21, Culemborg, Netherlands',5.1925533,51.9428298,3,45,333,2,0,1,1,1,1,0,1,1,0,1,0,1,1,NULL,0,0,0,NULL,0,'2023-04-19',1,1,0,1,1,1,0,1,1,0,0,0,1,1,1,1,NULL,NULL,NULL,1,'2023-04-18 16:53:19','2023-05-07 16:12:59');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (1,'Buy',NULL,NULL),(2,'Rent',NULL,NULL);
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('PTuiYaFVjtvSHEMAYtb7vlo1mEVTjh7Aje0nNykS',5,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYW9UdEFyOENyeVVUOTJsR05GVTg4Ym1wNXpnQUdVZXEzaTVYYjRJVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9wbGFjZS5sb2MvaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNjc5NzE3ODkxO319',1679739855);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statuses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (0,'Deleted','','2023-04-10 07:34:37','2023-04-10 07:34:37'),(1,'Status 1','',NULL,NULL);
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `towns`
--

DROP TABLE IF EXISTS `towns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `towns` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `province_id` bigint(20) NOT NULL,
  `post_index` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `towns`
--

LOCK TABLES `towns` WRITE;
/*!40000 ALTER TABLE `towns` DISABLE KEYS */;
/*!40000 ALTER TABLE `towns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_notify` smallint(6) NOT NULL DEFAULT '0',
  `saved_search` text COLLATE utf8mb4_unicode_ci,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `role_id` int(11) NOT NULL DEFAULT '2',
  `logo` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '.jpg',
  `lang` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gb',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin User',NULL,'admin@local.host','2023-02-26 15:43:03','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'uQfca1s9VI','',NULL,0,NULL,1,2,'.jpg','gb','2023-02-26 15:43:03','2023-02-26 15:43:03'),(2,'vladimir',48532834556,'ochev.vladimir@gmail.com',NULL,'$2y$10$oXbbWXzFx9QoHoPjPBfzvuSyJVt.sgTVMcqc3X15ca33nQviP/bLC',NULL,NULL,NULL,'dOX9kkXMNrTuWwiP4jpAIETWxJs1sptBD1Xu86U9o2mU48vKNoKGTPB9JQze','115613617496438131195',NULL,0,NULL,1,1,'.jpg','gb','2023-02-27 14:31:38','2023-05-11 06:42:29'),(3,'Volodymyr',48532834556,'vladimir@gmail.com',NULL,'$2y$10$EqwHz6glxkaVIb.HQQjsOe30RRZO.QvnW3WW7VktmjH5nxZNDB/v.',NULL,NULL,NULL,NULL,'',NULL,0,NULL,1,2,'.jpg','gb','2023-03-08 08:10:43','2023-05-06 07:32:36'),(5,'Володимир',380503221484,'bob603@gmail.com',NULL,'$2y$10$TuvxN9L376NdrASelD6Deu8Lie8t60i8ToIoR5nd2q0UTkTN4v.s2',NULL,NULL,NULL,NULL,'114542097372898979386',NULL,0,'',1,1,'.jpg','ua','2023-01-26 12:49:32','2023-05-12 04:59:33'),(6,'Vladim',48532834556,'ladimir@gmail.com',NULL,'$2y$10$.xZnKxBleWafqsC7jLigTuqv8fJ/U0kw5I9SHxYTxSY16kynjvoBm',NULL,NULL,NULL,NULL,'',NULL,0,NULL,1,2,'.jpg','gb','2023-04-03 14:40:47','2023-04-03 14:40:47'),(7,'Marcin Tumielewicz',624134139,'tumielewicz@icloud.com',NULL,'$2y$10$FoBP3ftp1cNdKtkwxj1rf.OKyKcICu3wrJ7vRM4cHxbSnQc.VDZ7u',NULL,NULL,NULL,'NbWW2JcOFZCMtIMuK9x4CFc4aFgdeV98kN8opIhKUmhkVVD80JXLLHXpV6WY','',NULL,0,NULL,1,1,'.jpg','gb','2023-04-03 16:19:21','2023-05-08 04:21:35'),(8,'Marcin Tumielewicz',NULL,'myphoeniks@gmail.com',NULL,'eyJpdiI6InlQUUMrUFhkZmNkN1g5M2VMYXp3Q3c9PSIsInZhbHVlIjoiMUo1blplYU84eFFveHdHNWJUYk9teHEwcFp6bWk3U2M3N1ZxV2ZYMEo4TT0iLCJtYWMiOiIwN2MzMWQwOTk2OTNkMTBmNDQ1MTZkODUwODFlNWJkNDY4MzM2OTBmNTkxODE0ODdlNjYwOWFhNzIzMWMyOWMxIiwidGFnIjoiIn0=',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,1,2,'.jpg','gb','2023-04-07 08:27:10','2023-04-07 08:27:10'),(9,'Freebe Freebe',123456789,'freebespace@gmail.com',NULL,'$2y$10$1YwGNZ1DiknzMpzSn9br9OeiZ3G1iRRlTuCMyG65wrjudoWN1OPeG',NULL,NULL,NULL,NULL,NULL,'101455489592751',0,NULL,1,2,'.jpg','gb','2023-04-28 09:41:10','2023-05-11 14:05:57'),(10,'1',1,'1@2.c',NULL,'$2y$10$l0aTZzY5yeqDhHUkDBaxGeCnv34d01CZIwuC3C8Hq8ExGar3YAZue',NULL,NULL,NULL,NULL,'',NULL,0,NULL,1,2,'.jpg','gb','2023-04-26 07:43:26','2023-04-26 07:43:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `windows`
--

DROP TABLE IF EXISTS `windows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `windows` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `windows`
--

LOCK TABLES `windows` WRITE;
/*!40000 ALTER TABLE `windows` DISABLE KEYS */;
INSERT INTO `windows` VALUES (1,'plastic',NULL,NULL),(2,'wooden',NULL,NULL),(3,'aluminum',NULL,NULL);
/*!40000 ALTER TABLE `windows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishlists` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlists`
--

LOCK TABLES `wishlists` WRITE;
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;
INSERT INTO `wishlists` VALUES (2,2,1,'2023-03-30 05:53:33','2023-03-30 05:53:33'),(4,2,4,'2023-03-30 05:53:42','2023-03-30 05:53:42'),(26,2,12,'2023-04-03 11:54:25','2023-04-03 11:54:25'),(27,2,15,'2023-04-03 15:28:20','2023-04-03 15:28:20');
/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-12  6:59:49
