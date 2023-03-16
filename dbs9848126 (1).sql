-- MySQL dump 10.13  Distrib 5.6.45, for Linux (x86_64)
--
-- Host: database-5011687425.webspace-host.com    Database: dbs9848126
-- ------------------------------------------------------
-- Server version	5.7.38-log

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_01_25_191735_create_posts_table',1),(6,'2023_01_25_191826_create_photos_table',1),(7,'2023_01_25_191931_create_lenguages_table',1),(8,'2023_01_25_192000_create_logos_table',1),(9,'2023_01_25_192018_create_numbers_table',1);
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
INSERT INTO `password_resets` VALUES ('ochev.vladimir@gmail.com','$2y$10$DGT1X2uTTVmsRLTHThW3L.Iq28wSWc0gr0yYrJ6mYzYTp2L20Xuom','2023-01-26 07:12:01');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,3,'photo/UWLa8WOFFBOtQzbNgyxnQeyJmZ5PbGj90SL2tiDP.jpg','2023-02-03 15:20:34','2023-02-03 15:20:34'),(2,4,'photo/Cbuxs0rOFaNZdmrdVnhkaTAf27G8l1DX99zJclpF.jpg','2023-02-03 15:32:58','2023-02-03 15:32:58'),(3,5,'photo/hivYwMRhi2ekhyGlTu92UuMDbeVpfoKdjtSTzkkO.jpg','2023-02-03 15:33:49','2023-02-03 15:33:49'),(4,6,'photo/B3Jg6WzANom4y7eSqDEJI5GcoBUye2GyYleLILsp.jpg','2023-02-03 15:34:51','2023-02-03 15:34:51'),(5,7,'photo/3kMdy7P9sn6udbU2H5ObkwsFHgMZG7YuT8vyuHGm.jpg','2023-02-03 18:00:33','2023-02-03 18:00:33'),(6,7,'photo/hCyrRgOqjVVB6kqA4rps6l3ijgJGkY126ZUVH2uQ.jpg','2023-02-03 18:00:33','2023-02-03 18:00:33'),(7,7,'photo/PIUyM8fdbJ0r37aHNeW9rH0LAA47wuMsDXTf7sBJ.jpg','2023-02-03 18:00:33','2023-02-03 18:00:33'),(8,7,'photo/VCVlPH52krKW0SEkcAW87yBw2aFfTWUATiMfAv04.jpg','2023-02-03 18:00:33','2023-02-03 18:00:33'),(9,7,'photo/yaR3aTn6h0LKh5wXNBkGQzVT0M68Yg1P0FwNibOx.jpg','2023-02-03 18:00:33','2023-02-03 18:00:33'),(10,8,'photo/3kMdy7P9sn6udbU2H5ObkwsFHgMZG7YuT8vyuHGm.jpg','2023-02-03 19:23:50','2023-02-03 19:23:50'),(11,8,'photo/XzAFvMDEmH4Df5NasIrcuRbi6MUyGEtzDXzOlNfc.jpg','2023-02-03 19:23:50','2023-02-03 19:23:50'),(12,8,'photo/5CfuoKzGSzT5JN15jjBnCCQPiF5WrTtgUUHSZWSL.jpg','2023-02-03 19:23:50','2023-02-03 19:23:50'),(13,8,'photo/WwxfLW8aAaoj4XTQGI8LGXNJe1YABMfT51eeC9j1.jpg','2023-02-03 19:23:50','2023-02-03 19:23:50'),(14,8,'photo/ihF7q7ThRRbCSY29YYbDzHd10fQz7zuGweIoHm2X.jpg','2023-02-03 19:23:50','2023-02-03 19:23:50'),(15,9,'photo/a0a206c6c44060256577e114ca05f968.png','2023-02-04 09:42:00','2023-02-04 09:42:00'),(16,10,'photo/66e40528e903f9d3ec231de236c292c6.jpg','2023-02-05 08:53:45','2023-02-05 08:53:45'),(17,10,'photo/3b833600a6b7a9d1676befa8661a2811.jpg','2023-02-05 08:53:45','2023-02-05 08:53:45'),(18,10,'photo/a011fe9475da44dd0aacd7d37230f3a8.jpg','2023-02-05 08:53:45','2023-02-05 08:53:45'),(19,10,'photo/e40cb8e86fd7046810d776801b9c8d68.jpg','2023-02-05 08:53:45','2023-02-05 08:53:45'),(20,10,'photo/e8874bc3369efe8fe4bcd3abe84d5697.jpg','2023-02-05 08:53:45','2023-02-05 08:53:45'),(21,10,'photo/f1ac72e3ac0938429c1a67fa593f69c2.jpg','2023-02-05 08:53:45','2023-02-05 08:53:45'),(22,10,'photo/9f5114665af37cdf430ecf417e625cc8.jpg','2023-02-05 08:53:45','2023-02-05 08:53:45'),(23,10,'photo/5621240f793e5484670ff442570f18a4.jpg','2023-02-05 08:53:45','2023-02-05 08:53:45'),(24,10,'photo/deaa38f72265608dc2b9f3791f47730c.jpg','2023-02-05 08:53:45','2023-02-05 08:53:45');
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
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,3,'Post 1','3f34f34f3f34f3','1111 AN','i have no idea what address to write',0,'2023-02-03 10:14:40','2023-02-03 10:16:22'),(2,3,'Post 2','xcmdf vmdf vkdfm vdkfm vdfkm','1010 RG','i have no idea what address to write',0,'2023-02-03 10:16:57','2023-02-03 10:17:38'),(3,4,'titleeeee','.sfmvlksmvlksmdvlksdvlksdvlk','1111 AN','sdvsdsdsd',0,'2023-02-03 15:20:34','2023-02-03 15:20:34'),(4,4,'titleeeee','.sfmvlksmvlksmdvlksdvlksdvlk','1111 AN','sdvsdsdsd',0,'2023-02-03 15:32:58','2023-02-03 15:32:58'),(5,4,'titleeeee','.sfmvlksmvlksmdvlksdvlksdvlk','1111 AN','sdvsdsdsd',0,'2023-02-03 15:33:49','2023-02-03 15:33:49'),(6,4,'sdvsdvsd','sdvsdvsdvds','1111 AN','i have no idea what address to write',0,'2023-02-03 15:34:51','2023-02-03 15:34:51'),(7,4,'new2211','newnewnew','1111 AN','i have no idea what address to write',1,'2023-02-03 18:00:33','2023-02-03 18:00:55'),(8,4,'new final post','ksjdckjdhckudshc','1111 AN','i have no idea what address to write',0,'2023-02-03 19:23:50','2023-02-03 19:23:50'),(9,1,'Titlee','<p>Ggggdddddggggg</p>','1110 AN','Adres adres adres',0,'2023-02-04 09:42:00','2023-02-08 08:24:07'),(10,2,'Title','<p><strong>Omschrijving</strong><br />Aan de rand van het historische Van Heutszpark vindt u &eacute;&eacute;n van de mooiste woningen van Coevorden; het landhuis, riet gedekt dat onder architectuur is gebouwd in 1977 en in 2009 en 2020 verbouwd en gemoderniseerd. De perceelsoppervlakte bedraagt maar liefst 1503 m&sup2;. Aan de achterzijde vindt u een heerlijke tuin met terras, zwembad en poolhouse met overdekt terras en jacuzzi. Dit schitterende, ruime landhuis is zowel van binnen als van buiten een lust voor het oog en heeft liefst 6 slaapkamers. Door de locatie aan het Van Heutszpark heeft u niet alleen volop privacy en groen in uw directe omgeving, maar tevens het centrum, scholen en voorzieningen op loopafstand. Een droomhuis dat luxe, rust en genot op onge&euml;venaarde wijze combineert. INDELING: Begane grond: Hier vindt u de indrukwekkende hal/entree met vide en fraaie trapopgang, garderobe-nis en toilet met urinoir. Via de hal heeft u toegang tot de praktische bijkeuken, voorzien van een keukenblok en een doucheruimte. De sfeervolle, ruime living is voorzien van een plavuizen vloer met vloerverwarming en grote schuifpui naar het terras. Om de \"hoek\" vindt u in de living een werkkamer/kantoor. De suite-deuren vanuit de woonkamer vormen de entree naar de woonkeuken, die ook is voorzien van openslaande deuren naar het terras. De inbouwkeuken is met granietblad en kookeiland en voorzien van uitgebreide inbouwapparatuur. 1e Verdieping: Als u de trap oploopt komt u eerst terecht op de ruime overloop. Vervolgens vindt u op de eerste verdieping maar liefst vijf slaapkamers, waarvan drie v.v. een balkon/loggia met schitterende uitzicht op het Van Heutszpark. De luxe, moderne badkamer is v.v. ligbad, inloopdouche, wandcloset en dubbele wastafel. 2e Verdieping: Via een vaste trap gaat u naar de 2e verdieping waarop een extra slaapkamer of recreatieruimte en zolderberging. Dit landhuis biedt u dus vele extra\'s: - Woning is volledig ge&iuml;soleerd - Hekwerk is vernieuwd - Afsluitbare elektrische poort met videofooninstallatie - Voorzien van alarminstallatie - Gehele begane grond heeft een prachtige plavuizenvloer met vloerverwarming, badkamer incl. spiegelverwarming. - Poolhouse met overdekt terras, jacuzzi en zwembad - Extra dik rietendak volledig vernieuwd in 2011 en voorzien van bliksemafleiders - Het huis heeft een hoog afwerkingsniveau - Het centrum van Emmen ligt op circa 21 km afstand van Coevorden en het centrum van Zwolle op circa <em><strong>57 km</strong></em>.</p>','1010 AA','Schutselaan 2',1,'2023-02-05 08:53:45','2023-02-07 09:08:47');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
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
  `phone` bigint(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Vladimir',NULL,'ochev.vladimir@gmail.com',NULL,'$2y$10$3aI8mG90wl9c61h6NCWMduFK0AURSi794tq27cD41okgXK25dRaUq',NULL,'2023-01-26 07:11:07','2023-01-26 07:11:07'),(2,'Владимир',NULL,'bob603@gmail.com',NULL,'$2y$10$TuvxN9L376NdrASelD6Deu8Lie8t60i8ToIoR5nd2q0UTkTN4v.s2',NULL,'2023-01-26 14:49:32','2023-01-26 14:49:32'),(3,'Ramedlav',48532834556,'ochev@gmail.com',NULL,'$2y$10$Rul4dnp0OrA2zBwrPV7BoOzk9bdKTuOCkpRnh0aEjsCGX92PVPEne',NULL,'2023-02-03 10:09:19','2023-02-03 10:09:19'),(4,'Ramedlav',48532834556,'vladimir@gmail.com',NULL,'$2y$10$xBq0Jh6DNgmmK6c3XbDal.HQ7VnYIyrFRfEHxLuJFHTXWSSV8ZYgq',NULL,'2023-02-03 15:12:32','2023-02-03 15:12:32'),(5,'Marcin Tumielewicz',624134139,'tumielewicz@icloud.com',NULL,'$2y$10$3PB7x93skyj81GxSGYJ9UuU3mL3wUWR.4aLam8a0sIhliLesLdaX2',NULL,'2023-02-03 16:20:17','2023-02-03 16:20:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-09  8:24:58
