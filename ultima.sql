-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 04:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ultima`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_Admin` int(11) NOT NULL,
  `Username` varchar(128) DEFAULT NULL,
  `Password` varchar(128) DEFAULT NULL,
  `Status` varchar(128) NOT NULL DEFAULT 'TidakAktif',
  `date_created` date NOT NULL,
  `Id_TenagaMedis` int(11) DEFAULT NULL,
  `Id_Level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_Admin`, `Username`, `Password`, `Status`, `date_created`, `Id_TenagaMedis`, `Id_Level`) VALUES
(1, 'Ndaru', '12345', 'Aktif', '0000-00-00', 8, 1),
(2, 'raizen', '12345', 'Aktif', '0000-00-00', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `detail_rm`
--

CREATE TABLE `detail_rm` (
  `Id_DRM` int(11) NOT NULL,
  `Anamnesa` int(11) NOT NULL,
  `BeratBadan` double NOT NULL,
  `SuhuTubuh` double NOT NULL,
  `Id_Penyakit` int(11) NOT NULL,
  `Id_RekamMedis` int(11) NOT NULL,
  `Id_Tindakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `Id_Hewan` int(11) NOT NULL,
  `Nama_Hewan` varchar(128) NOT NULL,
  `Jenis_Kelamin` varchar(128) NOT NULL,
  `Jenis_Hewan` varchar(128) NOT NULL,
  `Signalemen` varchar(128) NOT NULL,
  `Id_Pemilik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`Id_Hewan`, `Nama_Hewan`, `Jenis_Kelamin`, `Jenis_Hewan`, `Signalemen`, `Id_Pemilik`) VALUES
(1, 'Petra', 'Jantan', 'Kucing', 'Putih Bersih, Campuran Persia dan Anggora', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `Id_Kritik` int(11) NOT NULL,
  `Isi` varchar(128) NOT NULL,
  `Date` date NOT NULL,
  `Id_Pemilik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `Id_Level` int(11) NOT NULL,
  `Deskripsi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `pemilik_hewan` (
  `Id_Pemilik` int(11) NOT NULL,
  `Nama_Pemilik` varchar(128) NOT NULL,
  `NoHp_Pemilik` varchar(15) NOT NULL,
  `Alamat_Pemilik` varchar(128) NOT NULL,
  `Username` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Image` varchar(128) NOT NULL,
  `Status` varchar(128) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_hewan`
--

INSERT INTO `pemilik_hewan` (`Id_Pemilik`, `Nama_Pemilik`, `NoHp_Pemilik`, `Alamat_Pemilik`, `Username`, `Password`, `Image`, `Status`, `date_created`) VALUES
(1, 'zujajah', '089685646734', 'Gambiran', 'jajah', '12345', '', 'Aktif', '2020-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `Id_Penyakit` int(11) NOT NULL,
  `Nama_Penyakit` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `Id_RekamMedis` int(11) NOT NULL,
  `Id_TenagaMedis` int(11) NOT NULL,
  `Id_Hewan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenagamedis`
--

CREATE TABLE `tenagamedis` (
  `Id_TenagaMedis` int(11) NOT NULL,
  `Nama_TenagaMedis` varchar(128) DEFAULT NULL,
  `NoHp_TenagaMedis` varchar(13) DEFAULT NULL,
  `Alamat_TenagaMedis` varchar(128) DEFAULT NULL,
  `JenisKelamin` varchar(128) DEFAULT NULL,
  `Status` varchar(128) NOT NULL DEFAULT 'TidakAktif',
  `date_created` date NOT NULL,
  `Email` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenagamedis`
--

INSERT INTO `tenagamedis` (`Id_TenagaMedis`, `Nama_TenagaMedis`, `NoHp_TenagaMedis`, `Alamat_TenagaMedis`, `JenisKelamin`, `Status`, `date_created`, `Email`) VALUES
(1, 'zujajah', '089685646734', 'Gambiran', 'P', 'Aktif', '2020-01-30', 'zujajahnurahmah@gmail.com'),
(4, 'Muji', '82236105893', 'Tampungan', 'L', 'Aktif', '0000-00-00', 'mujib@gmail.com'),
(6, 'mujib', '82236105893', 'SSSSSSS', 'L', 'TidakAktif', '0000-00-00', 'Petra@gmail.com'),
(8, 'Ndaru', '081329040621', 'SDASDA', 'L', 'Aktif', '0000-00-00', 'ndarualbert21@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `Id_Tindakan` int(11) NOT NULL,
  `Nama_Tindakan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_Admin`),
  ADD KEY `Id_TenagaMedis` (`Id_TenagaMedis`),
  ADD KEY `Id_Level` (`Id_Level`);

--
-- Indexes for table `detail_rm`
--
ALTER TABLE `detail_rm`
  ADD PRIMARY KEY (`Id_DRM`),
  ADD KEY `Id_Penyakit` (`Id_Penyakit`),
  ADD KEY `Id_RekamMedis` (`Id_RekamMedis`),
  ADD KEY `Id_Tindakan` (`Id_Tindakan`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`Id_Hewan`),
  ADD KEY `Id_Pemilik` (`Id_Pemilik`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`Id_Kritik`),
  ADD KEY `Id_Pemilik` (`Id_Pemilik`);

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
  ADD PRIMARY KEY (`Id_RekamMedis`),
  ADD KEY `Id_TenagaMedis` (`Id_TenagaMedis`),
  ADD KEY `Id_Hewan` (`Id_Hewan`);

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
  MODIFY `Id_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_rm`
--
ALTER TABLE `detail_rm`
  MODIFY `Id_DRM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `Id_Hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `Id_Kritik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `Id_Level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemilik_hewan`
--
ALTER TABLE `pemilik_hewan`
  MODIFY `Id_Pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `Id_Penyakit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `Id_RekamMedis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenagamedis`
--
ALTER TABLE `tenagamedis`
  MODIFY `Id_TenagaMedis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `Id_Tindakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Id_TenagaMedis`) REFERENCES `tenagamedis` (`Id_TenagaMedis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`Id_Level`) REFERENCES `level` (`Id_Level`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
