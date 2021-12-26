/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - escuela
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`escuela` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `escuela`;

/*Table structure for table `alumnos` */

DROP TABLE IF EXISTS `alumnos`;

CREATE TABLE `alumnos` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `appaterno` varchar(50) DEFAULT NULL,
  `apmaterno` varchar(50) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `carrera` int(3) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idalumno`),
  KEY `carrera` (`carrera`),
  CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carreras` (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

/*Data for the table `alumnos` */

insert  into `alumnos`(`idalumno`,`nombre`,`appaterno`,`apmaterno`,`sexo`,`carrera`,`email`) values 
(21,'Alexis','Morales','Gómez','M',1,'al221811729@gmail.com'),
(22,'edwin','campos','ramirez','M',4,'al221711105@gmail.com'),
(23,'Vannessa ','Gómez ','Mendoza','F',5,'vane@gmail.com'),
(24,'Erik ','Morales','Gómez','M',2,'erik@gmail.com'),
(25,'Brisa Abril','Gómez ','Velazquez','F',3,'brisa@gmail.com'),
(26,'Alexis','Morales','Gómez','M',1,'al221811729@gmail.com'),
(27,'edwin','campos','ramirez','M',4,'al221711105@gmail.com'),
(28,'Vannessa ','Gómez ','Mendoza','F',5,'vane@gmail.com'),
(29,'Erik ','Morales','Gómez','M',2,'erik@gmail.com'),
(30,'Brisa Abril','Gómez ','Velazquez','F',3,'brisa@gmail.com');

/*Table structure for table `carreras` */

DROP TABLE IF EXISTS `carreras`;

CREATE TABLE `carreras` (
  `idcarrera` int(3) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `carreras` */

insert  into `carreras`(`idcarrera`,`carrera`) values 
(1,'TI DSM'),
(2,'TI RT'),
(3,'MECATRONICA'),
(4,'ENFERMERIA'),
(5,'MANTENIMIENTO'),
(6,'NEGOCIOS');

/*Table structure for table `maestros` */

DROP TABLE IF EXISTS `maestros`;

CREATE TABLE `maestros` (
  `idmaestro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `appaterno` varchar(50) DEFAULT NULL,
  `apmaterno` varchar(50) DEFAULT NULL,
  `carrera` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `horario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idmaestro`),
  KEY `carrera` (`carrera`),
  CONSTRAINT `maestros_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carreras` (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `maestros` */

insert  into `maestros`(`idmaestro`,`nombre`,`appaterno`,`apmaterno`,`carrera`,`email`,`telefono`,`horario`) values 
(1,'Cristhian ','Zacarias','Diaz',1,'cris@gmail.com','1234567890','Lunes a Viernes'),
(2,'Omar ','Chong ','Lópezz',2,'omar@gmail.com','1234567890','Lunes a Viernes'),
(3,'Antonio ','Garcia ','Genaro',3,'tono@gmail.com','1234567890','Lunes, Miercoles y Sabado'),
(4,'Eduardo','Morales ','Villanueva',4,'lalo@gmail.com','12347890','Lunes y Miercoles'),
(5,'Marco Antonio','Morales ','Martinez',5,'tono2@gmail.com','1234567890','Lunes, Martes y Sabado'),
(6,'Alexis ','Morales ','Gómez',6,'alex@gmail.com','1234567890','Lunes y Sabado'),
(7,'Cesar Emmanuel','Mendoza ','Morales',5,'cesar@gmail.com','1234567890','Lunes, Martes, Miercoles y Sabado');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
