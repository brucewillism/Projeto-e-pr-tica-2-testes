-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: projeto
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `health_unit_id` int(10) unsigned NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `health_unit_id` (`health_unit_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`health_unit_id`) REFERENCES `health_units` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health_units`
--

DROP TABLE IF EXISTS `health_units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `health_units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `telephone` varchar(15) DEFAULT '0000-0000',
  `CEP` varchar(10) NOT NULL,
  `complete_address` varchar(500) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `business_hours` varchar(30) DEFAULT 'XX:XX às XX:XX',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health_units`
--

LOCK TABLES `health_units` WRITE;
/*!40000 ALTER TABLE `health_units` DISABLE KEYS */;
INSERT INTO `health_units` VALUES (1,'Policlínica São Lucas','8135431722','53635-110','Rua Dr. Augusto Vaz de Oliveira, 65 - Cruz de Rebouças, Igarassu - PE, 53635-140, Brasil','-7.8721706','-34.9070126','XX:XX às XX:XX'),(2,'Unidade de Saúde da Família Bonfim I','(81)35454819','53637-550','Av. Rubina, 73 - Santa Luzia, Igarassu - PE, 53637-550, Brasil','-7.880873999999999','-34.907222','XX:XX às XX:XX'),(3,'Unidade de Saúde da Família- Posto do monta','0000-0000','53620-684','R. Luís Freire, 12A - Posto de Monta, Igarassu - PE, 53620-684, Brasil','-7.844273599999999','-34.9055821','XX:XX às XX:XX'),(4,'Unidade Hospital de Igarassu','3543-0566','53610-010','Rua Doutor Cosme de Sá Pereira, S/n - Centro, Igarassu - PE, 53610-010, Brasil','-7.831563099999999','-34.9118551','XX:XX às XX:XX'),(5,'Posto de Saúde de Cuieiras','0000-0000','53625-575 ','Estrada de Cuieiras - Encanto Igarassú, Igarassu - PE, Brasil','-7.854916999999999','-34.8918224','XX:XX às XX:XX'),(6,'Posto de Saúde da Família ','3438-2921','53610-610','Praça da Bandeira, 44A - Centro, Igarassu - PE, 53610-610, Brasil','-7.8132552','-34.9123055','XX:XX às XX:XX'),(7,'Unidade de Saúde da Familia Bonfim 1','3545-4819','53637-550','Av. Rubina, 73 - Santa Luzia, Igarassu - PE, 53637-550, Brasil','-7.880873999999999','-34.907222','XX:XX às XX:XX'),(8,'Unidade de Saúde da Família- Redenção','0000-0000','53620-383','Rua José Bartolomeu Galvão de Melo - Bibi, 44 - Saramandaia, Igarassu - PE, 53620-383, Brasil','-7.842111999999999','-34.909096','XX:XX às XX:XX'),(9,'Unidade de Saúde da Família- Sítio Lira','0000-0000','53625-034','Rua Alfredo Viêira de Melo, 209 - Cruz de Rebouças, Igarassu - PE, 53625-030, Brasil','-7.8702098','-34.9036716','XX:XX às XX:XX'),(10,'Unidade de Saúde da Família- Agamenon 1','3545-3320','53640-290','Rua Líbia, Igarassu - PE, Brasil','-7.8262519','-34.922006','XX:XX às XX:XX'),(11,'Unidade de Saúde do Boa Sorte','0000-0000',' 53625-330','R. Sítio do Souza, 70 - Jardim Boa Sorte, Igarassu - PE, 53625-330, Brasil','-7.863739499999999','-34.9046438','XX:XX às XX:XX'),(12,'Unidade de Saúde da Família Taépe','8135431772',' 53605-065','R. Rubéns Martins Berta, 36 - Campina de Feira, Igarassu - PE, 53605-065, Brasil','-7.826136900000001','-34.912887','XX:XX às XX:XX'),(13,'Unidade de Saúde da Família Inhamã','0000-0000','53620-249','Rua José Mário Dias - Sítio Inhamã, Cruz de Rebouças, Igarassu - PE, Brasil','-7.88460966','-34.89450701','XX:XX às XX:XX');
/*!40000 ALTER TABLE `health_units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health_units_specialties`
--

DROP TABLE IF EXISTS `health_units_specialties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `health_units_specialties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `health_unit_id` int(10) unsigned NOT NULL,
  `specialtie_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `health_unit_id` (`health_unit_id`,`specialtie_id`),
  KEY `specialtie_id` (`specialtie_id`),
  CONSTRAINT `health_units_specialties_ibfk_1` FOREIGN KEY (`health_unit_id`) REFERENCES `health_units` (`id`),
  CONSTRAINT `health_units_specialties_ibfk_2` FOREIGN KEY (`specialtie_id`) REFERENCES `specialties` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health_units_specialties`
--

LOCK TABLES `health_units_specialties` WRITE;
/*!40000 ALTER TABLE `health_units_specialties` DISABLE KEYS */;
INSERT INTO `health_units_specialties` VALUES (1,1,2),(2,1,3),(3,1,4),(4,2,4);
/*!40000 ALTER TABLE `health_units_specialties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialties`
--

DROP TABLE IF EXISTS `specialties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialties`
--

LOCK TABLES `specialties` WRITE;
/*!40000 ALTER TABLE `specialties` DISABLE KEYS */;
INSERT INTO `specialties` VALUES (2,'Pediatria'),(3,'Odontologia'),(4,'Clinico geral');
/*!40000 ALTER TABLE `specialties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Thiago Vinícius Oliveira De Matos Rodrigues','thiago','$2y$10$8qa9PsBvpLmfG3O49Nglfedc9iJCZh9kOn4HWs8w5H/ptNnnGGcEi','tvnicius782@gmail.com'),(3,'wandeson','w','$2y$10$IoarJ407GdBqnMAsBkB4/.kxbrSSJ70AODgnvEMzK0N6zlKNhCnV2','Wandeson36@gmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_health_units`
--

DROP TABLE IF EXISTS `users_health_units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_health_units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `health_unit_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_rows` (`health_unit_id`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `users_health_units_ibfk_1` FOREIGN KEY (`health_unit_id`) REFERENCES `health_units` (`id`),
  CONSTRAINT `users_health_units_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_health_units`
--

LOCK TABLES `users_health_units` WRITE;
/*!40000 ALTER TABLE `users_health_units` DISABLE KEYS */;
INSERT INTO `users_health_units` VALUES (1,1,3);
/*!40000 ALTER TABLE `users_health_units` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17  7:53:23
