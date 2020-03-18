-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 09:17 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ultima`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`Id_Admin` int(11) NOT NULL,
  `Username` varchar(128) DEFAULT NULL,
  `Password` varchar(128) DEFAULT NULL,
  `Status` varchar(128) NOT NULL DEFAULT 'TidakAktif',
  `date_created` date NOT NULL,
  `Id_TenagaMedis` int(11) DEFAULT NULL,
  `Id_Level` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_Admin`, `Username`, `Password`, `Status`, `date_created`, `Id_TenagaMedis`, `Id_Level`) VALUES
(1, 'Ndaru', '12345', 'Aktif', '0000-00-00', 2, 1),
(2, 'raizen', '12345', 'Aktif', '0000-00-00', 1, 2),
(3, 'Admin', '12345', 'Aktif', '2020-03-04', NULL, 1),
(4, 'nurul', '12345', 'Aktif', '0000-00-00', 4, 1),
(5, 'nurul', '123', 'Aktif', '0000-00-00', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `detail_rm`
--

CREATE TABLE IF NOT EXISTS `detail_rm` (
`Id_DRM` int(11) NOT NULL,
  `Anamnesa` text NOT NULL,
  `BeratBadan` double NOT NULL,
  `SuhuTubuh` double NOT NULL,
  `Id_Penyakit` int(11) NOT NULL,
  `Id_RekamMedis` int(11) NOT NULL,
  `Id_Tindakan` int(11) NOT NULL,
  `Id_TenagaMedis` int(11) NOT NULL,
  `Tgl_Berobat` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_rm`
--

INSERT INTO `detail_rm` (`Id_DRM`, `Anamnesa`, `BeratBadan`, `SuhuTubuh`, `Id_Penyakit`, `Id_RekamMedis`, `Id_Tindakan`, `Id_TenagaMedis`, `Tgl_Berobat`) VALUES
(1, '0', 22, 36, 1, 2, 1, 2, '0000-00-00'),
(2, 'Diare, muntah kuning', 2, 1, 1, 2, 1, 4, '0000-00-00'),
(3, 'svc', 0.2, 1, 1, 2, 1, 1, '0000-00-00'),
(4, 'xc', 0.9, 1.5, 1, 3, 1, 4, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE IF NOT EXISTS `hewan` (
`Id_Hewan` int(11) NOT NULL,
  `Nama_Hewan` varchar(128) NOT NULL,
  `Jenis_Kelamin` varchar(128) NOT NULL,
  `Jenis_Hewan` varchar(128) NOT NULL,
  `Signalemen` varchar(128) NOT NULL,
  `Id_Pemilik` int(11) DEFAULT NULL,
  `Image` varchar(256) DEFAULT NULL,
  `Status` varchar(128) NOT NULL DEFAULT 'Hidup'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`Id_Hewan`, `Nama_Hewan`, `Jenis_Kelamin`, `Jenis_Hewan`, `Signalemen`, `Id_Pemilik`, `Image`, `Status`) VALUES
(1, 'Petra', 'L', 'L', 'Putih Bersih, Campuran Persia dan Anggora', 3, NULL, 'Mati'),
(2, 'Ziggy', 'Jantan', 'Kucing', 'Siam, Abu,xxx', 2, NULL, 'Mati'),
(3, 'Blacky', 'Jantan', 'Anjing', 'Gaktau', 2, NULL, 'Mati'),
(4, 'Blacky3', 'Jantan', 'Kucing', 'gaktau eh ', 2, NULL, 'Mati'),
(5, 'Kumis', 'Jantan', 'Kucing', 'Oren, nakal', 2, NULL, 'Mati'),
(6, 'Kumis', 'Betina', 'Anjing', 'ff', 3, NULL, 'Mati'),
(7, 'Potek', 'Betina', 'Sapi', 'Terdapat titik hitam diantara mata', 4, NULL, 'Hidup'),
(8, 'Gundul', 'Jantan', 'Ayam', 'Jambul putih', 2, NULL, 'Hidup');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE IF NOT EXISTS `kritik` (
`Id_Kritik` int(11) NOT NULL,
  `Kritik` varchar(128) DEFAULT NULL,
  `Date` date NOT NULL,
  `Id_Pemilik` int(11) NOT NULL,
  `Saran` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`Id_Level` int(11) NOT NULL,
  `Deskripsi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`Id_Level`, `Deskripsi`) VALUES
(1, 'Admin'),
(2, 'Tenaga Medis');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_hewan`
--

CREATE TABLE IF NOT EXISTS `pemilik_hewan` (
`Id_Pemilik` int(11) NOT NULL,
  `Nama_Pemilik` varchar(128) DEFAULT NULL,
  `NoHp_Pemilik` varchar(15) DEFAULT NULL,
  `Alamat_Pemilik` varchar(128) DEFAULT NULL,
  `Username` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Status` varchar(128) NOT NULL DEFAULT 'TidakAktif',
  `date_created` date NOT NULL,
  `JenisKelamin` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_hewan`
--

INSERT INTO `pemilik_hewan` (`Id_Pemilik`, `Nama_Pemilik`, `NoHp_Pemilik`, `Alamat_Pemilik`, `Username`, `Password`, `Status`, `date_created`, `JenisKelamin`) VALUES
(2, 'mujib', '089685646734', 'yogys', 'mujib', '12345', 'TidakAktif', '2020-03-10', 'L'),
(3, 'zujajah Nur Rahmah', '08008765890', 'tampungan', 'jajah', '12345', 'TidakAktif', '2020-03-10', 'P'),
(4, 'Petra', '081250206551', 'bantul', 'petra', '12345', 'TidakAktif', '2020-03-16', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
`Id_Penyakit` int(11) NOT NULL,
  `Nama_Penyakit` varchar(128) NOT NULL,
  `Gejala` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`Id_Penyakit`, `Nama_Penyakit`, `Gejala`) VALUES
(1, 'Scabies', 'Terdapat Kerak Pada Telinga'),
(3, 'Kutu', 'Ada ketombe'),
(4, 'cacar', 'terdapat nanah');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
`Id_RekamMedis` int(11) NOT NULL,
  `Id_Hewan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`Id_RekamMedis`, `Id_Hewan`) VALUES
(2, 4),
(3, 5),
(4, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tenagamedis`
--

CREATE TABLE IF NOT EXISTS `tenagamedis` (
`Id_TenagaMedis` int(11) NOT NULL,
  `Nama_TenagaMedis` varchar(128) DEFAULT NULL,
  `NoHp_TenagaMedis` varchar(13) DEFAULT NULL,
  `Alamat_TenagaMedis` varchar(128) DEFAULT NULL,
  `JenisKelamin` varchar(128) DEFAULT NULL,
  `Status` varchar(128) NOT NULL DEFAULT 'TidakAktif',
  `date_created` date NOT NULL,
  `Email` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenagamedis`
--

INSERT INTO `tenagamedis` (`Id_TenagaMedis`, `Nama_TenagaMedis`, `NoHp_TenagaMedis`, `Alamat_TenagaMedis`, `JenisKelamin`, `Status`, `date_created`, `Email`) VALUES
(1, 'zujajah Nur Rahmah', '089685646734', 'Gambiran', 'L', 'TidakAktif', '2020-01-30', 'zujajahnurahmah@gmail.com'),
(2, 'Ndaru', '081329040621', 'SDASDA', 'L', 'Aktif', '0000-00-00', 'ndarualbert21@gmail.com'),
(3, 'Hijrah Eni', '081250206551', 'Kembangkarum XIV, Donokerto, Turi, Sleman, Yogyakarta', 'P', 'TidakAktif', '2020-03-07', 'Hijrah@gmail.com'),
(4, 'Nurul Basyiroh pandriana', '085743305436', 'Sendowolor 003/007, Kedungkeris, Nglipar, Gunungkidul', 'P', 'Aktif', '2020-03-07', 'pandriana.nurul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE IF NOT EXISTS `tindakan` (
`Id_Tindakan` int(11) NOT NULL,
  `Nama_Tindakan` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`Id_Tindakan`, `Nama_Tindakan`) VALUES
(1, 'Injeksi A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Id_Admin`), ADD KEY `Id_TenagaMedis` (`Id_TenagaMedis`), ADD KEY `Id_Level` (`Id_Level`);

--
-- Indexes for table `detail_rm`
--
ALTER TABLE `detail_rm`
 ADD PRIMARY KEY (`Id_DRM`), ADD KEY `Id_Penyakit` (`Id_Penyakit`), ADD KEY `Id_RekamMedis` (`Id_RekamMedis`), ADD KEY `Id_Tindakan` (`Id_Tindakan`), ADD KEY `Id_TenagaMedis` (`Id_TenagaMedis`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
 ADD PRIMARY KEY (`Id_Hewan`), ADD KEY `Id_Pemilik` (`Id_Pemilik`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
 ADD PRIMARY KEY (`Id_Kritik`), ADD KEY `Id_Pemilik` (`Id_Pemilik`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`Id_Level`);

--
-- Indexes for table `pemilik_hewan`
--
ALTER TABLE `pemilik_hewan`
 ADD PRIMARY KEY (`Id_Pemilik`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
 ADD PRIMARY KEY (`Id_Penyakit`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
 ADD PRIMARY KEY (`Id_RekamMedis`), ADD KEY `Id_Hewan` (`Id_Hewan`);

--
-- Indexes for table `tenagamedis`
--
ALTER TABLE `tenagamedis`
 ADD PRIMARY KEY (`Id_TenagaMedis`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
 ADD PRIMARY KEY (`Id_Tindakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `Id_Admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `detail_rm`
--
ALTER TABLE `detail_rm`
MODIFY `Id_DRM` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
MODIFY `Id_Hewan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
MODIFY `Id_Kritik` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `Id_Level` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pemilik_hewan`
--
ALTER TABLE `pemilik_hewan`
MODIFY `Id_Pemilik` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
MODIFY `Id_Penyakit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
MODIFY `Id_RekamMedis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tenagamedis`
--
ALTER TABLE `tenagamedis`
MODIFY `Id_TenagaMedis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
MODIFY `Id_Tindakan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Id_TenagaMedis`) REFERENCES `tenagamedis` (`Id_TenagaMedis`) ON UPDATE CASCADE,
ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`Id_Level`) REFERENCES `level` (`Id_Level`) ON UPDATE CASCADE;

--
-- Constraints for table `detail_rm`
--
ALTER TABLE `detail_rm`
ADD CONSTRAINT `detail_rm_ibfk_1` FOREIGN KEY (`Id_Penyakit`) REFERENCES `penyakit` (`Id_Penyakit`) ON UPDATE CASCADE,
ADD CONSTRAINT `detail_rm_ibfk_2` FOREIGN KEY (`Id_RekamMedis`) REFERENCES `rekam_medis` (`Id_RekamMedis`) ON UPDATE CASCADE,
ADD CONSTRAINT `detail_rm_ibfk_3` FOREIGN KEY (`Id_Tindakan`) REFERENCES `tindakan` (`Id_Tindakan`) ON UPDATE CASCADE,
ADD CONSTRAINT `detail_rm_ibfk_4` FOREIGN KEY (`Id_TenagaMedis`) REFERENCES `tenagamedis` (`Id_TenagaMedis`) ON UPDATE CASCADE;

--
-- Constraints for table `hewan`
--
ALTER TABLE `hewan`
ADD CONSTRAINT `hewan_ibfk_1` FOREIGN KEY (`Id_Pemilik`) REFERENCES `pemilik_hewan` (`Id_Pemilik`) ON UPDATE CASCADE;

--
-- Constraints for table `kritik`
--
ALTER TABLE `kritik`
ADD CONSTRAINT `kritik_ibfk_1` FOREIGN KEY (`Id_Pemilik`) REFERENCES `pemilik_hewan` (`Id_Pemilik`) ON UPDATE CASCADE;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`Id_Hewan`) REFERENCES `hewan` (`Id_Hewan`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
