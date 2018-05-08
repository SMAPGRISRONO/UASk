/*
SQLyog Professional v12.09 (64 bit)
MySQL - 5.5.27 : Database - perpus_srono
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`perpus_srono` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `perpus_srono`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `nip` char(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`nip`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`nip`,`nama`) values ('012346789','Dina Eka');

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `Nis` char(20) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`Nis`),
  UNIQUE KEY `Nama` (`Nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

insert  into `anggota`(`Nis`,`Nama`,`Kelas`) values ('001','Didin Andika','X1'),('002','Devi Tamara','X1'),('003','Cipluk Maharani','X1');

/*Table structure for table `data_buku` */

DROP TABLE IF EXISTS `data_buku`;

CREATE TABLE `data_buku` (
  `kode_buku` char(20) NOT NULL,
  `nama_buku` varchar(30) NOT NULL,
  `jenis_buku` varchar(30) NOT NULL,
  `jumlah` int(30) NOT NULL,
  PRIMARY KEY (`kode_buku`),
  UNIQUE KEY `nama_buku` (`nama_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_buku` */

insert  into `data_buku`(`kode_buku`,`nama_buku`,`jenis_buku`,`jumlah`) values ('a01','Sains','Buku Pelajaran',4),('a02','Matematika Dasar','Buku Pelajaran',3),('b01','Ketika Cinta Bertasbih','Novel',1);

/*Table structure for table `peminjaman_buku` */

DROP TABLE IF EXISTS `peminjaman_buku`;

CREATE TABLE `peminjaman_buku` (
  `tanggal` date NOT NULL,
  `no_urut` int(30) NOT NULL AUTO_INCREMENT,
  `Nis` char(30) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `kode_buku` char(30) NOT NULL,
  `nama_buku` varchar(30) NOT NULL,
  `tanggal_kembali` varchar(30) NOT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `peminjaman_buku` */

insert  into `peminjaman_buku`(`tanggal`,`no_urut`,`Nis`,`Nama`,`kode_buku`,`nama_buku`,`tanggal_kembali`) values ('0000-00-00',1,'\'.$NIS.\'','\'.$nama.\'','\'.$kode.\'','\'.$namabuk.\'','\'.tanggalkem.\''),('0000-00-00',2,'\'.$NIS.\'','\'.$nama.\'','\'.$kode.\'','\'.$namabuk.\'','\'.$tanggalkem.\''),('0000-00-00',3,'\'.$NIS.\'','\'.$nama.\'','\'.$kode.\'','\'.$namabuk.\'','\'.$tanggalkem.\'');

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `id_pengguna` char(34) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` char(32) NOT NULL,
  `status` varchar(26) DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengguna` */

insert  into `pengguna`(`id_pengguna`,`username`,`password`,`status`) values ('A1','admin','admin','admin'),('P1','petugas','petugas','petugas');

/*Table structure for table `petugas` */

DROP TABLE IF EXISTS `petugas`;

CREATE TABLE `petugas` (
  `nip` char(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`nip`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `petugas` */

insert  into `petugas`(`nip`,`nama`) values ('98764321','Cahyo eko');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
