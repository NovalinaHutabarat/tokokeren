/*
SQLyog Community v11.51 (32 bit)
MySQL - 5.5.36 : Database - jadwalmakan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jadwalmakan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jadwalmakan`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `username` varchar(30) NOT NULL COMMENT 'usename user dan admin',
  `password` char(30) DEFAULT NULL COMMENT 'pass user dan admin',
  `is_admin` tinyint(1) DEFAULT NULL COMMENT 'admin',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `account` */

insert  into `account`(`username`,`password`,`is_admin`) values ('admin','admin',1),('erjan','sirait',0),('fanny','togi',0),('richa','hosea',0),('veronika','marthin',0),('yona','agung',0);

/*Table structure for table `tabel_jadwal` */

DROP TABLE IF EXISTS `tabel_jadwal`;

CREATE TABLE `tabel_jadwal` (
  `tanggal` datetime NOT NULL COMMENT 'tanggal',
  `sesi` varchar(30) NOT NULL COMMENT 'sesi',
  `lauk` varchar(30) DEFAULT NULL COMMENT 'lauk',
  `sayur` varchar(30) DEFAULT NULL COMMENT 'sayur',
  `minuman` varchar(30) DEFAULT NULL COMMENT 'minuman',
  `alternatif_1` varchar(30) DEFAULT NULL COMMENT 'alternatif 1',
  `alternatif_2` varchar(30) DEFAULT NULL COMMENT 'alternatif 2',
  PRIMARY KEY (`tanggal`,`sesi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tabel_jadwal` */

insert  into `tabel_jadwal`(`tanggal`,`sesi`,`lauk`,`sayur`,`minuman`,`alternatif_1`,`alternatif_2`) values ('2014-10-20 07:00:00','Breakfast','Telur','Kol','Teh manis','Ikan tongkol+ sambal','Tempe goreng'),('2014-10-20 12:00:00','Lunch','Capcai','Brokoli','Jus jeruk','Telur','Tahu gulai'),('2014-10-20 19:00:00','Dinner','Tahu gulai','Sayur bayam','Bandrek','Ayam goreng','Ikan teri + sambal'),('2014-10-21 07:00:00','Breakfast','Capcai','Kol','Air putih','Tempe goreng + sambal','Tahu gulai'),('2014-10-21 12:00:00','Lunch','Telur','Brokoli','Air putih','Tahu goreng','Ayam gulai'),('2014-10-21 19:00:00','Dinner','Ayam gulai','Sawi putih','Teh manis','Telur','Ikan tongkol + sambal'),('2014-10-22 07:00:00','Breakfast','Rendang','Sayur manis','Air putih','Ikan mas + sambal','Tempe goreng'),('2014-10-22 12:00:00','Lunch','Ikan tongkol + sambal','Sayur pahit','Air putih','Capcai','Tahu goreng'),('2014-10-22 19:00:00','Dinner','Ikan mas + sambal','Bokcai','Bandrek','Soto','Telur'),('2014-10-23 07:00:00','Breakfast','Ayam goreng','Kangkung','Air putih','Ikan teri + sambal','Ayam goreng'),('2014-10-23 12:00:00','Lunch','Ikan teri + sambal','Buncis','Air putih','Ikan nila + sambal','Capcai'),('2014-10-23 19:00:00','Dinner','Ikan nila + sambal','Kacang panjang','Jus jeruk','Rendang','Telur'),('2014-10-24 07:00:00','Breakfast','Capcai','Wortel','Air putih','Ikan mas arsik','Ikan mas + sambal'),('2014-10-24 12:00:00','Lunch','Ikan lele','Bunga kol','Es doger','Capcai','Tempe goreng'),('2014-10-24 19:00:00','Dinner','Tahu gulai','Sayur bayam','Air putih','Ayam gulai','Ikan teri + sambal'),('2014-10-25 07:00:00','Breakfast','Nasi goreng','Timun','Air  putih','Soto','Capcai'),('2014-10-25 12:00:00','Lunch','Ayam goreng','Sayur pahit','Es buah','Telur','Tahu gulai'),('2014-10-27 07:00:00','Breakfast','Ikan teri + sambal','Bunga kol','Air putih','Telur ','Ikan tongkol + sambal'),('2014-10-27 12:00:00','Lunch','Ikan tongkol + sambal','Sawi','Air putih','Tahu goreng','Ikan mas + sambal'),('2014-10-27 19:00:00','Dinner','Sup','Terong','Bandrek','Tempe goreng','Telur'),('2014-10-28 07:00:00','Breakfast','Telur','Timun','Teh manis','Ikan nila + goreng','Ikan teri + sambal'),('2014-10-28 12:00:00','Lunch','Ikan mas goreng + sambal','Kangkung','Air putih','Tempe goreng','Tahu gulai'),('2014-10-28 19:00:00','Dinner','Ayam gulai','Kacang panjang','Air putih','Telur','Ikan mas + sambal'),('2014-10-29 07:00:00','Breakfast','Mie goreng + telur','Timun','Air putih','Ikan tongkol + sambal','Tempe goreng'),('2014-10-29 08:04:11','Dinner','Soto','Sayur pahit','Bandrek','Ikan teri + sambal','Tahu + sambal'),('2014-10-29 12:00:00','Lunch','Ikan lele + sambal','Buncis + wortel','Air putih','Telur','Ikan nila + sambal'),('2014-10-30 07:00:00','Breakfast','Telur','Bokcai','Air putih','Ikan mas arsik','Tahu gulai'),('2014-10-30 12:00:00','Lunch','Rendang','Kol','Air putih','Ayam gulai','Telur'),('2014-10-30 19:00:00','Dinner','Ikan nila goreng + sambal','Sayur manis','Air putih','Tempe goreng','Ikan teri + sambal'),('2014-10-31 07:00:00','Breakfast','Tahu goreng + sambal','Timun','Teh manis','Ayam goreng','Telur'),('2014-10-31 12:00:00','Lunch','Soto','Bunga kol + wortel','Air putih','Ikan tongkol + sambal','Rendang'),('2014-10-31 19:00:00','Dinner','Ikan tongkol + sambal','Buncis + wortel','Air putih','Tahu + sambal','Ikan nila + sambal'),('2014-11-01 07:00:00','Breakfast','Nasi goreng + telur','Timun','Air putih','Ikan teri + sambal + nasi puti','Telur + nasi putih'),('2014-11-01 12:00:00','Lunch','Ayam goreng','Bayam','Air putih','Tempe goreng','Ikan teri + sambal');

/*Table structure for table `tabel_perubahan` */

DROP TABLE IF EXISTS `tabel_perubahan`;

CREATE TABLE `tabel_perubahan` (
  `id` char(30) NOT NULL COMMENT 'id user',
  `tanggal` datetime NOT NULL COMMENT 'tanggal perubahan',
  `sesi` varchar(30) NOT NULL COMMENT 'sesi perubahan',
  `lauk` varchar(30) DEFAULT NULL COMMENT 'lauk perubahan',
  PRIMARY KEY (`id`,`tanggal`,`sesi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tabel_perubahan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
