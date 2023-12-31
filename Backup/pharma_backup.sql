-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pharma
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `med_grp`
--

DROP TABLE IF EXISTS `med_grp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `med_grp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grp_name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `med_grp`
--

LOCK TABLES `med_grp` WRITE;
/*!40000 ALTER TABLE `med_grp` DISABLE KEYS */;
INSERT INTO `med_grp` VALUES (1,'GASOLINE','001','2023-08-03 15:48:14',NULL,NULL,NULL),(2,'Hello','002','2023-08-04 11:40:03','admin',NULL,NULL),(3,'Hello2','003','2023-08-04 11:40:08','admin',NULL,NULL);
/*!40000 ALTER TABLE `med_grp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `med_master`
--

DROP TABLE IF EXISTS `med_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `med_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) DEFAULT NULL,
  `grp_id` int(11) DEFAULT NULL,
  `subgrp_id` int(11) DEFAULT NULL,
  `item_code` varchar(255) DEFAULT NULL,
  `hsn_code` varchar(255) DEFAULT NULL,
  `prsn` varchar(255) DEFAULT NULL,
  `ved` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `high_risk` varchar(255) DEFAULT NULL,
  `point_earn` varchar(255) DEFAULT NULL,
  `inst` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `med_master`
--

LOCK TABLES `med_master` WRITE;
/*!40000 ALTER TABLE `med_master` DISABLE KEYS */;
INSERT INTO `med_master` VALUES (1,'Bandage',1,1,'001','202203','','',1,'','','','2023-08-04 14:52:48','Admin',NULL,NULL),(2,'CREP BANDAGE 10CMX4MT FLA',1,1,'002','2023232','','asdasdasd',1,'','0','asdasd','2023-08-04 15:08:14','Admin',NULL,NULL),(3,'CREP BANDAGE 15CMX4MT FLA',1,1,'003','20212121','','asdasd',1,'','1','asdasd','2023-08-04 15:09:37','Admin',NULL,NULL),(4,'CREPE BANDAGE 2(LEUKOCREP',1,1,'004','202222','','',1,'','','','2023-08-04 15:11:32','Admin',NULL,NULL);
/*!40000 ALTER TABLE `med_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `med_subgrp`
--

DROP TABLE IF EXISTS `med_subgrp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `med_subgrp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grp_id` int(11) DEFAULT NULL,
  `subgrp_name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `med_subgrp`
--

LOCK TABLES `med_subgrp` WRITE;
/*!40000 ALTER TABLE `med_subgrp` DISABLE KEYS */;
INSERT INTO `med_subgrp` VALUES (1,1,'BANDAGE','001','2023-08-04 11:43:53','admin','',NULL),(2,1,'CANNULA','002','2023-08-04 11:44:02','admin','',NULL),(3,1,'CATHETER','003','2023-08-04 11:44:10','admin','',NULL),(4,1,'CONSUMBLE','004','2023-08-04 11:44:16','admin','',NULL),(5,1,'DRESSING','005','2023-08-04 11:44:21','admin','',NULL),(6,1,'GLOVES','006','2023-08-04 11:44:28','admin','',NULL),(7,2,'asdasd','007','2023-08-04 12:57:55','admin','',NULL),(8,3,'asdsa','008','2023-08-04 12:57:59','admin','',NULL),(9,2,'asdasd','009','2023-08-04 12:58:03','admin','',NULL);
/*!40000 ALTER TABLE `med_subgrp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-04 15:24:09
