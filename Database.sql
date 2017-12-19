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
  `Pass` char(32) DEFAULT NULL,
  `Authority` int(11) DEFAULT '2',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`ID`,`Username`,`Pass`,`Authority`) values 
(1,'Wildan','b9334bbe3ea1c8852a22af599f6e6df7',1),
(2,'Hery','25d55ad283aa400af464c76d713c07ad',1);

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(128) DEFAULT NULL,
  `Content` text,
  `Author` varchar(64) DEFAULT NULL,
  `CreatedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `article` */

/*Table structure for table `history` */

DROP TABLE IF EXISTS `history`;

CREATE TABLE `history` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDSiswa` int(11) DEFAULT NULL,
  `IDTentor` int(11) DEFAULT NULL,
  `Mapel` varchar(64) DEFAULT NULL,
  `Materi` text,
  `Ringkasan` text,
  `Dokumentasi` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `history` */

/*Table structure for table `jadwal` */

DROP TABLE IF EXISTS `jadwal`;

CREATE TABLE `jadwal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDSiswa` int(11) DEFAULT NULL,
  `IDTentor` int(11) DEFAULT NULL,
  `BanyakSiswa` varchar(64) DEFAULT NULL,
  `Tingkatan` varchar(64) DEFAULT NULL,
  `Mapel` varchar(64) DEFAULT NULL,
  `DurasiBelajar` varchar(64) DEFAULT NULL,
  `Kuota` int(11) DEFAULT NULL,
  `Program` varchar(32) DEFAULT NULL,
  `TipeKelas` varchar(64) DEFAULT NULL,
  `Status` varchar(64) DEFAULT 'Belum Bayar',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jadwal` */

/*Table structure for table `komentar` */

DROP TABLE IF EXISTS `komentar`;

CREATE TABLE `komentar` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NamaLengkap` varchar(64) DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Komentar` text,
  `Tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `komentar` */

insert  into `komentar`(`ID`,`NamaLengkap`,`Email`,`Komentar`,`Tanggal`) values 
(1,'Wildan  Syawal','Wildanlsfs@gmail.com','Mantap, Tentor jago semua','2017-12-18 06:25:59');

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `IDTentor` int(11) DEFAULT NULL,
  `Mapel` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mapel` */

/*Table structure for table `program` */

DROP TABLE IF EXISTS `program`;

CREATE TABLE `program` (
  `IDTentor` int(11) DEFAULT NULL,
  `Program` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `program` */

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(64) DEFAULT NULL,
  `Pass` char(32) DEFAULT NULL,
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
  `JumlahPembayaran` varchar(32) DEFAULT NULL,
  `ProgramBelajar` varchar(64) DEFAULT NULL,
  `TipeKelas` varchar(64) DEFAULT NULL,
  `Status` varchar(64) DEFAULT 'Belum Bayar',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

/*Table structure for table `tentor` */

DROP TABLE IF EXISTS `tentor`;

CREATE TABLE `tentor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(64) DEFAULT NULL,
  `Pass` char(32) DEFAULT NULL,
  `NamaLengkap` varchar(64) DEFAULT NULL,
  `JenisKelamin` varchar(64) DEFAULT NULL,
  `Alamat` varchar(128) DEFAULT NULL,
  `NoTelp` varchar(16) DEFAULT NULL,
  `IDLine` varchar(32) DEFAULT NULL,
  `NomerWhatsApp` varchar(16) DEFAULT NULL,
  `AsalUniv` varchar(64) DEFAULT NULL,
  `Gaji` int(11) DEFAULT '90000',
  `Status` varchar(64) DEFAULT 'Belum Diterima',
  `TanggalDaftar` datetime DEFAULT NULL,
  `MaksimalKonfirmasi` datetime DEFAULT NULL,
  `TanggalTes` date DEFAULT NULL,
  `BuktiPrestasi` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tentor` */

/*Table structure for table `waiting_list` */

DROP TABLE IF EXISTS `waiting_list`;

CREATE TABLE `waiting_list` (
  `IDSiswa` int(11) DEFAULT NULL,
  `NamaSiswa` varchar(64) DEFAULT NULL,
  `TanggalPendaftaran` datetime DEFAULT NULL,
  `MaksimalPembayaran` datetime DEFAULT NULL,
  `BuktiPembayaran` varchar(1024) DEFAULT NULL,
  `Status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `waiting_list` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
