/*
SQLyog Ultimate v10.41 
MySQL - 5.5.5-10.1.9-MariaDB : Database - popperca
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `u1100374_popperca`;

/*Table structure for table `dev_banner` */

DROP TABLE IF EXISTS `dev_banner`;

CREATE TABLE `dev_banner` (
  `banner_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(200) DEFAULT NULL,
  `banner_status` char(1) DEFAULT '0',
  `banner_desc` text,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `dev_banner` */

insert  into `dev_banner`(`banner_id`,`banner_name`,`banner_status`,`banner_desc`) values (1,'banner A','0',NULL);

/*Table structure for table `dev_banner_images` */

DROP TABLE IF EXISTS `dev_banner_images`;

CREATE TABLE `dev_banner_images` (
  `bandet_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `bandet_banner_id` bigint(20) DEFAULT NULL,
  `bandet_file_name` text,
  `bandet_order` char(1) DEFAULT NULL,
  PRIMARY KEY (`bandet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `dev_banner_images` */

insert  into `dev_banner_images`(`bandet_id`,`bandet_banner_id`,`bandet_file_name`,`bandet_order`) values (1,1,'1_A_1.jpg',NULL),(2,1,'1_A_2.jpg',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
