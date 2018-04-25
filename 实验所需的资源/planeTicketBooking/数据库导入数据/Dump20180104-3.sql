-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: ticket
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB
use ticket;
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
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `airport_name` varchar(255) DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'首都T2机场','北京市'),(2,'长水机场','昆明市'),(3,'地窝堡机场','乌鲁木齐市'),(4,'周水子机场','大连市'),(5,'凤凰机场','三亚市'),(6,'洛阳机场','洛阳市'),(7,'南京机场','南京市'),(8,'太原机场','太原市'),(9,'天津机场','天津市'),(10,'汉中机场','汉中市'),(11,'石家庄机场','石家庄市'),(12,'贵阳机场','贵阳市'),(13,'重庆机场','重庆市'),(14,'南阳机场','南阳市'),(15,'兰州机场','兰州市');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'海南航空'),(2,'祥鹏航空'),(3,'联合航空'),(4,'南方航空'),(5,'中国航空'),(6,'东方航空'),(8,'四川航空'),(9,'深圳航空'),(10,'华夏航空');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `constructor`
--

DROP TABLE IF EXISTS `constructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `constructor` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sex` bit(1) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `constructor`
--

LOCK TABLES `constructor` WRITE;
/*!40000 ALTER TABLE `constructor` DISABLE KEYS */;
/*!40000 ALTER TABLE `constructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_airline`
--

DROP TABLE IF EXISTS `detail_airline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_airline` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `airline_price` double DEFAULT NULL,
  `arrive_time` datetime DEFAULT NULL,
  `departure_time` datetime DEFAULT NULL,
  `flight_lenght` double DEFAULT NULL,
  `flight_time` double DEFAULT NULL,
  `arrive_city_id` bigint(20) DEFAULT NULL,
  `flight_id` bigint(20) DEFAULT NULL,
  `set_out_city_id` bigint(20) DEFAULT NULL,
  `total_airline_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKrwqjghabhieh4yinprf92y70q` (`arrive_city_id`),
  KEY `FKg9lxpqbsmwd7makseaonwt86x` (`flight_id`),
  KEY `FK4g9f9rdycft292ri5ejn24oj9` (`set_out_city_id`),
  KEY `FK3a93s8mvilicexpfmfvgf43og` (`total_airline_id`),
  CONSTRAINT `FK3a93s8mvilicexpfmfvgf43og` FOREIGN KEY (`total_airline_id`) REFERENCES `total_airline` (`id`),
  CONSTRAINT `FK4g9f9rdycft292ri5ejn24oj9` FOREIGN KEY (`set_out_city_id`) REFERENCES `city` (`id`),
  CONSTRAINT `FKg9lxpqbsmwd7makseaonwt86x` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`id`),
  CONSTRAINT `FKrwqjghabhieh4yinprf92y70q` FOREIGN KEY (`arrive_city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_airline`
--

LOCK TABLES `detail_airline` WRITE;
/*!40000 ALTER TABLE `detail_airline` DISABLE KEYS */;
INSERT INTO `detail_airline` VALUES (1,2580,'2018-01-03 22:30:00','2018-01-03 18:30:00',9.6,4,2,1,1,1),(2,2580,'2018-01-03 11:40:00','2018-01-03 07:40:00',9.6,4,2,2,1,1),(3,2600,'2018-01-03 04:10:00','2018-01-03 08:40:06',9.6,4.3,5,3,1,2),(4,2700,'2018-01-03 08:25:00','2018-01-03 12:10:00',9.6,4.1,3,4,1,3),(5,2700,'2018-01-03 13:50:00','2018-01-03 17:20:00',9.6,4.1,3,27,1,3),(6,2580,'2018-01-03 07:35:00','2018-01-03 10:10:00',9.6,3.2,1,28,2,4),(7,2600,'2018-01-03 17:10:00','2018-01-03 21:55:00',0,3.7,1,29,5,5),(8,2600,'2018-01-03 19:55:00','2018-01-03 23:00:00',0,3.4,1,30,5,5),(9,2580,'2018-01-03 07:25:00','2018-01-03 11:25:00',NULL,4,2,31,1,1),(10,2580,'2018-01-03 03:35:00','2018-01-03 07:35:00',NULL,4,2,32,1,1),(11,2580,'2018-01-03 06:55:00','2018-01-03 10:55:00',NULL,4,2,33,1,1),(12,2580,'2018-01-03 19:05:00','2018-01-03 10:55:00',NULL,3.5,2,34,1,5),(13,1500,'2018-01-03 18:55:00','2018-01-03 21:55:00',NULL,2.1,5,35,2,6),(14,1200,'2018-01-03 08:50:00','2018-01-03 10:50:00',NULL,2,6,36,2,7),(15,1200,'2018-01-03 11:00:00','2018-01-03 14:00:00',NULL,3,4,36,6,7),(16,2400,'2018-01-03 08:50:00','2018-01-03 14:00:00',NULL,5.1,4,36,2,7),(17,1300,'2018-01-03 14:50:00','2018-01-03 18:00:00',NULL,3.1,7,37,5,8),(18,1600,'2018-01-03 18:20:00','2018-01-03 20:50:00',NULL,2.3,8,37,7,8),(19,2900,'2018-01-03 14:50:00','2018-01-03 20:50:00',NULL,5.4,4,37,5,8);
/*!40000 ALTER TABLE `detail_airline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount_rule`
--

DROP TABLE IF EXISTS `discount_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discount_rule` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `end_date` datetime DEFAULT NULL,
  `first_class_cabin_discount` double DEFAULT NULL,
  `sparpreis_discount` double DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `tourist_class_discount` double DEFAULT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKs4qhw25jy662guvk2idu0pmmg` (`company_id`),
  CONSTRAINT `FKs4qhw25jy662guvk2idu0pmmg` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount_rule`
--

LOCK TABLES `discount_rule` WRITE;
/*!40000 ALTER TABLE `discount_rule` DISABLE KEYS */;
INSERT INTO `discount_rule` VALUES (1,'2018-01-03 00:00:00',1,0.5,'2018-01-23 00:00:00',0.8,1),(2,'2018-01-03 00:00:00',1,0.6,'2018-01-23 00:00:00',0.78,1),(3,'2018-01-03 00:00:00',1,0.3,'2018-01-23 00:00:00',0.8,1),(4,'2018-01-03 00:00:00',1,0.5,'2018-01-23 00:00:00',0.8,1),(5,'2018-01-03 00:00:00',1,0.46,'2018-01-23 00:00:00',0.78,1),(6,'2018-01-03 00:00:00',1,0.35,'2018-01-23 00:00:00',0.78,1),(7,'2018-01-03 00:00:00',0.97,0.22,'2018-01-23 00:00:00',0.85,6),(8,'2018-01-03 00:00:00',1,0.3,'2018-01-23 00:00:00',0.75,1),(9,'2018-01-03 00:00:00',0.97,0.25,'2018-01-23 00:00:00',0.85,6),(10,'2018-01-03 00:00:00',0.97,0.28,'2018-01-23 00:00:00',0.85,6),(11,'2018-01-03 00:00:00',0.97,0.25,'2018-01-23 00:00:00',0.85,6),(12,'2018-01-03 00:00:00',0.97,0.3,'2018-01-23 00:00:00',0.85,6),(13,'2018-01-03 00:00:00',0.97,0.28,'2018-01-23 00:00:00',0.85,6),(14,'2018-01-03 00:00:00',0.97,0.22,'2018-01-23 00:00:00',0.85,6),(15,'2018-01-03 00:00:00',0.97,0.25,'2018-01-23 00:00:00',0.85,6),(16,'2018-01-03 00:00:00',0.97,0.25,'2018-01-23 00:00:00',0.85,6),(17,'2018-01-03 00:00:00',0.97,0.22,'2018-01-23 00:00:00',0.85,6),(18,'2018-01-03 00:00:00',0.98,0.35,'2018-01-23 00:00:00',0.88,4),(19,'2018-01-03 00:00:00',0.98,0.38,'2018-01-23 00:00:00',0.88,4),(20,'2018-01-03 00:00:00',0.98,0.35,'2018-01-23 00:00:00',0.88,4),(21,'2018-01-03 00:00:00',0.98,0.35,'2018-01-23 00:00:00',0.88,4),(22,'2018-01-03 00:00:00',0.98,0.32,'2018-01-23 00:00:00',0.88,4),(23,'2018-01-03 00:00:00',0.98,0.35,'2018-01-23 00:00:00',0.88,4),(24,'2018-01-03 00:00:00',0.98,0.38,'2018-01-23 00:00:00',0.88,4),(25,'2018-01-03 00:00:00',0.98,0.38,'2018-01-23 00:00:00',0.88,4),(26,'2018-01-03 00:00:00',0.98,0.4,'2018-01-23 00:00:00',0.88,4),(27,'2018-01-03 00:00:00',0.98,0.32,'2018-01-23 00:00:00',0.88,4),(28,'2018-01-03 00:00:00',0.98,0.34,'2018-01-23 00:00:00',0.88,4),(29,'2018-01-03 00:00:00',0.98,0.32,'2018-01-23 00:00:00',0.88,4),(30,'2018-01-03 00:00:00',0.98,0.34,'2018-01-23 00:00:00',0.88,4),(31,'2018-01-03 00:00:00',0.98,0.35,'2018-01-23 00:00:00',0.88,4),(32,'2018-01-03 00:00:00',0.98,0.32,'2018-01-23 00:00:00',0.88,4),(33,'2018-01-03 00:00:00',0.98,0.34,'2018-01-23 00:00:00',0.88,4),(34,'2018-01-03 00:00:00',1,0.28,'2018-01-23 00:00:00',0.8,3),(35,'2018-01-03 00:00:00',1,0.28,'2018-01-23 00:00:00',0.8,3),(36,'2018-01-03 00:00:00',1,0.28,'2018-01-23 00:00:00',0.8,3),(37,'2018-01-03 00:00:00',1,0.28,'2018-01-23 00:00:00',0.8,3),(38,'2018-01-03 00:00:00',1,0.28,'2018-01-23 00:00:00',0.8,3),(39,'2018-01-03 00:00:00',1,0.3,'2018-01-23 00:00:00',0.78,8),(40,'2018-01-03 00:00:00',1,0.3,'2018-01-23 00:00:00',0.78,8),(41,'2018-01-03 00:00:00',1,0.3,'2018-01-23 00:00:00',0.78,8),(42,'2018-01-03 00:00:00',0.95,0.22,'2018-01-23 00:00:00',0.95,9),(43,'2018-01-03 00:00:00',1,0.44,'2018-01-23 00:00:00',0.9,10),(44,'2018-01-03 00:00:00',1,0.44,'2018-01-23 00:00:00',0.9,10),(45,'2018-01-03 00:00:00',1,0.45,'2018-01-23 00:00:00',0.9,10),(46,'2018-01-03 00:00:00',0.95,0.3,'2018-01-23 00:00:00',0.8,2),(47,'2018-01-03 00:00:00',0.95,0.3,'2018-01-23 00:00:00',0.8,2),(48,'2018-01-03 00:00:00',0.95,0.3,'2018-01-23 00:00:00',0.8,2);
/*!40000 ALTER TABLE `discount_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endorse_rule`
--

DROP TABLE IF EXISTS `endorse_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endorse_rule` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rule_explain` varchar(255) DEFAULT NULL,
  `tourist_class_money` double DEFAULT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKp00va9wlnhew0k9q88bp7fef0` (`company_id`),
  CONSTRAINT `FKp00va9wlnhew0k9q88bp7fef0` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endorse_rule`
--

LOCK TABLES `endorse_rule` WRITE;
/*!40000 ALTER TABLE `endorse_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `endorse_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flight`
--

DROP TABLE IF EXISTS `flight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flight` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `flight_num` varchar(255) DEFAULT NULL,
  `discount_rule_id` bigint(20) DEFAULT NULL,
  `endorse_rule_id` bigint(20) DEFAULT NULL,
  `free_ticket_rule_id` bigint(20) DEFAULT NULL,
  `plane_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK2ltibijr0q96yyict2wnmhhom` (`discount_rule_id`),
  KEY `FK7n28qcq8m8v77r14eyxrf07mr` (`endorse_rule_id`),
  KEY `FK3gegoyqwamrlt1u6qr2jkvljw` (`free_ticket_rule_id`),
  KEY `FK7p9fvp6d7uh9cgn47uet8a8nb` (`plane_id`),
  CONSTRAINT `FK2ltibijr0q96yyict2wnmhhom` FOREIGN KEY (`discount_rule_id`) REFERENCES `discount_rule` (`id`),
  CONSTRAINT `FK3gegoyqwamrlt1u6qr2jkvljw` FOREIGN KEY (`free_ticket_rule_id`) REFERENCES `free_ticket_rule` (`id`),
  CONSTRAINT `FK7n28qcq8m8v77r14eyxrf07mr` FOREIGN KEY (`endorse_rule_id`) REFERENCES `endorse_rule` (`id`),
  CONSTRAINT `FK7p9fvp6d7uh9cgn47uet8a8nb` FOREIGN KEY (`plane_id`) REFERENCES `plane` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flight`
--

LOCK TABLES `flight` WRITE;
/*!40000 ALTER TABLE `flight` DISABLE KEYS */;
INSERT INTO `flight` VALUES (1,'HU7311',1,NULL,NULL,1),(2,'HU7211',2,NULL,NULL,4),(3,'HU7879',3,NULL,NULL,5),(4,'HU7245',4,NULL,NULL,5),(27,'HU7145',5,NULL,NULL,5),(28,'HU7312',6,NULL,NULL,6),(29,'HU7280',7,NULL,NULL,7),(30,'HU7780',8,NULL,NULL,5),(31,'MU2035',9,NULL,NULL,7),(32,'MU2569',10,NULL,NULL,8),(33,'MU5714',11,NULL,NULL,8),(34,'MU4450',12,NULL,NULL,7),(35,'MU5745',13,NULL,NULL,9),(36,'MU5799',14,NULL,NULL,8),(37,'MU2788',15,NULL,NULL,9),(38,'MU5299',16,NULL,NULL,8),(39,'MU5746',17,NULL,NULL,9),(56,'CZ3997',18,NULL,NULL,10),(57,'CZ9526',19,NULL,NULL,11),(58,'CZ6126',20,NULL,NULL,12),(59,'CZ6134',21,NULL,NULL,12),(60,'CZ6910',22,NULL,NULL,13),(61,'CZ9551',23,NULL,NULL,12),(62,'CZ6350',24,NULL,NULL,12),(63,'CZ6953',25,NULL,NULL,14),(64,'CZ3902',26,NULL,NULL,15),(65,'CZ6160',27,NULL,NULL,16),(66,'CZ3998',28,NULL,NULL,16),(67,'CZ6131',29,NULL,NULL,15),(68,'CZ6125',30,NULL,NULL,15),(69,'CZ9552',31,NULL,NULL,15),(70,'CZ6987',32,NULL,NULL,11),(71,'CZ6954',33,NULL,NULL,15),(72,'KN5828',34,NULL,NULL,3),(73,'KN5212',35,NULL,NULL,3),(74,'KN5211',36,NULL,NULL,3),(75,'KN5827',37,NULL,NULL,3),(76,'KN5511',38,NULL,NULL,3),(77,'3U8838',39,NULL,NULL,18),(78,'3U8759',40,NULL,NULL,18),(79,'3U8720',41,NULL,NULL,18),(80,'ZH9155',42,NULL,NULL,19),(81,'G55064',43,NULL,NULL,20),(82,'G52628',44,NULL,NULL,21),(84,'G55063',45,NULL,NULL,20),(88,'8L9965',46,NULL,NULL,22),(89,'8L9991',47,NULL,NULL,23),(90,'8L9966',48,NULL,NULL,22);
/*!40000 ALTER TABLE `flight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `free_ticket_rule`
--

DROP TABLE IF EXISTS `free_ticket_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `free_ticket_rule` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_class_cabin_scale` double DEFAULT NULL,
  `rule_explain` varchar(255) DEFAULT NULL,
  `tourist_class_scale` double DEFAULT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKdwsfi4kbyeu016h6j109fl15w` (`company_id`),
  CONSTRAINT `FKdwsfi4kbyeu016h6j109fl15w` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `free_ticket_rule`
--

LOCK TABLES `free_ticket_rule` WRITE;
/*!40000 ALTER TABLE `free_ticket_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `free_ticket_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lineitem`
--

DROP TABLE IF EXISTS `lineitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lineitem` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticket_price` double DEFAULT NULL,
  `passenger_id` bigint(20) DEFAULT NULL,
  `ticket_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKo8vtylaye57nhwdmxhlaukp01` (`passenger_id`),
  KEY `FKgqc6ey9b1a0kjuyi3fgqekplr` (`ticket_id`),
  CONSTRAINT `FKgqc6ey9b1a0kjuyi3fgqekplr` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`),
  CONSTRAINT `FKo8vtylaye57nhwdmxhlaukp01` FOREIGN KEY (`passenger_id`) REFERENCES `passenger` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lineitem`
--

LOCK TABLES `lineitem` WRITE;
/*!40000 ALTER TABLE `lineitem` DISABLE KEYS */;
/*!40000 ALTER TABLE `lineitem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `is_back_ticket` bit(1) DEFAULT NULL,
  `is_pay` bit(1) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `pay_date` datetime DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKel9kyl84ego2otj2accfd8mr7` (`user_id`),
  CONSTRAINT `FKel9kyl84ego2otj2accfd8mr7` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_lineitems`
--

DROP TABLE IF EXISTS `orders_lineitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_lineitems` (
  `orders_id` bigint(20) NOT NULL,
  `lineitems_id` bigint(20) NOT NULL,
  PRIMARY KEY (`orders_id`,`lineitems_id`),
  UNIQUE KEY `UK_9oh5ihhsibnoex7p1y2p8uji4` (`lineitems_id`),
  CONSTRAINT `FKqgx66fts9igsfgaq624vq2gy4` FOREIGN KEY (`lineitems_id`) REFERENCES `lineitem` (`id`),
  CONSTRAINT `FKt09xka641ciysvnrvpeqqienn` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_lineitems`
--

LOCK TABLES `orders_lineitems` WRITE;
/*!40000 ALTER TABLE `orders_lineitems` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_lineitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passenger` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `identity` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_num` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKmk0iuq3k712q80qqjehqdndoa` (`user_id`),
  CONSTRAINT `FKmk0iuq3k712q80qqjehqdndoa` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passenger`
--

LOCK TABLES `passenger` WRITE;
/*!40000 ALTER TABLE `passenger` DISABLE KEYS */;
/*!40000 ALTER TABLE `passenger` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plane`
--

DROP TABLE IF EXISTS `plane`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plane` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_class_cabin_seat` int(11) NOT NULL,
  `plane_type` varchar(255) DEFAULT NULL,
  `tourist_class_seat` int(11) NOT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKbtj8q7xla3aojudiebq9v4c3u` (`company_id`),
  CONSTRAINT `FKbtj8q7xla3aojudiebq9v4c3u` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plane`
--

LOCK TABLES `plane` WRITE;
/*!40000 ALTER TABLE `plane` DISABLE KEYS */;
INSERT INTO `plane` VALUES (1,8,'波音738中',400,1),(2,8,'空客A320(中)',200,2),(3,8,'波音737中',300,3),(4,8,'空客330宽',300,1),(5,9,'波音787大',500,1),(6,8,'波音738中',400,1),(7,5,'空客330宽',200,6),(8,8,'波音737中',200,6),(9,5,'空客320中',200,6),(10,5,'空客330宽',200,4),(11,8,'波音737中',400,4),(12,5,'空客320中',200,4),(13,9,'波音777大',400,4),(14,5,'空客319中',200,4),(15,5,'空客321中',200,4),(16,5,'空客330宽',200,4),(17,8,'波音737中',300,3),(18,5,'空客320中',20,8),(19,8,'波音737中',300,9),(20,5,'空客320中',200,10),(21,10,'庞巴迪CRJ900小',100,10),(22,5,'空客320中',200,2),(23,8,'波音737中',300,2);
/*!40000 ALTER TABLE `plane` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket` (
  `db_type` varchar(31) NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `is_back` bit(1) DEFAULT NULL,
  `is_endorse` bit(1) DEFAULT NULL,
  `ticket_count` int(11) NOT NULL,
  `ticket_price` double DEFAULT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  `flight_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKfju27cbcbl1w16qeora1r636q` (`flight_id`),
  CONSTRAINT `FKfju27cbcbl1w16qeora1r636q` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES ('TouristClassTicket',1,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',1),('SparpreisTicket',2,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',1),('FirstClassCabinTicket',3,'2018-01-03 17:00:06','','',8,18888,'头等舱票价',1),('TouristClassTicket',4,'2018-01-03 17:00:06','','',255,NULL,'经济舱票价',2),('SparpreisTicket',5,'2018-01-03 17:00:06','\0','\0',6,NULL,'特价票',2),('FirstClassCabinTicket',6,'2018-01-03 17:00:06','','',6,16666,'头等舱票价',2),('TouristClassTicket',7,'2018-01-03 17:00:06','','',100,NULL,'经济舱票价',3),('SparpreisTicket',8,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',3),('FirstClassCabinTicket',9,'2018-01-03 17:00:06','','',4,15888,'头等舱票价',3),('TouristClassTicket',10,'2018-01-03 17:00:06','','',190,NULL,'经济舱票价',4),('SparpreisTicket',11,'2018-01-03 17:00:06','\0','\0',10,NULL,'特价票',4),('FirstClassCabinTicket',12,'2018-01-03 17:00:06','','',3,16888,'头等舱票价',4),('TouristClassTicket',13,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',27),('SparpreisTicket',14,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',27),('FirstClassCabinTicket',15,'2018-01-03 17:00:06','','',8,17888,'头等舱票价',27),('TouristClassTicket',16,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',28),('SparpreisTicket',17,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',28),('FirstClassCabinTicket',18,'2018-01-03 17:00:06','','',8,19888,'头等舱票价',28),('TouristClassTicket',19,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',29),('SparpreisTicket',20,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',29),('FirstClassCabinTicket',21,'2018-01-03 17:00:06','','',8,15888,'头等舱票价',29),('TouristClassTicket',22,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',30),('SparpreisTicket',23,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',30),('FirstClassCabinTicket',24,'2018-01-03 17:00:06','','',8,13888,'头等舱票价',30),('TouristClassTicket',25,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',31),('SparpreisTicket',26,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',31),('FirstClassCabinTicket',27,'2018-01-03 17:00:06','','',8,11888,'头等舱票价',31),('TouristClassTicket',28,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',32),('SparpreisTicket',29,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',32),('FirstClassCabinTicket',30,'2018-01-03 17:00:06','','',8,19888,'头等舱票价',32),('TouristClassTicket',31,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',33),('SparpreisTicket',32,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',33),('FirstClassCabinTicket',33,'2018-01-03 17:00:06','','',8,18666,'头等舱票价',33),('TouristClassTicket',34,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',34),('SparpreisTicket',35,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',34),('FirstClassCabinTicket',36,'2018-01-03 17:00:06','','',8,19666,'头等舱票价',34),('TouristClassTicket',37,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',35),('SparpreisTicket',38,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',35),('FirstClassCabinTicket',39,'2018-01-03 17:00:06','','',8,14666,'头等舱票价',35),('TouristClassTicket',40,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',36),('SparpreisTicket',41,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',36),('FirstClassCabinTicket',42,'2018-01-03 17:00:06','','',8,23366,'头等舱票价',36),('TouristClassTicket',43,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',37),('SparpreisTicket',44,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',37),('FirstClassCabinTicket',45,'2018-01-03 17:00:06','','',8,23333,'头等舱票价',37),('TouristClassTicket',46,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',38),('SparpreisTicket',47,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',38),('FirstClassCabinTicket',48,'2018-01-03 17:00:06','','',8,15666,'头等舱票价',38),('TouristClassTicket',49,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',39),('SparpreisTicket',50,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',39),('FirstClassCabinTicket',51,'2018-01-03 17:00:06','','',8,17666,'头等舱票价',39),('TouristClassTicket',52,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',56),('SparpreisTicket',53,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',56),('FirstClassCabinTicket',54,'2018-01-03 17:00:06','','',8,14666,'头等舱票价',56),('TouristClassTicket',55,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',57),('SparpreisTicket',56,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',57),('FirstClassCabinTicket',57,'2018-01-03 17:00:06','','',8,10666,'头等舱票价',57),('TouristClassTicket',58,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',58),('SparpreisTicket',59,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',58),('FirstClassCabinTicket',60,'2018-01-03 17:00:06','','',8,16888,'头等舱票价',58),('TouristClassTicket',61,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',59),('SparpreisTicket',62,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',59),('FirstClassCabinTicket',63,'2018-01-03 17:00:06','','',8,15888,'头等舱票价',59),('TouristClassTicket',64,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',60),('SparpreisTicket',65,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',60),('FirstClassCabinTicket',66,'2018-01-03 17:00:06','','',8,16888,'头等舱票价',60),('TouristClassTicket',67,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',61),('SparpreisTicket',68,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',61),('FirstClassCabinTicket',69,'2018-01-03 17:00:06','','',8,14688,'头等舱票价',61),('TouristClassTicket',70,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',62),('SparpreisTicket',71,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',62),('FirstClassCabinTicket',72,'2018-01-03 17:00:06','','',8,15688,'头等舱票价',62),('TouristClassTicket',73,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',63),('SparpreisTicket',74,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',63),('FirstClassCabinTicket',75,'2018-01-03 17:00:06','','',8,16886,'头等舱票价',63),('TouristClassTicket',76,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',64),('SparpreisTicket',77,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',64),('FirstClassCabinTicket',78,'2018-01-03 17:00:06','','',8,14688,'头等舱票价',65),('TouristClassTicket',79,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',65),('SparpreisTicket',80,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',65),('FirstClassCabinTicket',81,'2018-01-03 17:00:06','','',8,12688,'头等舱票价',66),('TouristClassTicket',82,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',66),('SparpreisTicket',83,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',66),('FirstClassCabinTicket',84,'2018-01-03 17:00:06','','',8,13688,'头等舱票价',67),('TouristClassTicket',85,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',67),('SparpreisTicket',86,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',67),('FirstClassCabinTicket',87,'2018-01-03 17:00:06','','',8,15688,'头等舱票价',68),('TouristClassTicket',88,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',68),('SparpreisTicket',89,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',68),('FirstClassCabinTicket',90,'2018-01-03 17:00:06','','',8,14688,'头等舱票价',69),('TouristClassTicket',91,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',69),('SparpreisTicket',92,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',69),('FirstClassCabinTicket',93,'2018-01-03 17:00:06','','',8,19688,'头等舱票价',70),('TouristClassTicket',94,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',70),('SparpreisTicket',95,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',70),('FirstClassCabinTicket',96,'2018-01-03 17:00:06','','',8,16888,'头等舱票价',71),('TouristClassTicket',97,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',71),('SparpreisTicket',98,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',71),('FirstClassCabinTicket',99,'2018-01-03 17:00:06','','',8,17688,'头等舱票价',72),('TouristClassTicket',100,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',72),('SparpreisTicket',101,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',72),('FirstClassCabinTicket',102,'2018-01-03 17:00:06','','',8,16888,'头等舱票价',73),('TouristClassTicket',103,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',73),('SparpreisTicket',104,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',73),('FirstClassCabinTicket',105,'2018-01-03 17:00:06','','',8,14688,'头等舱票价',74),('TouristClassTicket',106,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',74),('SparpreisTicket',107,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',74),('FirstClassCabinTicket',108,'2018-01-03 17:00:06','','',8,13688,'头等舱票价',75),('TouristClassTicket',109,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',75),('SparpreisTicket',110,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',75),('FirstClassCabinTicket',111,'2018-01-03 17:00:06','','',8,14688,'头等舱票价',76),('TouristClassTicket',112,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',76),('SparpreisTicket',113,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',76),('FirstClassCabinTicket',114,'2018-01-03 17:00:06','','',8,16688,'头等舱票价',77),('TouristClassTicket',115,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',77),('SparpreisTicket',116,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',77),('FirstClassCabinTicket',117,'2018-01-03 17:00:06','','',8,17668,'头等舱票价',78),('TouristClassTicket',118,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',78),('SparpreisTicket',119,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',78),('FirstClassCabinTicket',120,'2018-01-03 17:00:06','','',8,15668,'头等舱票价',79),('TouristClassTicket',121,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',79),('SparpreisTicket',122,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',79),('FirstClassCabinTicket',123,'2018-01-03 17:00:06','','',8,13668,'头等舱票价',80),('TouristClassTicket',124,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',80),('SparpreisTicket',125,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',80),('FirstClassCabinTicket',126,'2018-01-03 17:00:06','','',8,19668,'头等舱票价',81),('TouristClassTicket',127,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',81),('SparpreisTicket',128,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',81),('FirstClassCabinTicket',129,'2018-01-03 17:00:06','','',8,14886,'头等舱票价',82),('TouristClassTicket',130,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',82),('SparpreisTicket',131,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',82),('FirstClassCabinTicket',132,'2018-01-03 17:00:06','','',8,15886,'头等舱票价',84),('TouristClassTicket',133,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',84),('SparpreisTicket',134,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',84),('FirstClassCabinTicket',135,'2018-01-03 17:00:06','','',8,19686,'头等舱票价',88),('TouristClassTicket',136,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',88),('SparpreisTicket',137,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',88),('FirstClassCabinTicket',138,'2018-01-03 17:00:06','','',8,14868,'头等舱票价',89),('TouristClassTicket',139,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',89),('SparpreisTicket',140,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',89),('FirstClassCabinTicket',141,'2018-01-03 17:00:06','','',8,13686,'头等舱票价',90),('TouristClassTicket',142,'2018-01-03 17:00:06','','',300,NULL,'经济舱票价',90),('SparpreisTicket',143,'2018-01-03 17:00:06','\0','\0',5,NULL,'特价票',90);
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `total_airline`
--

DROP TABLE IF EXISTS `total_airline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `total_airline` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `arrive_city_id` bigint(20) DEFAULT NULL,
  `set_out_city_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKm0m03hkcemic6ajygx2bl5v3t` (`arrive_city_id`),
  KEY `FK9xt2sc3vrviyg87yvxignrar` (`set_out_city_id`),
  CONSTRAINT `FK9xt2sc3vrviyg87yvxignrar` FOREIGN KEY (`set_out_city_id`) REFERENCES `city` (`id`),
  CONSTRAINT `FKm0m03hkcemic6ajygx2bl5v3t` FOREIGN KEY (`arrive_city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `total_airline`
--

LOCK TABLES `total_airline` WRITE;
/*!40000 ALTER TABLE `total_airline` DISABLE KEYS */;
INSERT INTO `total_airline` VALUES (1,2,1),(2,5,1),(3,3,1),(4,1,2),(5,1,5),(6,5,2),(7,4,2),(8,4,5),(9,4,1),(10,2,5),(11,3,4),(12,5,3),(13,1,4),(14,4,3),(15,3,5),(16,3,2);
/*!40000 ALTER TABLE `total_airline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) DEFAULT NULL,
  `phone_num` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin',NULL,'admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-04 11:23:18
