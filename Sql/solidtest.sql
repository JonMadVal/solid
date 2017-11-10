-- MySQL dump 10.16  Distrib 10.2.10-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: solidtest
-- ------------------------------------------------------
-- Server version	10.2.10-MariaDB-10.2.10+maria~xenial-log

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
-- Table structure for table `beneficios`
--

DROP TABLE IF EXISTS `beneficios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beneficios` (
  `idbeneficio` int(11) NOT NULL AUTO_INCREMENT,
  `beneficio` varchar(45) NOT NULL,
  `valorbeneficio` varchar(45) NOT NULL,
  PRIMARY KEY (`idbeneficio`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beneficios`
--

LOCK TABLES `beneficios` WRITE;
/*!40000 ALTER TABLE `beneficios` DISABLE KEYS */;
INSERT INTO `beneficios` VALUES (1,'Bono desempeño','10%'),(2,'Bono cumplimiento','2%'),(3,'Bono cumplimiento','2%'),(4,'Bono cumplimiento','2%'),(5,'Bono cumplimiento','2%'),(6,'Bono cumplimiento','2%'),(7,'Bono cumplimiento','2%');
/*!40000 ALTER TABLE `beneficios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `idempleados` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(100) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `salario` decimal(10,0) DEFAULT NULL,
  `jornada` varchar(45) DEFAULT NULL,
  `tipocontrato` varchar(45) DEFAULT NULL,
  `personas_idpersonas` int(11) NOT NULL,
  PRIMARY KEY (`idempleados`,`personas_idpersonas`),
  KEY `fk_empleados_personas_idx` (`personas_idpersonas`),
  CONSTRAINT `fk_empleados_personas` FOREIGN KEY (`personas_idpersonas`) REFERENCES `personas` (`idpersonas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'Desarrollador','desarrollo',1700000,'Diurna','termino indefinido',1);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `idpersonas` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(15) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `direccion` longtext DEFAULT NULL,
  `telefono` mediumtext DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpersonas`),
  UNIQUE KEY `documento_UNIQUE` (`documento`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (1,'8356434','Jonathan','Madrid','jonmadval@gmail.com','Calle 123','222 33 44','1984-02-18','m'),(2,'85155379','Carlos Miguel','Martes Vega','carlos.martes@handycommerce.com.co','Handy','3043474688','1985-12-26','Masculino');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsabilidades`
--

DROP TABLE IF EXISTS `responsabilidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsabilidades` (
  `idresponsabilidad` int(11) NOT NULL AUTO_INCREMENT,
  `responsabilidad` varchar(45) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idresponsabilidad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsabilidades`
--

LOCK TABLES `responsabilidades` WRITE;
/*!40000 ALTER TABLE `responsabilidades` DISABLE KEYS */;
INSERT INTO `responsabilidades` VALUES (1,'Desarrollo de app','Desarrollar aplicaciones bajo los requerimientos establecidos por el project manager');
/*!40000 ALTER TABLE `responsabilidades` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-10  9:51:18
