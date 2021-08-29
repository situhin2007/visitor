/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 5.7.33 : Database - visitor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`visitor` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `visitor`;

/*Table structure for table `doctors_lists` */

DROP TABLE IF EXISTS `doctors_lists`;

CREATE TABLE `doctors_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `reference_no` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `doctors_lists` */

insert  into `doctors_lists`(`id`,`name`,`mobile`,`department`,`designation`,`reference_no`,`created_at`,`updated_at`) values 
(1,'MD.RIPAN MIA','01746693552','Somthing','af hrfdgb sefsfsf','8066','2021-08-25 23:07:44','2021-08-25 17:07:44'),
(5,'ferf','12442424234','Somthing','sdfsdfs','3410','2021-08-25 17:07:53','2021-08-25 17:07:53');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `id_card_info` */

DROP TABLE IF EXISTS `id_card_info`;

CREATE TABLE `id_card_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_card_no` varchar(50) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `id_card_info` */

insert  into `id_card_info`(`id`,`id_card_no`,`serial_no`,`created_at`,`updated_at`) values 
(1,'1231242142443','353453346346346','2021-08-25 23:13:44','2021-08-25 17:13:44');

/*Table structure for table `ipd_admitted_patients` */

DROP TABLE IF EXISTS `ipd_admitted_patients`;

CREATE TABLE `ipd_admitted_patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `ward_no` varchar(50) NOT NULL,
  `cabin_no` varchar(50) NOT NULL,
  `seat_no` varchar(50) NOT NULL,
  `reference_no` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ipd_admitted_patients` */

insert  into `ipd_admitted_patients`(`id`,`name`,`mobile`,`ward_no`,`cabin_no`,`seat_no`,`reference_no`,`created_at`,`updated_at`) values 
(1,'MD.RIPAN MIA','01746693552','12','23','12','3438','2021-08-25 23:21:46','2021-08-25 17:21:46');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin','admin@gmail.com',NULL,'$2y$10$a1NJmRYXOCZrHPSZqUMGCuDr0rLBKC1/35wPpinjUjCaFm1meAcDa',NULL,'2021-08-17 17:41:54','2021-08-17 17:41:54');

/*Table structure for table `vendor_lists` */

DROP TABLE IF EXISTS `vendor_lists`;

CREATE TABLE `vendor_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `vendor_lists` */

/*Table structure for table `visitors` */

DROP TABLE IF EXISTS `visitors`;

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `reference_id` varchar(100) NOT NULL,
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `visited_date` date DEFAULT NULL,
  `reference_category` varchar(100) DEFAULT NULL,
  `visited_ref_name` varchar(100) DEFAULT NULL,
  `status` int(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `visitors` */

insert  into `visitors`(`id`,`name`,`mobile`,`reference_id`,`check_in`,`check_out`,`visited_date`,`reference_category`,`visited_ref_name`,`status`,`created_at`,`updated_at`) values 
(4,'MD.RIPAN MIA','MD.RIPAN MIA','3438','00:38','00:36','2021-08-31','patient','MD.RIPAN MIA',0,'2021-08-28 00:58:18','2021-08-27 18:58:18');

/*Table structure for table `visitors_history` */

DROP TABLE IF EXISTS `visitors_history`;

CREATE TABLE `visitors_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitors_id` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `visitors_history` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
