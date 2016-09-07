-- MySQL dump 10.13  Distrib 5.7.13, for Linux (x86_64)
--
-- Host: localhost    Database: colysee
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

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
-- Table structure for table `billets`
--

DROP TABLE IF EXISTS `billets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billets` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `prix` varchar(45) NOT NULL,
  `reservations_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billets`
--

LOCK TABLES `billets` WRITE;
/*!40000 ALTER TABLE `billets` DISABLE KEYS */;
INSERT INTO `billets` VALUES (1,'Plein','26',5),(2,'Plein','41',1),(3,'Etudiants ','19',2),(4,'Etudiants ','32',1),(5,'Etudiants ','28',4),(6,'Enfants ','34',5),(7,'Etudiants ','41',5),(8,'Etudiants ','19',3),(9,'Plein','13',5),(10,'Etudiants ','20',1);
/*!40000 ALTER TABLE `billets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `carte_fidelite` tinyint(1) DEFAULT NULL,
  `reduction` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Masson','Juliette',1,0.50),(2,'Faubert','Sébastien',0,0.00),(3,'Dubeau','Sophie',0,0.00),(4,'Soucy','Victor',1,0.50),(5,'Lacaille','Aline',0,0.00),(6,'Michaud','Adrien',1,0.50),(7,'Tougas','Eric',1,0.50),(8,'Boisvert','Julien',0,0.00),(9,'Rivière','Olivier',1,0.50),(10,'Lacroix','Thibault',1,0.50),(11,'Lamy','Justine',0,0.00),(12,'Grimard','Corrine',1,0.50),(13,'Daviau','Laetitia',1,0.50),(14,'Demers','Alexis',0,0.00),(15,'Tritan','David',1,0.50);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `spectaclesId` int(11) unsigned NOT NULL,
  `clientsId` varchar(50) NOT NULL,
  `nombreBillets` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (1,5,'4',2),(2,3,'2',3),(3,2,'1',4),(4,1,'3',5),(5,4,'4',6);
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salles`
--

DROP TABLE IF EXISTS `salles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_sieges` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salles`
--

LOCK TABLES `salles` WRITE;
/*!40000 ALTER TABLE `salles` DISABLE KEYS */;
INSERT INTO `salles` VALUES (1,45),(2,50),(3,55),(4,60),(5,65);
/*!40000 ALTER TABLE `salles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spectacles`
--

DROP TABLE IF EXISTS `spectacles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spectacles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(50) NOT NULL,
  `artiste` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `duree` time NOT NULL,
  `salle_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spectacles`
--

LOCK TABLES `spectacles` WRITE;
/*!40000 ALTER TABLE `spectacles` DISABLE KEYS */;
INSERT INTO `spectacles` VALUES (1,'Truth About Love Tour','Pink','Musique','Variété pop internationale','2016-10-10','21:00:00','02:30:00',5),(2,'Kean','Cie « Les scènes de l’Oise »','Théâtre','Drame','2017-02-25','20:30:00','02:00:00',4),(3,'Origines','Baptiste Lecapelain','One Man Show','Humour','2016-10-09','02:00:00','00:00:03',0),(4,'L\'attrape-coeur','Christophe Maé','Concert','Folk','2017-05-05','20:00:00','02:30:00',0),(5,'Le fascinateur','Messmer','One Man Show','Hypnose','2017-03-09','20:00:00','02:00:00',0),(6,'Hard Candy','Madonna','Concert','Variété Pop Internationnale','2018-12-02','17:00:00','02:30:00',0),(7,'Femme Fatale Tour','Britney Spears','Concert','Variété Pop Internationnale','2016-10-10','21:00:00','02:00:00',0),(8,'Berceuse','Rondoudou','Concert','Variété Pop Japonnaise','2017-05-06','19:00:00','02:00:00',0),(9,'Je t\'ai rencontré par hasard','Pietragalla & Derouault','Danse','Contemporaine','2017-03-17','18:00:00','02:45:00',0);
/*!40000 ALTER TABLE `spectacles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-06 10:27:02
