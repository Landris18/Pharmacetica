-- MariaDB dump 10.17  Distrib 10.4.7-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: Pharmacetica
-- ------------------------------------------------------
-- Server version	10.4.7-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Admin_admin`
--

DROP TABLE IF EXISTS `Admin_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin_admin`
--

LOCK TABLES `Admin_admin` WRITE;
/*!40000 ALTER TABLE `Admin_admin` DISABLE KEYS */;
INSERT INTO `Admin_admin` VALUES (1,'Admin','4e7afebcfbae000b22c7c85e5560f89a2a0280b4');
/*!40000 ALTER TABLE `Admin_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Client`
--

LOCK TABLES `Client` WRITE;
/*!40000 ALTER TABLE `Client` DISABLE KEYS */;
/*!40000 ALTER TABLE `Client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Commande`
--

DROP TABLE IF EXISTS `Commande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit_id` int(11) NOT NULL,
  `nbr_produit` int(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date_commande` datetime NOT NULL,
  `date_livraison` datetime DEFAULT NULL,
  `est_livree` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Commande`
--

LOCK TABLES `Commande` WRITE;
/*!40000 ALTER TABLE `Commande` DISABLE KEYS */;
/*!40000 ALTER TABLE `Commande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix_unit` float NOT NULL,
  `nombre_disponible` int(11) DEFAULT NULL,
  `nombre_commande` int(11) DEFAULT NULL,
  `nombre` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produit`
--

LOCK TABLES `produit` WRITE;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` VALUES (1,'Nivaquinem',255,NULL,NULL,52),(2,'mmm',4444,NULL,NULL,585),(10,'cvb',4444,NULL,NULL,550000),(243,'fefef',454,NULL,NULL,8451),(5475,'french',44,NULL,NULL,55),(10000,'alcool',4545,NULL,NULL,5855555),(20136,'kali linux',2588,NULL,NULL,585),(20745,'Jamala',55,NULL,NULL,45878),(45455,'Nivaquine',4545,NULL,NULL,55),(45874,'rfrffrfrfv',4444,NULL,NULL,55),(56665,'gfhf',4444,NULL,NULL,42),(201201,'huindddd',4444,NULL,NULL,55),(256899,'Ataov matotra',55,NULL,NULL,5454),(258269,'moly',9,NULL,NULL,555558),(363939,'gollolog',55,NULL,NULL,585),(696555,'huikokt',4444000,NULL,NULL,5454),(1478965,'ffgffaaaa',55,NULL,NULL,55),(5525265,'hyhy',4444,NULL,NULL,55),(5858585,'killall',98989,NULL,NULL,5445),(23214587,'nitrogene',4545,NULL,NULL,5454),(25252852,'nolopoiuy',4545,NULL,NULL,5454),(44557855,'grgrgr',4444,NULL,NULL,55),(59595959,'poltic',52554700,NULL,NULL,58546953),(98564799,'sirop',98989,NULL,NULL,585),(454555555,'Nivaquinef',4444,NULL,NULL,55),(454557888,'Nivaquineygh',4444,NULL,NULL,5454);
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-17  6:54:08
