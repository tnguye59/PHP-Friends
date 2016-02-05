-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: friends
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'Tommy','Tomtom','tnguye59@gmail.com','1987-11-12','1bbd886460827015e5d605ed44252251','2015-11-29 17:29:23','2015-11-20 13:34:32'),(19,'Eminem','EM','eminem@gmail.com','1989-12-06','1bbd886460827015e5d605ed44252251','2015-11-29 17:29:23','2015-11-29 17:29:23'),(20,'Anthony','Anth','anthony@yahoo.com','5353-11-04','1bbd886460827015e5d605ed44252251','2015-11-29 17:29:23','2015-11-29 17:29:23'),(21,'Tiffany','Tiff','tiff@gmail.com','1981-12-03','6a204bd89f3c8348afd5c77c717a097a','2015-11-29 17:29:23','2015-11-29 17:29:23'),(22,'Kobe','Bryan','bryant@yahoo.com','1987-11-12','6a204bd89f3c8348afd5c77c717a097a','2015-11-29 17:29:23','2015-11-29 17:29:23'),(23,'Michael','Jordan','michael@yahoo.com','1999-12-12','6a204bd89f3c8348afd5c77c717a097a','2015-11-29 20:39:33','2015-11-29 20:39:33'),(24,'Lamar','Odom','odom@yahoo.com','1999-11-11','4a9d970a38b63f32496638e519ff34b3','2015-11-29 21:49:20','2015-11-29 21:49:20');
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

-- Dump completed on 2015-11-29 22:06:03
