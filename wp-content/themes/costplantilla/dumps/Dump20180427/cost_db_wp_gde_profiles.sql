-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: cost_db
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `wp_gde_profiles`
--

DROP TABLE IF EXISTS `wp_gde_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_gde_profiles` (
  `profile_id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `profile_name` varchar(64) NOT NULL,
  `profile_desc` varchar(255) DEFAULT NULL,
  `profile_data` longtext NOT NULL,
  UNIQUE KEY `profile_id` (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_gde_profiles`
--

LOCK TABLES `wp_gde_profiles` WRITE;
/*!40000 ALTER TABLE `wp_gde_profiles` DISABLE KEYS */;
INSERT INTO `wp_gde_profiles` VALUES (1,'default','This is the default profile, used when no profile is specified.','a:22:{s:6:\"viewer\";s:8:\"standard\";s:13:\"default_width\";s:4:\"100%\";s:14:\"default_height\";s:5:\"500px\";s:9:\"tb_mobile\";s:7:\"default\";s:8:\"tb_flags\";s:0:\"\";s:10:\"tb_fullscr\";s:7:\"default\";s:10:\"tb_fullwin\";s:3:\"new\";s:11:\"tb_fulluser\";s:2:\"no\";s:8:\"tb_print\";s:2:\"no\";s:10:\"vw_bgcolor\";s:7:\"#EBEBEB\";s:10:\"vw_pbcolor\";s:7:\"#DADADA\";s:6:\"vw_css\";s:0:\"\";s:8:\"vw_flags\";s:0:\"\";s:8:\"language\";s:5:\"en_US\";s:8:\"base_url\";s:49:\"http://localhost/cost_wp/wp-content/uploads/\";s:9:\"link_show\";s:3:\"all\";s:9:\"link_mask\";s:2:\"no\";s:10:\"link_block\";s:2:\"no\";s:9:\"link_text\";s:23:\"Download (%TYPE, %SIZE)\";s:8:\"link_pos\";s:5:\"below\";s:10:\"link_force\";s:2:\"no\";s:5:\"cache\";s:2:\"on\";}');
/*!40000 ALTER TABLE `wp_gde_profiles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-27 23:09:28
