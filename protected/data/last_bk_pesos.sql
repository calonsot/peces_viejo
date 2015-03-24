-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: usos_pesos
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.12.04.1

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
-- Table structure for table `carta_nacional`
--

DROP TABLE IF EXISTS `carta_nacional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_nacional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Nivel1` int(11) NOT NULL,
  `Nivel2` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_nacional`
--

LOCK TABLES `carta_nacional` WRITE;
/*!40000 ALTER TABLE `carta_nacional` DISABLE KEYS */;
INSERT INTO `carta_nacional` VALUES (1,'Pacífico zona 1',1,0,'2015-03-13 23:08:02'),(2,'Con potencial de desarrollo.',1,1,'2015-03-13 23:08:02'),(3,'En deterioro.',1,2,'2015-03-13 23:08:02'),(4,'Máximo aprovechamiento permisible.',1,3,'2015-03-13 23:08:02'),(5,'Pacífico zona 2',2,0,'2015-03-13 23:08:02'),(6,'Con potencial de desarrollo.',2,1,'2015-03-13 23:08:02'),(7,'En deterioro.',2,2,'2015-03-13 23:08:02'),(8,'Máximo aprovechamiento permisible.',2,3,'2015-03-13 23:08:02'),(9,'Sin datos.',2,4,'2015-03-13 23:08:02'),(10,'Pacífico zona 3 ',3,0,'2015-03-13 23:08:02'),(11,'Con potencial de desarrollo.',3,1,'2015-03-13 23:08:02'),(12,'En deterioro.',3,2,'2015-03-13 23:08:02'),(13,'Máximo aprovechamiento permisible.',3,3,'2015-03-13 23:08:02'),(14,'Sin datos.',3,5,'2015-03-13 23:08:02'),(15,'Golfo Mex y Caribe zona 1 ',4,0,'2015-03-13 23:08:02'),(16,'Con potencial de desarrollo.',4,1,'2015-03-13 23:08:02'),(17,'En deterioro.',4,2,'2015-03-13 23:08:02'),(18,'Máximo aprovechamiento permisible.',4,3,'2015-03-13 23:08:02'),(19,'Sin datos.',4,4,'2015-03-13 23:08:02'),(20,'Golfo Mex y Caribe zona 2 ',5,0,'2015-03-13 23:08:02'),(21,'Con potencial de desarrollo.',5,1,'2015-03-13 23:08:02'),(22,'En deterioro.',5,2,'2015-03-13 23:08:02'),(23,'Máximo aprovechamiento permisible.',5,3,'2015-03-13 23:08:02'),(24,'Sin datos.',5,4,'2015-03-13 23:08:02'),(25,'Golfo Mex y Caribe zona 3 ',6,0,'2015-03-13 23:08:02'),(26,'Con potencial de desarrollo.',6,1,'2015-03-13 23:08:02'),(27,'En deterioro.',6,2,'2015-03-13 23:08:02'),(28,'Máximo aprovechamiento permisible.',6,3,'2015-03-13 23:08:02'),(29,'Sin datos.',6,4,'2015-03-13 23:08:02');
/*!40000 ALTER TABLE `carta_nacional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distribucion`
--

DROP TABLE IF EXISTS `distribucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `distribucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distribucion`
--

LOCK TABLES `distribucion` WRITE;
/*!40000 ALTER TABLE `distribucion` DISABLE KEYS */;
INSERT INTO `distribucion` VALUES (1,'Golfo de México','2015-03-13 23:39:37'),(2,'Mar Caribe','2015-03-13 23:39:37'),(3,'Pacífico ','2015-03-13 23:39:37'),(4,'Fuera del país ','2015-03-13 23:39:37');
/*!40000 ALTER TABLE `distribucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_conservacion`
--

DROP TABLE IF EXISTS `estado_conservacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_conservacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `Nivel1` int(11) NOT NULL,
  `Nivel2` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_conservacion`
--

LOCK TABLES `estado_conservacion` WRITE;
/*!40000 ALTER TABLE `estado_conservacion` DISABLE KEYS */;
INSERT INTO `estado_conservacion` VALUES (1,'Casi amenazada',1,1,'2015-03-13 23:42:39'),(2,'En peligro',1,2,'2015-03-13 23:42:39'),(3,'En peligro crítico',1,3,'2015-03-13 23:42:39'),(4,'Lista roja IUCN',1,0,'2015-03-13 23:42:39'),(5,'permisible',1,4,'2015-03-13 23:42:39'),(6,'Vulnerable',1,5,'2015-03-13 23:42:39'),(7,'Apéndice I',2,1,'2015-03-13 23:42:39'),(8,'Apéndice II',2,2,'2015-03-13 23:42:39'),(9,'CITES',2,0,'2015-03-13 23:42:39'),(10,'Amenazada',3,1,'2015-03-13 23:42:39'),(11,'En peligro crítico',3,2,'2015-03-13 23:42:39'),(12,'Extinto en vida silvestre',3,3,'2015-03-13 23:42:39'),(13,'NOM-059-SEMARNAT-2010',3,0,'2015-03-13 23:42:39');
/*!40000 ALTER TABLE `estado_conservacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filtros`
--

DROP TABLE IF EXISTS `filtros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filtros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sesion` varchar(45) NOT NULL,
  `buscador_nombre_comun` varchar(45) DEFAULT NULL,
  `buscador_nombre_cientifico` varchar(45) DEFAULT NULL,
  `buscador_grupo` varchar(45) DEFAULT NULL,
  `buscador_estado_conservacion` varchar(45) DEFAULT NULL,
  `buscador_selectiva` varchar(45) DEFAULT NULL,
  `buscador_no_selectiva` varchar(45) DEFAULT NULL,
  `buscador_pacifico` varchar(45) DEFAULT NULL,
  `buscador_golfo` varchar(45) DEFAULT NULL,
  `buscador_caribe` varchar(45) DEFAULT NULL,
  `buscador_importado` varchar(45) DEFAULT NULL,
  `buscador_objetiva` varchar(45) DEFAULT NULL,
  `buscador_incidental` varchar(45) DEFAULT NULL,
  `buscador_deportiva` varchar(45) DEFAULT NULL,
  `buscador_fomento` varchar(45) DEFAULT NULL,
  `buscador_cultivada` varchar(45) DEFAULT NULL,
  `fecha_uso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filtros`
--

LOCK TABLES `filtros` WRITE;
/*!40000 ALTER TABLE `filtros` DISABLE KEYS */;
INSERT INTO `filtros` VALUES (13,'9ip70fv0frlp08li36q105atv3',NULL,NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-11-25 23:32:06'),(16,'d19ht9q9qu13h6f73bi64gabp5',NULL,'Ep',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-11-27 16:22:47'),(21,'5uemnmd40di9p0oebsq4drsp61',NULL,NULL,'11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-11-28 04:50:28'),(22,'id920ki2op4ekm1699m5dt5pg7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'2014-11-28 14:11:03'),(24,'g4is8m2o5eejkseveiobmvvqu2',NULL,NULL,'31',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-11-28 20:34:24'),(25,'u7f6vfm7taqpv1jmgddo7nd1a5',NULL,'dinosurios',NULL,'11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-11-28 23:24:35'),(27,'bfcideng1i7fk1gi6559u9sg82',NULL,NULL,'19','6',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,'1','0',NULL,'2014-12-02 23:16:38'),(28,'2b3efs8pvvp59ekc9eth31ene0',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-03 21:58:23'),(30,'sijbok1kfhrbk0rrajmsbt0vk1',NULL,NULL,'3',NULL,NULL,NULL,'0',NULL,'0',NULL,'1',NULL,NULL,NULL,NULL,'2014-12-05 20:42:11'),(31,'djab8he3l9nr1it94rg3ah5sf1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,'1',NULL,NULL,'1','1','2014-12-06 19:02:15'),(32,'k0mds8lacpgaj4orrvfngrp1a6','raya',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-07 05:38:19'),(33,'nsr822r7ah4sjpbfod5l6s81e1','','Paranthias colonus',NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,'1','1',NULL,NULL,NULL,'2014-12-07 22:56:18'),(34,'58otpsqnm0n4j2cru094653016',NULL,NULL,'13',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-08 18:02:15'),(35,'bdmap0f0nvcuf0vllspqa8ire5',NULL,'Xystreurys liolepis',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-08 20:06:25'),(36,'mtmbkqhgauljsce32upf3ub675','sierra golfo','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-10 19:18:47'),(37,'sca5cljs3gc4ho0njjs3d9s4q2','maji',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL,'2014-12-12 06:31:57'),(38,'9a2ar3eciih9el9dh7lggd6571','',NULL,'33',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-12 16:58:05'),(39,'g0ihk7kvrgggbkviicsajkvq85',NULL,'mackerel',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-15 13:41:57'),(40,'lamfv5tnccbl1tcshu3tnsb2h3',NULL,NULL,'31','1',NULL,NULL,NULL,'0',NULL,NULL,NULL,'1',NULL,NULL,NULL,'2014-12-15 16:27:57'),(41,'rdf5doicj759i42s2kccjkm1u7',NULL,NULL,NULL,NULL,'1',NULL,'1',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,'2014-12-15 21:22:00'),(42,'sl176s3va5oqvvacgmga74grf6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-17 22:19:41'),(43,'p0gv5f837jg2vb771363nejee6',NULL,NULL,NULL,'6',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-19 22:37:07'),(44,'piojqhqmh2iq8ivijqhl10tkq6','conejo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-21 13:50:20'),(45,'lep3brmpf9u93ougrecgf5gkv2',NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-23 16:54:47'),(46,'7ek9qitdjbtbn9nrlkncb3ach4',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-29 00:08:22'),(47,'fsfl9dbv97ulbcaf2eo1f3l7c3','bass',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-29 09:19:47'),(48,'runlf6hl3gbluioforr2n6r1k0','BERRUGATA RONCADORA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-29 17:15:57'),(49,'rmhvupop436dm608jp6jchttv1',NULL,'Synodus lacertinus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-30 12:01:36'),(50,'svnjisfdlqgu4m3jhj6eo2rsb5',NULL,NULL,NULL,NULL,NULL,'0',NULL,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-30 17:06:40'),(51,'2h2ftr9k92pj0ckgetom322km3','lisa rayada',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-30 22:50:41'),(52,'kosrgr13ijjqjqnacd0g88mf11',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-30 23:01:51'),(53,'3ror21bq1c7qg7kf69ika2v486','',NULL,'11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-31 01:29:09'),(54,'rfj4idu03mfii22at0ndpkc315',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-31 04:32:05'),(55,'n4asbm46m6hfo6jnj70qmkff11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-31 10:57:01'),(56,'9aiqkfbnlgon4dogatqg4tnal1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,'2014-12-31 16:09:54'),(57,'guvuvdttl9p7t5icilgkcvd412','Trucha',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-01 00:09:29'),(58,'0h27u6msllu491qf1g6a19q936',NULL,NULL,'32',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-01 21:08:02'),(59,'9ekuau4lttr495s7en5jq7b7g5',NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-01 22:00:43'),(60,'35427j046ff8fgcrleh8mu0e34','',NULL,'34',NULL,NULL,NULL,'1','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-02 20:03:39'),(61,'auh5m9l9atmnpv2jelbqmb8kf1','erizo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-05 03:34:46'),(62,'vtb2a67tp15o72ke9b1k5o9i27',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-07 04:21:40'),(63,'g0qjqk5feg7dqj3evbk95hvt41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-07 16:38:55'),(64,'9o5dcpok1vng78nq6u09u25407',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-07 17:28:28'),(69,'idtu04jkl14lq3ltbk02dtc9c5',NULL,NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-08 00:45:30'),(70,'9thtoqe5c7go5li9v551lh9qn7',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-09 01:04:22'),(72,'b4c1baffqv52aj4sour2c1ire2','tilapia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-12 05:33:10'),(74,'gle45bgu61c30h6m91h2eo43m4','carpa',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-12 21:52:50'),(75,'rgk1uloigb56aqtfgc4c2mmd63',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-13 15:29:59'),(76,'vduprsglsveq2ces7960o7hlj5','',NULL,'50',NULL,NULL,NULL,'0','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-13 18:39:57'),(77,'j8fd3f4ek5aib0d3o1h7s7mjo7',NULL,NULL,'33',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2015-01-13 23:57:23'),(78,'ageklj02ukotqk47fnjefsl8o4',NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-14 01:40:47'),(79,'eb20nqun799qp2t24bfnlptl56',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-14 02:58:10'),(80,'u5ognehgffr08j7jle2hmutsa5','chabelita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-14 04:28:37'),(81,'ukto3og2dsp6miij5nh5mtusp7',NULL,NULL,NULL,'9',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-14 05:14:18'),(82,'ph8378ec3b1v3q6esgjp8sdtf2',NULL,NULL,'48',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-15 06:17:24'),(83,'nhq7qin60htnu79b2o0jasro07','Huachinango',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-16 15:33:07'),(84,'v6tvv7cse7j9bilri22bmrc413',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-16 18:28:07'),(85,'cab95v16j57fhadh4b0e7hmqv1',NULL,'Cetengraulis mysticetus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,'2015-01-16 20:45:57'),(86,'hb7etoer2f7qq4c9tj7jovj9k3',NULL,NULL,'50',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-16 20:54:13'),(87,'0umpm2n33vbkndne0807l06ee3',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-16 21:34:01'),(88,'dfi8d56d29thdh08ng8r3fk7e2',NULL,NULL,NULL,NULL,NULL,NULL,'1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-24 16:16:45'),(89,'levj81m322k9fi8jp1tiahdh14',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-24 19:39:41'),(90,'fqbo0302nn4818l5dcn6i9ejv6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,'2015-01-24 21:18:26'),(92,'hsvki1kal7tfga3kql0pintaq0',NULL,' holoturoideos',NULL,'9',NULL,NULL,NULL,NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,'2015-01-26 18:04:53'),(93,'psut58ivolsaeb9jn3dtdsmp02',NULL,'Paralabrax clarhratus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-26 19:29:04'),(94,'jg4ja82hknehv2vpt7275204g4','betta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-26 23:15:21'),(95,'k7den307jcqpk6lv5cbc4ed780',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-27 01:56:18'),(96,'pb2kf74sgsav2a4cro4o2u2n01','robalo',NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-27 21:39:19'),(97,'1s9irvq20trrf1t68nhpvfthj2','sabalo','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-27 22:35:53'),(98,'nf1mol7eqhsb140i8fsolkilt7','bagre',NULL,'5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-28 00:17:53'),(100,'beqov06kr03432gveep8k9rb76','BONITO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-28 14:22:37'),(101,'afscsfl7jn5k3f7i8dv6avgih5',NULL,NULL,'25',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-29 17:15:02'),(102,'isar0kp7am70npcar6n6htde53','pargo',NULL,'3',NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-29 18:42:20'),(103,'clt9fe3t9a1trhh1lr4bd0kqt3','barrilete',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-31 02:08:01'),(105,'d4bic40mgm2gfn8h16tfdp4bm0',NULL,NULL,'25','',NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,'0','2015-01-31 02:54:58'),(106,'o6si121ovd2oe9ofamd25hcpk3',NULL,NULL,'25',NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-31 03:12:18'),(107,'h4ai7apbsgu14lq86qv68c7f35',NULL,NULL,'25',NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-01-31 03:59:45'),(108,'cbukabgib5i09trdghnjhehni2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-01 00:13:16'),(109,'b00uautubhevbgjmkss6vc75i1','rubio',NULL,'46','7',NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-03 19:59:33'),(110,'4lg2165or84j2u7h31galagcg1',NULL,'Euthynnus lineatus',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-04 00:07:18'),(111,'a574s8pj6h3qp8l6h3kqq7uqo3','pulpo',NULL,'',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-04 00:14:43'),(113,'abji0ldujaqndq45c4ke4ni625','Robalo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-04 01:26:33'),(114,'7l3u4aq8aqfi062gfpc24028j5',NULL,'Centropomus undecimalis',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-04 13:23:22'),(115,'srb18eiugdhi0po257hentvd96',NULL,NULL,NULL,NULL,NULL,NULL,'1','1',NULL,NULL,NULL,NULL,NULL,NULL,'1','2015-02-04 15:01:44'),(116,'gkjud1jo0rml15nkcb6qoulab3',NULL,'Xystreurys liolepis',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-04 16:42:40'),(117,'eurpjgmoa8hp0g9t9ejoah6uc0',NULL,NULL,NULL,NULL,'0','0',NULL,'0','0',NULL,NULL,'1','0',NULL,'1','2015-02-04 21:25:19'),(118,'c8e4ogohdnbj5v20k3lpeue9j6',NULL,NULL,'',NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-04 21:26:06'),(119,'tlt7bg5dgibjuu7q71shh2laf1',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-04 23:52:38'),(121,'rfn3s6075dasbv4jfegh7jfkb5',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-05 23:12:41'),(122,'t8vuccm5dt0i94rlr4036lnds5',NULL,NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-02-06 16:54:08'),(142,'o7o5n6nfp4ijfdkmjq0851ar45',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-03-03 20:34:46');
/*!40000 ALTER TABLE `filtros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (1,'Anchovetas ','2015-03-13 23:36:29'),(2,'Anguilas  ','2015-03-13 23:36:29'),(3,'Atunes  ','2015-03-13 23:36:29'),(4,'Atunes ','2015-03-13 23:36:29'),(5,'Bacalaos','2015-03-13 23:36:29'),(6,'Bagres','2015-03-13 23:36:29'),(7,'Baquetas','2015-03-13 23:36:29'),(8,'Barriletes','2015-03-13 23:36:29'),(9,'Berrugatas','2015-03-13 23:36:29'),(10,'Besugos','2015-03-13 23:36:29'),(11,'Bonitos','2015-03-13 23:36:29'),(12,'Botetes ','2015-03-13 23:36:29'),(13,'cabrillas','2015-03-13 23:36:29'),(14,'Cabrillas','2015-03-13 23:36:29'),(15,'Cazones ','2015-03-13 23:36:29'),(16,'Chiles','2015-03-13 23:36:29'),(17,'Cintillas','2015-03-13 23:36:29'),(18,'Corvinas ','2015-03-13 23:36:29'),(19,'Dorados','2015-03-13 23:36:29'),(20,'Escama','2015-03-13 23:36:29'),(21,'Esmedregales','2015-03-13 23:36:29'),(22,'Esturiones','2015-03-13 23:36:29'),(23,'Gallinetas','2015-03-13 23:36:29'),(24,'Garropas','2015-03-13 23:36:29'),(25,'Huachinangos','2015-03-13 23:36:29'),(26,'Jureles ','2015-03-13 23:36:29'),(27,'Lebranchas','2015-03-13 23:36:29'),(28,'Lenguados ','2015-03-13 23:36:29'),(29,'Lenguados','2015-03-13 23:36:29'),(30,'Lisas','2015-03-13 23:36:29'),(31,'Macarelas','2015-03-13 23:36:29'),(32,'Mantarrayas ','2015-03-13 23:36:29'),(33,'Marlines ','2015-03-13 23:36:29'),(34,'Meros','2015-03-13 23:36:29'),(35,'Mojarras ','2015-03-13 23:36:29'),(36,'Pámpanos','2015-03-13 23:36:29'),(37,'Papagallos','2015-03-13 23:36:29'),(38,'Pargos','2015-03-13 23:36:29'),(39,'Peces espada','2015-03-13 23:36:29'),(40,'Peces importados ','2015-03-13 23:36:29'),(41,'Peces importados','2015-03-13 23:36:29'),(42,'Peces vela','2015-03-13 23:36:29'),(43,'Petos','2015-03-13 23:36:29'),(44,'Piernas','2015-03-13 23:36:29'),(45,'Rayas','2015-03-13 23:36:29'),(46,'Robalos','2015-03-13 23:36:29'),(47,'Rocotes','2015-03-13 23:36:29'),(48,'Roncos','2015-03-13 23:36:29'),(49,'Rubia-Villajaibas','2015-03-13 23:36:29'),(50,'Rubios','2015-03-13 23:36:29'),(51,'Sábalos','2015-03-13 23:36:29'),(52,'Sardinas','2015-03-13 23:36:29'),(53,'Sierras','2015-03-13 23:36:29'),(54,'Tiburones','2015-03-13 23:36:29'),(55,'Totoaba ','2015-03-13 23:36:29');
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peces`
--

DROP TABLE IF EXISTS `peces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peces` (
  `especie_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_comun` varchar(255) DEFAULT NULL,
  `nombre_ingles` varchar(255) DEFAULT NULL,
  `nombre_cientifico` varchar(255) NOT NULL,
  `clase` varchar(255) DEFAULT NULL,
  `orden` varchar(255) DEFAULT NULL,
  `familia` varchar(255) DEFAULT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `nacional_Importado` varchar(255) DEFAULT NULL,
  `tipo_imagen` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `triptico` varchar(255) DEFAULT NULL,
  `talla_captura` varchar(255) DEFAULT NULL,
  `selectiva_noselectiva` varchar(255) DEFAULT NULL,
  `arte_pesca` longtext,
  `tipo_veda_id` int(11) DEFAULT NULL,
  `veda` varchar(255) NOT NULL COMMENT 'Meses separados por coma',
  `generalidades` longtext,
  `descripcion_distribucion` varchar(255) DEFAULT NULL,
  `cultivado_capturado` varchar(255) DEFAULT NULL,
  `comercio` varchar(255) DEFAULT NULL,
  `pais_importacion` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recomendacion` int(11) NOT NULL DEFAULT '0',
  `peso` varchar(255) DEFAULT NULL,
  `peor_peso` int(11) DEFAULT NULL,
  PRIMARY KEY (`especie_id`),
  KEY `fk_peces_tipo_veda_idx` (`tipo_veda_id`),
  KEY `fk_peces_grupo1_idx` (`grupo_id`),
  CONSTRAINT `fk_peces_grupo1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_peces_tipo_veda` FOREIGN KEY (`tipo_veda_id`) REFERENCES `tipo_veda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peces`
--

LOCK TABLES `peces` WRITE;
/*!40000 ALTER TABLE `peces` DISABLE KEYS */;
/*!40000 ALTER TABLE `peces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pez_carta_nacional`
--

DROP TABLE IF EXISTS `pez_carta_nacional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pez_carta_nacional` (
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `peces_especie_id` int(11) NOT NULL,
  `carta_nacional_id` int(11) NOT NULL,
  PRIMARY KEY (`peces_especie_id`,`carta_nacional_id`),
  KEY `fk_pez_carta_nacional_carta_nacional1_idx` (`carta_nacional_id`),
  CONSTRAINT `fk_pez_carta_nacional_carta_nacional1` FOREIGN KEY (`carta_nacional_id`) REFERENCES `carta_nacional` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pez_carta_nacional_peces1` FOREIGN KEY (`peces_especie_id`) REFERENCES `peces` (`especie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pez_carta_nacional`
--

LOCK TABLES `pez_carta_nacional` WRITE;
/*!40000 ALTER TABLE `pez_carta_nacional` DISABLE KEYS */;
/*!40000 ALTER TABLE `pez_carta_nacional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pez_distribucion`
--

DROP TABLE IF EXISTS `pez_distribucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pez_distribucion` (
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `peces_especie_id` int(11) NOT NULL,
  `distribucion_id` int(11) NOT NULL,
  PRIMARY KEY (`peces_especie_id`,`distribucion_id`),
  KEY `fk_pez_distribucion_distribucion1_idx` (`distribucion_id`),
  CONSTRAINT `fk_pez_distribucion_distribucion1` FOREIGN KEY (`distribucion_id`) REFERENCES `distribucion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pez_distribucion_peces1` FOREIGN KEY (`peces_especie_id`) REFERENCES `peces` (`especie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pez_distribucion`
--

LOCK TABLES `pez_distribucion` WRITE;
/*!40000 ALTER TABLE `pez_distribucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `pez_distribucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pez_estado_conservacion`
--

DROP TABLE IF EXISTS `pez_estado_conservacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pez_estado_conservacion` (
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `peces_especie_id` int(11) NOT NULL,
  `estado_conservacion_id` int(11) NOT NULL,
  PRIMARY KEY (`peces_especie_id`,`estado_conservacion_id`),
  KEY `fk_pez_estado_conservacion_estado_conservacion1_idx` (`estado_conservacion_id`),
  CONSTRAINT `fk_pez_estado_conservacion_estado_conservacion1` FOREIGN KEY (`estado_conservacion_id`) REFERENCES `estado_conservacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pez_estado_conservacion_peces1` FOREIGN KEY (`peces_especie_id`) REFERENCES `peces` (`especie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pez_estado_conservacion`
--

LOCK TABLES `pez_estado_conservacion` WRITE;
/*!40000 ALTER TABLE `pez_estado_conservacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `pez_estado_conservacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pez_tipo_capturas`
--

DROP TABLE IF EXISTS `pez_tipo_capturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pez_tipo_capturas` (
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `peces_especie_id` int(11) NOT NULL,
  `tipo_capturas_id` int(11) NOT NULL,
  PRIMARY KEY (`peces_especie_id`,`tipo_capturas_id`),
  KEY `fk_pez_tipo_capturas_tipo_capturas1_idx` (`tipo_capturas_id`),
  CONSTRAINT `fk_pez_tipo_capturas_peces1` FOREIGN KEY (`peces_especie_id`) REFERENCES `peces` (`especie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pez_tipo_capturas_tipo_capturas1` FOREIGN KEY (`tipo_capturas_id`) REFERENCES `tipo_capturas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pez_tipo_capturas`
--

LOCK TABLES `pez_tipo_capturas` WRITE;
/*!40000 ALTER TABLE `pez_tipo_capturas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pez_tipo_capturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_capturas`
--

DROP TABLE IF EXISTS `tipo_capturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_capturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_capturas`
--

LOCK TABLES `tipo_capturas` WRITE;
/*!40000 ALTER TABLE `tipo_capturas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_capturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_veda`
--

DROP TABLE IF EXISTS `tipo_veda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_veda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_veda`
--

LOCK TABLES `tipo_veda` WRITE;
/*!40000 ALTER TABLE `tipo_veda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_veda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-13 20:29:21
