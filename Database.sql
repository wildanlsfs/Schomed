/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.25-MariaDB : Database - schomed
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`schomed` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `schomed`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(32) DEFAULT NULL,
  `Email` varchar(32) DEFAULT NULL,
  `Pass` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDAdmin` int(11) DEFAULT NULL,
  `JudulArtikel` varchar(128) DEFAULT NULL,
  `Isi` varchar(8192) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ID_Admin_1` (`IDAdmin`),
  CONSTRAINT `FK_ID_Admin_1` FOREIGN KEY (`IDAdmin`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `artikel` */

/*Table structure for table `auth_siswa` */

DROP TABLE IF EXISTS `auth_siswa`;

CREATE TABLE `auth_siswa` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(64) DEFAULT NULL,
  `Pass` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `auth_siswa` */

/*Table structure for table `auth_tentor` */

DROP TABLE IF EXISTS `auth_tentor`;

CREATE TABLE `auth_tentor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(64) DEFAULT NULL,
  `Pass` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `auth_tentor` */

/*Table structure for table `jadwal` */

DROP TABLE IF EXISTS `jadwal`;

CREATE TABLE `jadwal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDSiswa` int(11) DEFAULT NULL,
  `IDTentor` int(11) DEFAULT NULL,
  `Mapel` varchar(64) DEFAULT NULL,
  `Kuota` int(11) DEFAULT NULL,
  `Program` varchar(32) DEFAULT NULL,
  `Status` varchar(64) DEFAULT 'Belum Selesai',
  PRIMARY KEY (`ID`),
  KEY `FK_ID_Siswa_3` (`IDSiswa`),
  KEY `FK_ID_Tentor_4` (`IDTentor`),
  CONSTRAINT `FK_ID_Siswa_3` FOREIGN KEY (`IDSiswa`) REFERENCES `auth_siswa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_ID_Tentor_4` FOREIGN KEY (`IDTentor`) REFERENCES `auth_tentor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jadwal` */

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDTentor` int(11) DEFAULT NULL,
  `Mapel1` varchar(64) DEFAULT NULL,
  `Mapel2` varchar(64) DEFAULT NULL,
  `Mapel3` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ID_TENTOR_2` (`IDTentor`),
  CONSTRAINT `FK_ID_TENTOR_2` FOREIGN KEY (`IDTentor`) REFERENCES `auth_tentor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mapel` */

/*Table structure for table `program` */

DROP TABLE IF EXISTS `program`;

CREATE TABLE `program` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDTentor` int(11) DEFAULT NULL,
  `Program1` varchar(32) DEFAULT NULL,
  `Program2` varchar(32) DEFAULT NULL,
  `Program3` varchar(32) DEFAULT NULL,
  `Program4` varchar(32) DEFAULT NULL,
  `Program5` varchar(32) DEFAULT NULL,
  `Program6` varchar(32) DEFAULT NULL,
  `Program7` varchar(32) DEFAULT NULL,
  `Program8` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ID_TENTOR_3` (`IDTentor`),
  CONSTRAINT `FK_ID_TENTOR_3` FOREIGN KEY (`IDTentor`) REFERENCES `auth_tentor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `program` */

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `ID_siswa` int(11) DEFAULT NULL,
  `NamaLengkap` varchar(64) DEFAULT NULL,
  `JenisKelamin` varchar(64) DEFAULT NULL,
  `Alamat` varchar(128) DEFAULT NULL,
  `NoTelp` varchar(16) DEFAULT NULL,
  `IDLine` varchar(32) DEFAULT NULL,
  `AsalSekolah` varchar(64) DEFAULT NULL,
  `Tingkatan` varchar(64) DEFAULT NULL,
  `BanyakSiswa` varchar(64) DEFAULT NULL,
  `DurasiBelajar` varchar(64) DEFAULT NULL,
  `BanyakPertemuan` int(11) DEFAULT NULL,
  `JumlahPembayaran` int(11) DEFAULT NULL,
  `ProgramBelajar` varchar(64) DEFAULT NULL,
  `TipeKelas` varchar(64) DEFAULT NULL,
  `Status` varchar(64) DEFAULT 'Belum Bayar',
  `TanggalDaftar` datetime DEFAULT NULL,
  `MaksimalPembayaran` datetime DEFAULT NULL,
  `BuktiPembayaran` varchar(1024) DEFAULT NULL,
  KEY `FK_ID_SISWA_1` (`ID_siswa`),
  CONSTRAINT `FK_ID_SISWA_1` FOREIGN KEY (`ID_siswa`) REFERENCES `auth_siswa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

/*Table structure for table `tentor` */

DROP TABLE IF EXISTS `tentor`;

CREATE TABLE `tentor` (
  `IDTentor` int(11) DEFAULT NULL,
  `NamaLengkap` varchar(64) DEFAULT NULL,
  `JenisKelamin` varchar(64) DEFAULT NULL,
  `Alamat` varchar(128) DEFAULT NULL,
  `NoTelp` varchar(16) DEFAULT NULL,
  `IDLine` varchar(32) DEFAULT NULL,
  `NomerWhatsApp` varchar(16) DEFAULT NULL,
  `AsalUniv` varchar(64) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `Gaji` int(11) DEFAULT NULL,
  `Status` varchar(64) DEFAULT 'Belum Diterima',
  `TanggalDaftar` datetime DEFAULT NULL,
  `MaksimalKonfirmasi` datetime DEFAULT NULL,
  `TanggalTes` date DEFAULT NULL,
  `BuktiPrestasi` varchar(1024) DEFAULT NULL,
  KEY `FK_ID_Tentor_1` (`IDTentor`),
  CONSTRAINT `FK_ID_Tentor_1` FOREIGN KEY (`IDTentor`) REFERENCES `auth_tentor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tentor` */

/*Table structure for table `waktu` */

DROP TABLE IF EXISTS `waktu`;

CREATE TABLE `waktu` (
  `tanggal1` datetime DEFAULT NULL,
  `tanggal2` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `waktu` */

insert  into `waktu`(`tanggal1`,`tanggal2`) values 
('2017-10-03 08:40:26','2017-10-10 08:40:26'),
('2017-10-03 08:40:36','2017-10-10 08:40:36'),
('2017-10-03 08:41:03','2017-10-10 08:41:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
