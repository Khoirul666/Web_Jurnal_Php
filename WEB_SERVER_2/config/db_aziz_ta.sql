/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 8.0.30 : Database - db_aziz_ta
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_aziz_ta` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `db_aziz_ta`;

/*Table structure for table `laporan` */

DROP TABLE IF EXISTS `laporan`;

CREATE TABLE `laporan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gmbr` varchar(255) DEFAULT NULL,
  `nm_pelapor` varchar(255) DEFAULT NULL,
  `tlp` varchar(255) DEFAULT NULL,
  `lokasi` text,
  `tanggal` date DEFAULT NULL,
  `isi` text,
  `jenis` varchar(255) DEFAULT NULL,
  `status` enum('menunggu','ditolak','diproses') DEFAULT 'menunggu',
  `is_new` enum('true') DEFAULT 'true',
  `is_read` enum('true','false') DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `laporan` */

insert  into `laporan`(`id`,`gmbr`,`nm_pelapor`,`tlp`,`lokasi`,`tanggal`,`isi`,`jenis`,`status`,`is_new`,`is_read`) values 
(1,'20230801162910.jpeg','a hu uaba','+6285706291308','-7.8330804,112.0474528','2023-08-01','HjHah','Laporan Kejadian','menunggu','true','false');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
