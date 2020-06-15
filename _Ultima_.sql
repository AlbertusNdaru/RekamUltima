-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 09:33 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_Admin`, `Username`, `Password`, `Status`, `date_created`, `Id_TenagaMedis`, `Id_Level`) VALUES
(1, 'Ndaru', '12345', 'Aktif', '0000-00-00', 2, 1),
(2, 'raizen', '12345', 'Aktif', '0000-00-00', 1, 2),
(6, 'admin', '12345', 'Aktif', '2020-04-06', NULL, 1),
(8, 'admin', '12345', 'Aktif', '2020-04-09', 3, 2),
(9, 'nurul', '12345', 'Aktif', '2020-04-09', 4, 2),
(11, 'Nyoba', '12345', 'Aktif', '2020-04-10', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_rm`
--

CREATE TABLE IF NOT EXISTS `detail_rm` (
`Id_DRM` int(11) NOT NULL,
  `Anamnesa` varchar(256) NOT NULL,
  `BeratBadan` double NOT NULL,
  `SuhuTubuh` double NOT NULL,
  `Id_Penyakit` int(11) NOT NULL,
  `Id_RekamMedis` int(11) NOT NULL,
  `Id_Tindakan` int(11) NOT NULL,
  `Id_TenagaMedis` int(11) NOT NULL,
  `Tgl_Berobat` date NOT NULL,
  `Resep` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_rm`
--

INSERT INTO `detail_rm` (`Id_DRM`, `Anamnesa`, `BeratBadan`, `SuhuTubuh`, `Id_Penyakit`, `Id_RekamMedis`, `Id_Tindakan`, `Id_TenagaMedis`, `Tgl_Berobat`, `Resep`) VALUES
(11, 'Kerak Seluruh Tubuh', 1, 39.2, 1, 12, 1, 4, '2020-04-06', 'Ivervate, ADE '),
(15, 'Kerak di telinga', 1, 39.2, 1, 12, 5, 4, '2020-04-06', 'Pending'),
(16, 'Kerak Seluruh Tubuh', 1.05, 39.7, 1, 13, 1, 4, '2020-04-06', 'Supidon\r\nIverfate ADE'),
(17, 'Kerak di tubuh', 1.05, 39.7, 1, 13, 1, 4, '2020-04-06', 'Iverfate ADE'),
(18, 'Kerak seluruh tubuh', 1.3, 39.3, 1, 14, 1, 4, '2020-04-06', 'Iverfate ADE'),
(19, 'Kerak sudah berkurang', 1.5, 39.3, 1, 14, 1, 4, '2020-04-06', 'Ivervate ADE'),
(22, 'Kucing sehat', 3.5, 38.5, 12, 15, 3, 3, '2020-04-06', 'Vaksin rabies'),
(23, 'Jalan sempoyongan Diare badan gemeteran telinga basah mukosa pucat', 2.5, 38, 5, 16, 1, 3, '2020-04-06', 'Injeksi/ Vetbiodexa ADE\r\nR/ Anaproni dexa 2 x 1cc\r\nR/ Sango 1 x 1 cc\r\nR/ Kaotin 2 x 2,5\r\nR/ Tetes telinga'),
(24, 'Menyusui Maem kemaren sore Muntah putih Ngiler hidung basah telinga basah gusi merah BCS ', 2.1, 40.5, 5, 17, 1, 3, '2020-04-06', 'ADE enro\r\nVet Heina sulpi\r\nAngkak\r\nImbost\r\nDompendom\r\nBaytril'),
(25, 'Sering bersin, pilek kurang lebih 1 minggu', 600, 40.3, 5, 29, 1, 4, '2020-06-12', 'Injeksi ket bio sulpi ane sumox, R lysin 3 1x1/2, R Hufa 2x0,2 CC, R ana 10, proni 1/2,  dexa 1/2, amox 1/2   2x 1 CC'),
(26, 'Batuk, Makan minum oke, abis suntik kutu 2 minggu lalu', 5, 38.1, 3, 30, 1, 4, '2020-06-12', 'INJ Vitamin'),
(27, 'Makan minum menurun, BAB oke, muntah, telinga basah, mukosa normal, V.U normal', 2.5, 40, 5, 31, 1, 4, '2020-06-12', 'INJ Vetbiosulpi, Ade amox, R Terapi Telinga, R Anaproni Dexa Amox'),
(28, 'Ada temannya yang mati, belum vaksin, Telinga Basah', 1.7, 39.8, 5, 31, 1, 4, '2020-06-12', 'INJ Vetbio sulpi Ane Env, R. Baytrix Zto, R. Inbost 10 CC, R. Tetes Telinga, R. Ana Proni Dexa Amox\r\nA'),
(29, 'Telinga Basah, Pucat, Makan Minum mau, Bab Normal, Keluar cairan putih bening ', 3.2, 38.3, 5, 32, 1, 4, '2020-06-12', 'INJ/ Vetiodexy Ade Amox, Anaproni dexa amox, Sango, Imboost'),
(30, 'BAB oke, Lesu, Pucat, Telinga asah', 3.2, 38.3, 5, 32, 1, 4, '2020-06-12', 'INJ/ Vetbio Sulpi ade enro'),
(31, 'tadi pagi makan sedikit, pup cair, masih aktif', 600, 38.3, 4, 33, 1, 4, '2020-06-12', 'INJ Vetrodexa Ade Amox, R/ Anaproni Dexa Entro 3, R/ zink 10 CC, R/ Lacb'),
(32, 'Mau Makan dikit + suap, pup lembek, muntah, jamuran', 0.7, 39.4, 5, 34, 1, 4, '2020-06-12', 'INJ/ Vetbio Sulpi Ade, R/ Imboost, R/ Antivirus, R/ Tetes Telinga'),
(33, 'Radang telinga, Makan mau basah, Minum mau, Pipis dikit', 4.7, 39.7, 13, 35, 1, 3, '2020-06-12', 'Vet B12 Sulpi Ade Amox, Tetes Telinga, Ana Proni Adex'),
(34, 'Makan Minum OK, BAB OK, R. Anaprio dexa amox, ', 4, 38.7, 13, 36, 1, 3, '2020-06-12', 'INJ Vetbiodexa Ade Amox, R/ Anaprio Dexa Amox, R/ Biodexa'),
(35, 'Makan minum mau tadi pagi, BAB lendir bau putih, Muntah rumput, 3 minggu opname, diare 4 hari di kayumanis, udah cek darah, tidak keluar hasilnya, suudah vaksin', 2.9, 38.8, 14, 37, 1, 4, '2020-06-12', 'INJ Vet Bio Dexa Ane Sulfa, R/ ZINK, R/ Kaotin, R/ Ana proni dexa, R/ Drontal. Resiko cacingan tinggi'),
(36, 'Makan Minum berkurang, Muntah Putih, BAB bagus, Mata Iritasi', 1, 40.6, 14, 38, 1, 3, '2020-06-12', 'INJ Vetbio Sulpy Ade Amox, R/ Caviproni dex 1/2, R/ Tetes Mata, R/ Anti Muntah'),
(37, 'Telinga basah, dehidrasi, Makan minum kemarin, Pucat, Radang Gusi, Liur Kental', 1.8, 38.7, 15, 39, 1, 3, '2020-06-12', 'INJ/ Vetbiodex Ade Enro, R/ Ardahex, R/ AV,  R/ Imost, R/ Tetes Telinga, R/ Sango, R/aytril, R/ Angkak'),
(38, 'Kateter, V.U besar Tegang, Urin berdarah, di soeparwi di flush aja', 4.2, 39.2, 4, 40, 2, 3, '2020-06-12', 'Keteter, bius lokal, R/ Calcu istax, R/ Glucosamin');

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
  `Image` varchar(256) DEFAULT '',
  `Status` varchar(128) NOT NULL DEFAULT 'Hidup'
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`Id_Hewan`, `Nama_Hewan`, `Jenis_Kelamin`, `Jenis_Hewan`, `Signalemen`, `Id_Pemilik`, `Image`, `Status`) VALUES
(13, 'Petra', 'Jantan', 'Kucing', 'Putih, Bersih, Persia - Anggora', 5, 'Hewan-20200611232027.jpg', 'Hidup'),
(14, 'Gundul', 'Betina', 'Sapi', 'Hitam Putih', 6, '', 'Hidup'),
(15, 'Kumis', 'Jantan', 'Anjing', 'asfsadfaf', 6, '', 'Hidup'),
(16, 'Ziggy', 'Jantan', 'Kucing', 'vgvg', 5, 'Hewan-20200610224709.jpg', 'Hidup'),
(17, 'NoName', 'Betina', 'Kucing', 'Calico Spot Besar', 7, '', 'Hidup'),
(18, 'NoName novita', 'Betina', 'Kucing', 'Calico rata', 7, '', 'Hidup'),
(19, 'NoName N', 'Jantan', 'Kucing', 'Hitam - Putih', 7, '', 'Hidup'),
(20, 'Ciko', 'Jantan', 'Anjing', '+- 5 bulan ', 8, '', 'Hidup'),
(21, 'utami', 'Jantan', 'Kucing', 'Abu - abu', 9, '', 'Hidup'),
(22, 'Milka', 'Jantan', 'Kucing', 'Jantan', 10, '', 'Hidup'),
(27, 'Potek', 'Jantan', 'Kucing', 'bulu berwarna Oren Ekor seperti patah', 5, '', 'Hidup'),
(28, 'Ucil', 'Betina', 'Kucing', 'Oren', 5, 'Hewan-20200609234930.jpg', 'Hidup'),
(29, 'fodo', 'Jantan', 'Anjing', 'fvf', 5, 'Hewan-20200610001854.jpg', 'Hidup'),
(30, 'Kumis 23', 'Jantan', 'Anjing', 'bebas', 5, 'Hewan-20200610002203.jpg', 'Hidup'),
(31, 'Kumis 3', 'Jantan', 'Kucing', 'sss', 5, 'Hewan-20200610002629.jpg', 'Hidup'),
(32, 'Kucing Lucu', 'Betina', 'Anjing', 'ddddddd', 5, 'Hewan-20200610002929.jpg', 'Hidup'),
(33, 'Kumis', 'Jantan', 'Anjing', 'mn', 5, 'Hewan-20200610003140.jpg', 'Hidup'),
(34, 'Kumis', 'Jantan', 'Kucing', 'ddd', 5, 'Hewan-20200610224636.jpg', 'Hidup'),
(35, 'Kumis', 'Jantan', 'Kucing', 'ddd', 5, 'Hewan-20200610003453.jpg', 'Hidup'),
(36, 'Kumis', 'Jantan', 'Kucing', 'ddd', 5, 'Hewan-20200610003516.jpg', 'Hidup'),
(37, 'Kumis', 'Jantan', 'Ayam', 'wwwww', 5, 'Hewan-20200610004905.jpg', 'Hidup'),
(38, 'Ziggy', 'Jantan', 'Ayam', 'wwwww', 5, 'Hewan-20200610005101.jpg', 'Hidup'),
(39, 'Kumis', 'Jantan', 'Kucing', 'ssss', 5, 'Hewan-20200610005513.jpg', 'Hidup'),
(40, 'Gundullll', 'Jantan', 'Ayam', 'kk', 5, 'Hewan-20200610010957.jpg', 'Hidup'),
(41, 'Abu', 'Jantan', 'Kucing', 'Warna bulu abu - abu, umur 2 bulan', 17, 'Hewan-20200612132740.jpg', 'Hidup'),
(42, 'Puffy', 'Jantan', 'Anjing', 'Anjing jantan umur 6 bulan', 18, 'Hewan-20200612133859.jpg', 'Hidup'),
(43, 'Bocil', 'Betina', 'Kucing', 'Bulu Putih Kuning', 19, 'Hewan-20200612134611.jpg', 'Hidup'),
(44, 'Nino', 'Betina', 'Kucing', 'Putih coklat', 19, 'Hewan-20200612134705.jpg', 'Hidup'),
(45, 'kucing oren', 'Pilih Jenis Kelamin', 'Kucing', 'warna bulu oren', 20, 'Hewan-20200612142446.jpg', 'Hidup'),
(46, 'calico', 'Betina', 'Kucing', 'bulu 3 warna, hitam putih, oren', 20, 'Hewan-20200612142545.jpg', 'Hidup'),
(47, 'Bul - Bul', 'Betina', 'Kucing', 'Jantan, Bulu berwarna abu', 21, 'Hewan-20200612143930.jpg', 'Hidup'),
(48, 'Grey', 'Betina', 'Kucing', 'Bulu warna Abu2', 22, 'Hewan-20200612145925.jpg', 'Hidup'),
(49, 'Gaston', 'Jantan', 'Kucing', 'BAB lendir au putih, Muntah  Rumput, Sudah vaksin, pernah diare 4 hari diopname kayu manis, sudah cek darah tidak keluar hasilny', 23, 'Hewan-20200612151403.jpg', 'Hidup'),
(50, 'Crame', 'Jantan', 'Kucing', 'Warna Abu Usia 3 bulan', 24, 'Hewan-20200612153547.jpg', 'Hidup'),
(51, 'Moli', 'Betina', 'Kucing', 'Calico ', 25, 'Hewan-20200612154455.jpg', 'Hidup'),
(52, 'Sandi', 'Jantan', 'Kucing', 'Bulu Putih', 17, 'Hewan-20200612155630.jpg', 'Hidup');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`Id_Kritik`, `Kritik`, `Date`, `Id_Pemilik`, `Saran`) VALUES
(3, 'Saya beli pakan kucing tetapi banyak debu, lama pelayananya', '2020-04-07', 10, 'Dotingkatkan lagi kebersihannya'),
(4, 'penanganan untuk kucing sayaa sangat lambat,  karyawan tidak ramah', '2020-04-07', 6, 'leih baik lagi kedepannya');

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_hewan`
--

INSERT INTO `pemilik_hewan` (`Id_Pemilik`, `Nama_Pemilik`, `NoHp_Pemilik`, `Alamat_Pemilik`, `Username`, `Password`, `Status`, `date_created`, `JenisKelamin`) VALUES
(5, 'zujajah Nur Rahmah', '089685646734', 'Gambiran, Sendangtirto, Berbah, Sleman, Yogyakarta', 'jajah', '12345', 'TidakAktif', '2020-04-06', 'P'),
(6, 'Nurul Basyiroh pandriana', '081250206551', 'Gunungkidul', 'nurul', '123', 'Aktif', '2020-04-06', 'P'),
(7, 'Novita', '082216600678', 'Bumen wetan', 'novita', '12345', 'TidakAktif', '2020-04-06', 'P'),
(8, 'Diky Indra', '089606818049', 'Piyungan rt 9', 'diky', '12345', 'TidakAktif', '2020-04-06', 'L'),
(9, 'Tri utami ningsti', '089699049078', 'Tegal Kopen, Banguntapan', 'tri', '12345', 'TidakAktif', '2020-04-06', 'P'),
(10, 'Pak Agus', '085878247747', 'Karang Gayem', 'agus', '12345', 'TidakAktif', '2020-04-06', 'L'),
(11, 'zujajah Nur Rahmah', '089685646734', 'ada', 'jajah', '12345', 'TidakAktif', '2020-04-09', 'P'),
(12, 'Ayada Nur Akila', '08008765890', 'Gambiran', 'ayada', '12345', 'TidakAktif', '2020-04-10', 'P'),
(13, 'Petra', '82236105893', 'rawa boyo', 'sinta', 'jojo', 'TidakAktif', '2020-04-10', 'P'),
(14, 'Petra', '0987543457890', 'rawa boyo', 'sorii', 'jojo', 'TidakAktif', '2020-04-10', 'P'),
(15, 'Kuyang', '08889987543', 'kuburan', 'hantu', 'tidur', 'TidakAktif', '2020-04-10', 'L'),
(16, 'mbak kunti', '0988392202', 'kuburan', 'huntuu', '12333545', 'TidakAktif', '2020-04-10', 'L'),
(17, 'Citra', '087739116441', 'Potorono', 'citra', '12345', 'TidakAktif', '2020-06-12', 'P'),
(18, 'Catrins', '081329757777', 'Pranti 268, Mandiri', 'catrins', '12345', 'TidakAktif', '2020-06-12', 'P'),
(19, 'Bu cici', '081326179224', 'Mantub', 'cici', '12345', 'TidakAktif', '2020-06-12', 'P'),
(20, 'Carizka', '080000000', 'Cakar Mas Ciken', 'carizka', '12345', 'TidakAktif', '2020-06-12', 'P'),
(21, 'Candra Pinggiran', '083869702766', 'Pinggiran', 'candra', '12345', 'TidakAktif', '2020-06-12', 'L'),
(22, 'cuk', '08174127621', 'Perum Riyatamansari II Blok 14', 'cuk ', '12345', 'TidakAktif', '2020-06-12', 'L'),
(23, 'Cita', '0895328877721', 'Ngipik', 'cita', '12345', 'TidakAktif', '2020-06-12', 'P'),
(24, 'Cahyani', '081239317870', 'Kuden Rt 04', 'cahyani', '12345', 'TidakAktif', '2020-06-12', 'P'),
(25, 'Catrine', '082324472393', 'Ringroad timur No 268 Wonocatur', 'catrine', '12345', 'TidakAktif', '2020-06-12', 'P'),
(26, 'Citra Argaka Sari', '081802761258', 'Puri Sewon', 'citra', '12345', 'TidakAktif', '2020-06-12', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
`Id_Penyakit` int(11) NOT NULL,
  `Nama_Penyakit` varchar(128) NOT NULL,
  `Gejala` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`Id_Penyakit`, `Nama_Penyakit`, `Gejala`) VALUES
(1, 'Scabies', 'Terdapat Kerak Pada Telinga'),
(3, 'Kutu', 'Ada ketombe'),
(4, 'Fuse', 'Kencing berdarah, Ngeden'),
(5, 'Virus Panleukopenia', 'Nafsu makan minum berkurang,\r\nDiare berdarah, \r\nMulut bau, \r\nTelinga berair, \r\nMuntah Kuning, \r\nMuntah cair, \r\nDehidrasi'),
(6, 'Parvo', 'Nafsu makan minum berkurang,\r\nDiare berdarah, \r\nMulut bau, \r\nTelinga berair, \r\nMuntah Kuning, \r\nMuntah cair, Dehidrasi'),
(7, 'Distemper', 'Nafsu makan minum berkurang,\r\nDiare berdarah, \r\nMulut bau, \r\nTelinga berair, \r\nMuntah Kuning, \r\nMuntah cair, \r\nDehidrasi'),
(8, 'Feline Infectious Peritonitis', 'Perut Membuncit erisi cairan\r\nPernapasan Terganggu atau sesak\r\nsusah napas\r\nmakan minum berkurang'),
(9, 'Piometria', 'Makan minum normal\r\npenurunan imunitas\r\nkemaluan keluar cairan kuning keruh seperti nanah\r\nperut membuncit'),
(10, 'Newcestel Desease ND', 'Penurunan nafsu makan\r\nKeseimbangan terganggu\r\nPilek\r\nNgorok'),
(12, 'Sehat', 'Sehat'),
(13, 'Flu', 'Bersin lebih dari 3 hari'),
(14, 'Radang', 'Batuk, Pilek, Demam, Tidak nafsu makan'),
(15, 'Virus', 'Tidak Nafsu makan, Radang telinga, bab lembek'),
(16, 'Cacingan', 'BAB cair, ada cacing di dalam BAB, BAB Bau');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
`Id_RekamMedis` int(11) NOT NULL,
  `Id_Hewan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`Id_RekamMedis`, `Id_Hewan`) VALUES
(9, 14),
(12, 17),
(13, 18),
(14, 19),
(15, 20),
(16, 21),
(17, 22),
(22, 27),
(23, 32),
(24, 33),
(25, 34),
(26, 35),
(27, 36),
(28, 40),
(29, 41),
(30, 42),
(31, 43),
(32, 44),
(33, 45),
(34, 46),
(35, 47),
(36, 48),
(37, 49),
(38, 50),
(39, 51),
(40, 52);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenagamedis`
--

INSERT INTO `tenagamedis` (`Id_TenagaMedis`, `Nama_TenagaMedis`, `NoHp_TenagaMedis`, `Alamat_TenagaMedis`, `JenisKelamin`, `Status`, `date_created`, `Email`) VALUES
(1, 'zujajah Nur Rahmah', '089685646734', 'Gambiran', 'L', 'Aktif', '2020-01-30', 'zujajahnurahmah@gmail.com'),
(2, 'Ndaru', '081329040621', 'SDASDA', 'L', 'Aktif', '0000-00-00', 'ndarualbert21@gmail.com'),
(3, 'Hijrah Eni', '081250206551', 'Kembangkarum XIV, Donokerto, Turi, Sleman, Yogyakarta', 'P', 'TidakAktif', '2020-03-07', 'Hijrah@gmail.com'),
(4, 'Nurul Basyiroh pandriana', '085743305436', 'Sendowolor 003/007, Kedungkeris, Nglipar, Gunungkidul', 'P', 'Aktif', '2020-03-07', 'pandriana.nurul@gmail.com'),
(5, 'Ayada Nur Akila', '08954890080', 'Gambiran', 'L', 'Aktif', '2020-04-10', 'ayada@gmail.com'),
(6, 'Ruben', '0876780089900', 'lolorr', 'L', 'Aktif', '2020-04-10', 'ruben@gmail.com'),
(18, 'zujajah Nur Rahmah', '082236105893', 'Loli', 'L', 'TidakAktif', '2020-04-19', 'dody@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE IF NOT EXISTS `tindakan` (
`Id_Tindakan` int(11) NOT NULL,
  `Nama_Tindakan` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`Id_Tindakan`, `Nama_Tindakan`) VALUES
(1, 'Injeksi'),
(2, 'Kateter'),
(3, 'Vaksin'),
(4, 'Steril'),
(5, 'Sehat'),
(6, 'Enuqleasi'),
(7, 'USG'),
(8, 'Nebulaizer'),
(9, 'Terapi Kutu'),
(10, 'Cesar'),
(11, 'Hernia'),
(12, 'Tetes Telinga');

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
MODIFY `Id_Admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `detail_rm`
--
ALTER TABLE `detail_rm`
MODIFY `Id_DRM` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
MODIFY `Id_Hewan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
MODIFY `Id_Kritik` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `Id_Level` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pemilik_hewan`
--
ALTER TABLE `pemilik_hewan`
MODIFY `Id_Pemilik` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
MODIFY `Id_Penyakit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
MODIFY `Id_RekamMedis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tenagamedis`
--
ALTER TABLE `tenagamedis`
MODIFY `Id_TenagaMedis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
MODIFY `Id_Tindakan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
