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
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','admin'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'syntax_highlighting','true'),(7,1,'comment_shortcuts','false'),(8,1,'admin_color','fresh'),(9,1,'use_ssl','0'),(10,1,'show_admin_bar_front','true'),(11,1,'locale',''),(12,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(13,1,'wp_user_level','10'),(14,1,'dismissed_wp_pointers',''),(15,1,'show_welcome_panel','1'),(16,1,'session_tokens','a:3:{s:64:\"b2887f7a3810bc19dbc7eaa508ffaf560e7ea409244c6b717efd7df8b6298a46\";a:4:{s:10:\"expiration\";i:1520226368;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36\";s:5:\"login\";i:1520053568;}s:64:\"737b1af980270db3d8b441cb58e39a180985a24752b192918d49b9d35dd8d3f6\";a:4:{s:10:\"expiration\";i:1520282605;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36\";s:5:\"login\";i:1520109805;}s:64:\"544e1eeb44fb11b7e46c2976a3e09dc5154a6e4c38235ab771b3c040fca62a7e\";a:4:{s:10:\"expiration\";i:1520364296;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36\";s:5:\"login\";i:1520191496;}}'),(17,1,'wp_dashboard_quick_press_last_post_id','132'),(18,1,'community-events-location','a:1:{s:2:\"ip\";s:2:\"::\";}'),(19,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),(20,1,'metaboxhidden_nav-menus','a:1:{i:0;s:12:\"add-post_tag\";}'),(21,1,'nav_menu_recently_edited','9'),(22,1,'closedpostboxes_post','a:0:{}'),(23,1,'metaboxhidden_post','a:8:{i:0;s:12:\"revisionsdiv\";i:1;s:11:\"postexcerpt\";i:2;s:13:\"trackbacksdiv\";i:3;s:10:\"postcustom\";i:4;s:16:\"commentstatusdiv\";i:5;s:11:\"commentsdiv\";i:6;s:7:\"slugdiv\";i:7;s:9:\"authordiv\";}'),(24,1,'wp_user-settings','editor=html&libraryContent=browse&align=center&advImgDetails=show'),(25,1,'wp_user-settings-time','1520114718'),(26,1,'closedpostboxes_page','a:0:{}'),(27,1,'metaboxhidden_page','a:3:{i:0;s:10:\"postcustom\";i:1;s:16:\"commentstatusdiv\";i:2;s:9:\"authordiv\";}');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-04 20:08:50
