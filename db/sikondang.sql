-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2018 at 01:36 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sikondang`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE IF NOT EXISTS `fruits` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fruits_name` varchar(200) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `fruits_name`, `quantity`) VALUES
(1, 'Mango', 20),
(2, 'Pineapple', 50),
(3, 'Apple', 30),
(4, 'Banana', 10),
(5, 'Orange', 25);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_user` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_user`, `nama`, `password`, `level`) VALUES
('yadi', 'haryadi', 'e60838b9f0c0ed98a486f231a4df9c4a', 'User'),
('ADMIN', 'Administrator', '0192023a7bbd73250516f069df18b500', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang_urusan`
--

CREATE TABLE IF NOT EXISTS `tb_bidang_urusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bidang` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_bidang_urusan`
--

INSERT INTO `tb_bidang_urusan` (`id`, `nama_bidang`) VALUES
(1, 'Pendidikan'),
(2, 'Kesehatan'),
(3, 'Pekerjaan Umum'),
(4, 'Perumahan'),
(5, 'Penataan Ruang'),
(6, 'Perhubungan'),
(7, 'Lingkungan Hidup'),
(8, 'Kependudukan dan Catatan Sipil'),
(9, 'Sosial'),
(10, 'Otonomi Daerah, Pemerintahan Umum,Administrasi Keuangan Daerah,Perangkat Daerah,Kepegawaian dan Persandian'),
(11, 'Pertanahan'),
(12, 'Ketahanan Pangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_data`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_data` varchar(150) NOT NULL,
  `id_bidang` int(4) NOT NULL,
  `id_parent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_jenis_data`
--

INSERT INTO `tb_jenis_data` (`id`, `jenis_data`, `id_bidang`, `id_parent`) VALUES
(1, 'Jumlah Taman Bermain/ Play Group', 1, 0),
(2, 'Taman Bermain/ Play Group Negeri', 1, 1),
(3, 'Taman Bermain/ Play Group Swasta', 1, 1),
(4, 'Taman Kanak-Kanak (TK)', 1, 0),
(5, 'TK Negeri', 1, 4),
(6, 'TK Swasta', 1, 4),
(7, 'Jumlah Sekolah Dasar (SD)', 1, 0),
(8, 'SD Negeri', 1, 7),
(9, 'SD Swasta', 1, 7),
(10, 'Jumlah Sekolah Lanjut Tingkat Pertama (SLTP)', 1, 0),
(11, 'SLTP Negeri', 1, 10),
(12, 'SLTP Swasta', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE IF NOT EXISTS `tb_satuan` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `satuan` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_simpatik`
--

CREATE TABLE IF NOT EXISTS `tb_simpatik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bidang_urusan` int(4) NOT NULL,
  `jenis_data` int(4) NOT NULL,
  `tahun` int(5) NOT NULL,
  `triwulan` int(1) NOT NULL DEFAULT '1',
  `wilayah` int(1) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `sumber_data` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_simpatik`
--

INSERT INTO `tb_simpatik` (`id`, `bidang_urusan`, `jenis_data`, `tahun`, `triwulan`, `wilayah`, `jumlah`, `satuan`, `sumber_data`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 1, 2, 2017, 1, 1, 100, 'ada', 'ok', '2017-10-30 08:30:10', NULL, '2017-10-31 04:36:34', NULL),
(2, 1, 6, 2017, 1, 1, 100, 'unit', 'yes', '2017-10-30 08:39:57', NULL, NULL, NULL),
(3, 1, 8, 2017, 1, 1, 100, 'unit', 'ok', '2017-10-30 08:55:48', NULL, NULL, NULL),
(4, 1, 2, 2017, 1, 2, 50, 'unit', 'ada', '2017-12-13 10:03:36', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_jenisdata`
--

CREATE TABLE IF NOT EXISTS `tb_sub_jenisdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_jenisdata` varchar(150) NOT NULL,
  `id_bidang` int(4) NOT NULL,
  `id_jenisdata` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_download`
--

CREATE TABLE IF NOT EXISTS `tb_user_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ket_pass` varchar(100) DEFAULT NULL,
  `aktip` int(1) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user_download`
--

INSERT INTO `tb_user_download` (`id`, `nama`, `email`, `password`, `ket_pass`, `aktip`, `created_date`, `created_by`) VALUES
(1, 'Hayadi', 'yadi2074@gmail.com', '1fccb460dcdbeacee1f120b5763f5d95', 'kNLychm', 1, '2018-03-20', 'Hayadi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wilayah`
--

CREATE TABLE IF NOT EXISTS `tb_wilayah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_wilayah` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_wilayah`
--

INSERT INTO `tb_wilayah` (`id`, `nama_wilayah`) VALUES
(1, 'Serang'),
(2, 'Curug'),
(3, 'Taktakan'),
(4, 'Walantaka'),
(5, 'Cipocok Jaya'),
(6, 'Kasemen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
