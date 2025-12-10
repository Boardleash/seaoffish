-- MySQL dump 10.13  Distrib 9.5.0, for Linux (x86_64)
--
-- Host: localhost    Database: tins
-- ------------------------------------------------------
-- Server version	9.5.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anchovies`
--

DROP TABLE IF EXISTS `anchovies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anchovies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(55) NOT NULL,
  `type` varchar(55) DEFAULT NULL,
  `base` varchar(55) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `origin` varchar(25) NOT NULL,
  `consumed` int DEFAULT NULL,
  `smoked` varchar(1) DEFAULT NULL,
  `boneless` varchar(1) DEFAULT NULL,
  `skinless` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anchovies`
--

LOCK TABLES `anchovies` WRITE;
/*!40000 ALTER TABLE `anchovies` DISABLE KEYS */;
INSERT INTO `anchovies` VALUES (1,'Cento','Flat','Olive Oil',2.12,'Morocco',1,'n','n','y'),(2,'Crown Prince','Flat','Olive Oil',2.32,'Morocco',1,'n','n','y'),(3,'King Oscar','Flat','Olive Oil',2.48,'Morocco, Peru, Argentina',0,'n','n','y'),(4,'Roland','Flat','Olive Oil',3.59,'Morocco',1,'n','n','y'),(7,'Patagonia Provisions','White','Spicy Extra Virgin Olive Oil',9.00,'Spain',0,'n','n','n');
/*!40000 ALTER TABLE `anchovies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anchovy_ratings`
--

DROP TABLE IF EXISTS `anchovy_ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anchovy_ratings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `anchovy_id` int DEFAULT NULL,
  `review` varchar(100) DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `anchovy_id` (`anchovy_id`),
  CONSTRAINT `anchovy_ratings_ibfk_1` FOREIGN KEY (`anchovy_id`) REFERENCES `anchovies` (`id`),
  CONSTRAINT `anchovy_ratings_chk_1` CHECK ((`rating` between 0 and 5))
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anchovy_ratings`
--

LOCK TABLES `anchovy_ratings` WRITE;
/*!40000 ALTER TABLE `anchovy_ratings` DISABLE KEYS */;
INSERT INTO `anchovy_ratings` VALUES (1,2,'Not bad.  Somewhat sweet, but very salty as expected.',3,'2025-10-04'),(2,4,'Tasted lighter on the saltiness, with a hint of sweet.  Not bad.',3,'2025-10-09');
/*!40000 ALTER TABLE `anchovy_ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mackerel`
--

DROP TABLE IF EXISTS `mackerel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mackerel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(55) NOT NULL,
  `type` varchar(55) DEFAULT NULL,
  `base` varchar(55) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `origin` varchar(25) NOT NULL,
  `consumed` int DEFAULT NULL,
  `smoked` varchar(1) DEFAULT NULL,
  `boneless` varchar(1) DEFAULT NULL,
  `skinless` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mackerel`
--

LOCK TABLES `mackerel` WRITE;
/*!40000 ALTER TABLE `mackerel` DISABLE KEYS */;
INSERT INTO `mackerel` VALUES (1,'King Oscar','Atlantic','Olive Oil',3.49,'Norway',3,'n','y','y'),(4,'King Oscar','Atlantic','Jalapeno Peppers',4.01,'Norway',6,'n','y','y'),(5,'Patagonia Provisions','Atlantic','Lemon Caper',11.00,'Spain',1,'n','y','y'),(8,'Fishwife','Atlantic','Garlic and Chili Flakes',10.99,'England',1,'y','y','n'),(9,'Matiz','Atlantic','Extra Virgin Olive Oil',7.99,'Spain',1,'n','y','y');
/*!40000 ALTER TABLE `mackerel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mackerel_ratings`
--

DROP TABLE IF EXISTS `mackerel_ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mackerel_ratings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mackerel_id` int NOT NULL,
  `review` varchar(100) DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mackerel_id` (`mackerel_id`),
  CONSTRAINT `mackerel_ratings_ibfk_1` FOREIGN KEY (`mackerel_id`) REFERENCES `mackerel` (`id`),
  CONSTRAINT `mackerel_ratings_chk_1` CHECK ((`rating` between 0 and 5))
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mackerel_ratings`
--

LOCK TABLES `mackerel_ratings` WRITE;
/*!40000 ALTER TABLE `mackerel_ratings` DISABLE KEYS */;
INSERT INTO `mackerel_ratings` VALUES (5,9,'These were not bad.  Middle of the road for me.',3,'2025-11-07');
/*!40000 ALTER TABLE `mackerel_ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `other` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(55) NOT NULL,
  `type` varchar(55) DEFAULT NULL,
  `base` varchar(55) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `origin` varchar(25) NOT NULL,
  `consumed` int DEFAULT NULL,
  `smoked` varchar(1) DEFAULT NULL,
  `boneless` varchar(1) DEFAULT NULL,
  `skinless` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `other`
--

LOCK TABLES `other` WRITE;
/*!40000 ALTER TABLE `other` DISABLE KEYS */;
INSERT INTO `other` VALUES (2,'Porthos','Trout','Olive Oil',12.99,'Portugal',1,'y','y','n'),(4,'Bumble Bee','Oysters','Cottonseed Oil',3.18,'Pacific',0,'y','y','y'),(6,'Crown Prince','Oysters','Olive Oil',7.00,'South Korea',0,'y','y','y'),(8,'Chicken of the Sea','Oysters','Cottonseed Oil',2.46,'Pacific',1,'y','y','y'),(9,'Beach Cliff','Herring','Brine',1.25,'Canada',1,'y','y','y'),(10,'Natural Catch','Tuna','Olive Oil',4.49,'Pacific',1,'n','y','y');
/*!40000 ALTER TABLE `other` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `other_ratings`
--

DROP TABLE IF EXISTS `other_ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `other_ratings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `other_id` int DEFAULT NULL,
  `review` varchar(100) DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `other_id` (`other_id`),
  CONSTRAINT `other_ratings_ibfk_1` FOREIGN KEY (`other_id`) REFERENCES `other` (`id`),
  CONSTRAINT `other_ratings_chk_1` CHECK ((`rating` between 0 and 5))
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `other_ratings`
--

LOCK TABLES `other_ratings` WRITE;
/*!40000 ALTER TABLE `other_ratings` DISABLE KEYS */;
INSERT INTO `other_ratings` VALUES (1,2,'Smokiness and flavor was very subtle.  Expected a bit more from a tin at this price.',2,'2025-10-21'),(2,10,'Tastes like regular tuna. Nothing spectacular here.',2,'2025-11-06');
/*!40000 ALTER TABLE `other_ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sardine_ratings`
--

DROP TABLE IF EXISTS `sardine_ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sardine_ratings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sardine_id` int DEFAULT NULL,
  `review` varchar(100) DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sardine_id` (`sardine_id`),
  CONSTRAINT `sardine_ratings_ibfk_1` FOREIGN KEY (`sardine_id`) REFERENCES `sardines` (`id`),
  CONSTRAINT `sardine_ratings_chk_1` CHECK ((`rating` between 0 and 5))
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sardine_ratings`
--

LOCK TABLES `sardine_ratings` WRITE;
/*!40000 ALTER TABLE `sardine_ratings` DISABLE KEYS */;
INSERT INTO `sardine_ratings` VALUES (7,15,'Hands down the best sardines I\'ve had so far.  Love the flavor.',5,'2025-09-09'),(22,15,'Had these again.  Still amazing.',5,'2025-09-30'),(23,17,'These were middle of the road for me.  Added some seasoning and they were good.',3,'2025-10-01'),(49,63,'Pretty good.  Best sauce based sardines I\'ve had so far.  Would get these again.',4,'2025-11-21');
/*!40000 ALTER TABLE `sardine_ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sardines`
--

DROP TABLE IF EXISTS `sardines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sardines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(55) NOT NULL,
  `type` varchar(55) DEFAULT NULL,
  `base` varchar(55) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `origin` varchar(25) NOT NULL,
  `consumed` int DEFAULT NULL,
  `smoked` varchar(1) DEFAULT NULL,
  `boneless` varchar(1) DEFAULT NULL,
  `skinless` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sardines`
--

LOCK TABLES `sardines` WRITE;
/*!40000 ALTER TABLE `sardines` DISABLE KEYS */;
INSERT INTO `sardines` VALUES (15,'Polar','Sprats','Olive Oil',2.67,'Latvia',12,'y','n','n'),(17,'Nuri','Pilchards','Olive Oil',5.62,'Portugal',1,'n','n','n'),(46,'La Curiosa','Sprats','Olive Oil with Padron Pepper',13.99,'Spain',0,'n','n','n'),(47,'Matiz','Pilchards','Olive Oil',5.49,'Spain',1,'y','n','n'),(50,'Miss Can','Pilchards','Spicy Olive Oil',10.99,'Portugal',0,'n','n','n'),(63,'Patagonia Provisions','Pilchards','Coconut Curry',7.99,'Spain',1,'n','n','n');
/*!40000 ALTER TABLE `sardines` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-09 22:22:37
