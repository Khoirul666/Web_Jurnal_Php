/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 8.0.30 : Database - perpustakaan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`perpustakaan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `perpustakaan`;

/*Table structure for table `jurnal` */

DROP TABLE IF EXISTS `jurnal`;

CREATE TABLE `jurnal` (
  `id_jurnal` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `image_file` varchar(255) DEFAULT NULL,
  `status` enum('belum','konfirmasi') DEFAULT 'belum',
  PRIMARY KEY (`id_jurnal`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `jurnal` */

insert  into `jurnal`(`id_jurnal`,`id_user`,`judul`,`tahun`,`nama_file`,`image_file`,`status`) values 
(1,2,'asas',2091,'../Assets/backend/file/2_20231217133858_764710493.pdf',NULL,'konfirmasi'),
(3,2,'asasasxxx',2032,'../Assets/backend/file/2_20231217144551_1713138950.pdf',NULL,'belum');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_users` int NOT NULL AUTO_INCREMENT,
  `nim_nidn` int DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users` */

insert  into `users`(`id_users`,`nim_nidn`,`username`,`password`,`role`) values 
(1,12345678,'admin@gmail.com','admin','admin'),
(2,666,'user@gmail.com','user','user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
