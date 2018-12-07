-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 04:45 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(35) NOT NULL,
  `alamat_admin` text NOT NULL,
  `no_telp_admin` varchar(13) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `no_telp_admin`, `email_admin`, `password_admin`) VALUES
('adm0001', 'Tester', 'Local Address', '08888888888', 'clay@gmail.com', '1997'),
('adm0002', 'una', 'jtw', '085736189260', 'una@gmail.com', 'una');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `harga_buku` int(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` text NOT NULL,
  `id_kategori` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `harga_buku`, `stok`, `gambar`, `id_kategori`) VALUES
('BS0001', 'Etika Bisnis', 55000, 4, 'b1.jpg', 'BSS'),
('BS0002', '17 Strategi Sukses Pengusaha Pemula', 80000, 10, 'images.jpg', 'BSS'),
('CKG0001', '500 Resep Kue & Masakan', 50000, 5, 'masak1.jpg', 'CKG'),
('CKG0002', '1200 Resep Masakan & Kue Legendaris', 60000, 6, 'masak2.jpg', 'CKG'),
('SC0001', 'S Experiments YCE', 78000, 8, 's1.jpg', 'SCN'),
('SC0002', 'Science Lv. Red', 102000, 13, 's8.jpg', 'SCN');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `no_transaksi` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `jumlah_beli` int(3) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`no_transaksi`, `id_buku`, `jumlah_beli`, `subtotal`) VALUES
('TR0001', 'SC0001', 1, 78000),
('TR0001', 'SC0002', 2, 204000),
('TR0002', 'SC0001', 1, 78000),
('TR0003', 'SC0002', 4, 408000),
('TR0004', 'BS0001', 2, 110000),
('TR0005', 'BS0001', 1, 55000),
('TR0006', 'SC0001', 1, 78000),
('TR0007', 'BS0001', 1, 55000),
('TR0008', 'BS0001', 2, 110000),
('TR0008', 'SC0001', 1, 78000),
('TR0009', 'BS0002', 1, 80000),
('TR0009', 'CKG0002', 1, 60000),
('TR0010', 'BS0001', 2, 110000),
('TR0010', 'CKG0001', 1, 50000),
('TR0011', 'BS0002', 1, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` varchar(30) NOT NULL,
  `nama_item` varchar(300) NOT NULL,
  `harga_item` double NOT NULL,
  `stok` int(5) NOT NULL,
  `gambar` text NOT NULL,
  `id_kategori` varchar(4) NOT NULL,
  `jenis_item` varchar(255) DEFAULT NULL,
  `model_item` varchar(255) DEFAULT NULL,
  `tipe_item` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `nama_item`, `harga_item`, `stok`, `gambar`, `id_kategori`, `jenis_item`, `model_item`, `tipe_item`) VALUES
('ITK001AMDAM4A1003', 'AMD Bristol Ridge A10-9700 (Radeon R7 Series) 3.5Ghz Up To 3.8Ghz Cache 2MB 65W Socket AM4 [Box] - 4 Core - AD9700AGABBOXï¿½', 1085000, 50, '', 'K001', 'AMD', 'AM4', 'A10'),
('ITK001AMDAM4A1202', 'AMD Bristol Ridge A12-9800 (Radeon R7 Series) 3.8Ghz Up To 4.2Ghz Cache 2MB 65W Socket AM4 [Box] - 4 Core - AD9800AUABBOX ', 1335000, 50, '', 'K001', 'AMD', 'AM4', 'A12'),
('ITK001AMDAM4A200GE06', 'AMD Athlon 200GE (Radeon Vega 3) 3.2Ghz Cache 4MB 35W Socket AM4 [BOX] - 2 Core - YD200GC6FBBOX ', 850000, 50, '', 'K001', 'AMD', 'AM4', 'A200GE'),
('ITK001AMDAM4A605', 'AMD Bristol Ridge A6-9500 (Radeon R5 Series) 3.5Ghz Up To 3.8Ghz Cache 1MB 65W Socket AM4 [Box] - 3 Core - AD9500AGABBOX ', 625000, 50, '', 'K001', 'AMD', 'AM4', 'A6'),
('ITK001AMDAM4A804', 'AMD Bristol Ridge A8-9600 (Radeon R7 Series) 3.1Ghz Up To 3.4Ghz Cache 2MB 65W Socket AM4 [Box] - 4 Core - AD9600AGABBOX Ready Stock!!!', 785000, 50, '', 'K001', 'AMD', 'AM4', 'A8'),
('ITK001AMDAM4AX401', 'AMD Bristol Ridge Athlon X4 950 3.5Ghz Up To 3.8Ghz Cache 2MB 45W/65W Socket AM4 [Box] - 4 Core - AD950XAGABBOX ', 831000, 50, '', 'K001', 'AMD', 'AM4', 'AX4'),
('ITK001AMDAM4R301', 'AMD Ryzen 3 Raven Ridge 2200G 3.5Ghz Up To 3.7Ghz Cache 4MB 65W AM4 [Box] - 4 Core - YD2200C5FBBOX - With AMD Wraith Stealth 65W Cooler Ready Stock!!!', 1500000, 50, '', 'K001', 'AMD', 'AM4', 'R3'),
('ITK001AMDAM4R302', 'AMD Ryzen 3 1200 3.1Ghz Up To 3.4Ghz Cache 8MB 65W AM4 [Box] - 4 Core - YD1200BBAEBOX - With AMD Wraith Stealth 65W Cooler Ready Stock!!!', 1420000, 50, '', 'K001', 'AMD', 'AM4', 'R3'),
('ITK001AMDAM4R501', 'AMD Ryzen 5 Pinnacle Ridge 2600X 3.6Ghz Up To 4.2Ghz Cache 16MB 95W AM4 [Box] - 6 Core - YD260XBCAFBOX - With AMD Wraith Spire Cooler Ready Stock!!!', 3450000, 50, '', 'K001', 'AMD', 'AM4', 'R5'),
('ITK001AMDAM4R502', 'AMD Ryzen 5 Pinnacle Ridge 2600 3.4Ghz Up To 3.9Ghz Cache 16MB 65W AM4 [Box] - 6 Core - YD2600BBAFBOX - With AMD Wraith Stealth Cooler Ready Stock!!!', 2970000, 50, '', 'K001', 'AMD', 'AM4', 'R5'),
('ITK001AMDAM4R503', 'AMD Ryzen 5 1600X 3.6Ghz Up To 4.0Ghz Cache 16MB 95W AM4 [Box] - 6 Core - YD160XBCAEWOF ', 2930000, 50, '', 'K001', 'AMD', 'AM4', 'R5'),
('ITK001AMDAM4R504', 'AMD Ryzen 5 1600 3.2Ghz Up To 3.6Ghz Cache 16MB 65W AM4 [Box] - 6 Core - YD1600BBAEBOX - With AMD Wraith Spire 95W Cooler Ready Stock!!!', 2575000, 50, '', 'K001', 'AMD', 'AM4', 'R5'),
('ITK001AMDAM4R505', 'AMD Ryzen 5 Raven Ridge 2400G 3.6Ghz Up To 3.9Ghz Cache 4MB 65W AM4 [Box] - 4 Core - YD2400C5FBBOX - With AMD Wraith Stealth 65W Cooler Ready Stock!!!', 2410000, 50, '', 'K001', 'AMD', 'AM4', 'R5'),
('ITK001AMDAM4R701', 'AMD Ryzen 7 1800X 3.6Ghz Up To 4.0Ghz Cache 16MB 95W AM4 [Box] - 8 Core - YD180XBCAEWOF ', 4965000, 50, '', 'K001', 'AMD', 'AM4', 'R7'),
('ITK001AMDAM4R702', 'AMD Ryzen 7 Pinnacle Ridge 2700X 3.7Ghz Up To 4.3Ghz Cache 16MB 105W AM4 [Box] - 8 Core - YD270XBGAFBOX - With AMD Wraith Prism Cooler Ready Stock!!!', 5080000, 50, '', 'K001', 'AMD', 'AM4', 'R7'),
('ITK001AMDAM4R703', 'AMD Ryzen 7 Pinnacle Ridge 2700 3.2Ghz Up To 4.1Ghz Cache 16MB 65W AM4 [Box] - 8 Core - YD2700BBAFBOX - With AMD Wraith Spire Cooler ', 4850000, 50, '', 'K001', 'AMD', 'AM4', 'R7'),
('ITK001AMDAM4R704', 'AMD Ryzen 7 1700X 3.4Ghz Up To 3.8Ghz Cache 16MB 95W AM4 [Box] - 8 Core - YD170XBCAEWOF ', 4265000, 50, '', 'K001', 'AMD', 'AM4', 'R7'),
('ITK001AMDAM4R705', 'AMD Ryzen 7 1700 3.0Ghz Up To 3.7Ghz Cache 16MB 65W AM4 [Box] - 8 Core - YD1700BBAEBOX - With AMD Wraith Spire Cooler ', 3880000, 50, '', 'K001', 'AMD', 'AM4', 'R7'),
('ITK001AMDTR41900X 07', 'AMD Ryzen Threadripper 1900X 3.8Ghz Up To 4.0Ghz Cache 16MB 180W TR4 [Box] - 8 Core - YD190XA8AEWOF ', 7940000, 50, '', 'K001', 'AMD', 'TR4', '1900X '),
('ITK001AMDTR41920X 06', 'AMD Ryzen Threadripper 1920X 3.5Ghz Up To 4.0Ghz Cache 32MB 180W TR4 [Box] - 12 Core - YD192XA8AEWOF ', 13440000, 50, '', 'K001', 'AMD', 'TR4', '1920X '),
('ITK001AMDTR41950X 05', 'AMD Ryzen Threadripper 1950X 3.4Ghz Up To 4.0Ghz Cache 32MB 180W TR4 [Box] - 16 Core - YD195XA8AEWOF ', 15240000, 50, '', 'K001', 'AMD', 'TR4', '1950X '),
('ITK001AMDTR42920X 04', 'AMD Ryzen Threadripper 2920X 3.5Ghz Up To 4.3Ghz Cache 32MB 180W TR4 [Box] - 16 Core - YD292XA8AFWOF ', 10700000, 50, '', 'K001', 'AMD', 'TR4', '2920X '),
('ITK001AMDTR42950X 03', 'AMD Ryzen Threadripper 2950X 3.5Ghz Up To 4.4Ghz Cache 32MB 180W TR4 [Box] - 16 Core - YD295XA8AFWOF ', 14799000, 50, '', 'K001', 'AMD', 'TR4', '2950X '),
('ITK001AMDTR42970WX02', 'AMD Ryzen Threadripper 2970WX 3.0Ghz Up To 4.2Ghz Cache 64MB 180W TR4 [Box] - 16 Core - YD297XAZAFWOF ', 21400000, 50, '', 'K001', 'AMD', 'TR4', '2970WX'),
('ITK001AMDTR42990WX01', 'AMD Ryzen Threadripper 2990WX 3.4Ghz Up To 4.0Ghz Cache 64MB 250W TR4 [Box] - 32 Core - YD299XAZAFWOF ', 28899000, 50, '', 'K001', 'AMD', 'TR4', '2990WX'),
('ITK001INTEL2066i501', 'Intel Core i5-7640X 4.0Ghz Up To 4.2Ghz - Cache 6MB [Box] Socket LGA 2066 - Kabylake-X Series ', 3915000, 50, '', 'K001', 'INTEL', 'LGA 2066', 'i5'),
('ITK001INTEL2066i701', 'Intel Core i7-7740X 4.3Ghz Up To 4.5Ghz - Cache 8MB [Box] Socket LGA 2066 - Kabylake-X Series ', 5710000, 50, '', 'K001', 'INTEL', 'LGA 2066', 'i7'),
('ITK001INTEL2066i702', 'Intel Core i7-7820X 3.6Ghz Up To 4.3Ghz - Cache 11MB [Box] Socket LGA 2066 - Skylake-X Series ', 9830000, 50, '', 'K001', 'INTEL', 'LGA 2066', 'i7'),
('ITK001INTEL2066i703', 'Intel Core i7-7800X 3.5Ghz Up To 4.0Ghz - Cache 8.25MB [Box] Socket LGA 2066 - Skylake-X Series ', 6380000, 50, '', 'K001', 'INTEL', 'LGA 2066', 'i7'),
('ITK001INTEL2066i901', 'Intel Core i9-7980XE 2.6Ghz Up To 4.2Ghz - Cache 24.75MB [Box] Socket LGA 2066 - Skylake-X Series ', 32675000, 50, '', 'K001', 'INTEL', 'LGA 2066', 'i9'),
('ITK001INTEL2066i902', 'Intel Core i9-7960X 2.8Ghz Up To 4.2Ghz - Cache 22MB [Box] Socket LGA 2066 - Skylake-X Series ', 23975000, 50, '', 'K001', 'INTEL', 'LGA 2066', 'i9'),
('ITK001INTEL2066i903', 'Intel Core i9-7940X 3.1Ghz Up To 4.3Ghz - Cache 19.25MB [Box] Socket LGA 2066 - Skylake-X Series ', 19575000, 50, '', 'K001', 'INTEL', 'LGA 2066', 'i9'),
('ITK001INTEL2066i904', 'Intel Core i9-7920X 2.9Ghz Up To 4.3Ghz - Cache 16.5MB [Box] Socket LGA 2066 - Skylake-X Series ', 17340000, 50, '', 'K001', 'INTEL', 'LGA 2066', 'i9'),
('ITK001INTEL2066i905', 'Intel Core i9-7900X 3.3Ghz Up To 4.3Ghz - Cache 13.75MB [Box] Socket LGA 2066 - Skylake-X Series ', 16365000, 50, '', 'K001', 'INTEL', 'LGA 2066', 'i9'),
('ITK002GALAXGT103001', 'GALAX Geforce GT 1030 2GB DDR4 Ready Stock!!!', 1260000, 50, '', 'K002', 'GALAX', 'GT', '1030'),
('ITK002GALAXGT73002', 'GALAX GeForce GT 730 2GB DDR3 - Garansi 2 Thn ', 820000, 50, '', 'K002', 'GALAX', 'GT', '730'),
('ITK002GALAXGTX105014', 'GALAX Geforce GTX 1050 Ti 4GB DDR5 - EXOC (EXTREME OVERCLOCK) - Dual Fan - Garansi 2 Thn - Promo Christmas !!! Free Galax SSD 120GB Ready Stock!!!', 2650000, 50, '', 'K002', 'GALAX', 'GTX', '1050'),
('ITK002GALAXGTX105015', 'GALAX Geforce GTX 1050 Ti 4GB DDR5 - OC - Single Fan - Garansi 2 Thn ', 2850000, 50, '', 'K002', 'GALAX', 'GTX', '1050'),
('ITK002GALAXGTX105016', 'GALAX Geforce GTX 1050 2GB DDR5 OC (OVERCLOCK) - Garansi 2 Thn Ready Stock!!!', 2090000, 50, '', 'K002', 'GALAX', 'GTX', '1050'),
('ITK002GALAXGTX106011', 'GALAX Geforce GTX 1060 6GB DDR5 EXOC (EXTREME OVERCLOCK) White Version - Garansi 2 Thn - Promo November!!! Ready Stock!!!', 4090000, 50, '', 'K002', 'GALAX', 'GTX', '1060'),
('ITK002GALAXGTX106012', 'GALAX Geforce GTX 1060 6GB DDR5 OC (OVERCLOCK) - Garansi 2 Thn - Promo November!!! Ready Stock!!!', 3990000, 50, '', 'K002', 'GALAX', 'GTX', '1060'),
('ITK002GALAXGTX106013', 'GALAX Geforce GTX 1060 3GB DDR5 OC (OVERCLOCK) - Garansi 2 Thn ', 3300000, 50, '', 'K002', 'GALAX', 'GTX', '1060'),
('ITK002GALAXGTX107006', 'GALAX GeForce GTX 1070 Ti 8GB DDR5 HOF (HALL OF FAME) - Triple Fan - Garansi 2 Thn ', 9500000, 50, '', 'K002', 'GALAX', 'GTX', '1070'),
('ITK002GALAXGTX107007', 'GALAX Geforce GTX 1070 Ti 8GB DDR5 EX EXTREME SNIPER VERSION - Garansi 2 Thn ', 8500000, 50, '', 'K002', 'GALAX', 'GTX', '1070'),
('ITK002GALAXGTX107008', 'GALAX Geforce GTX 1070 Ti 8GB DDR5 EX EXTREME - DUAL FAN - Garansi 2 Thn ', 7950000, 50, '', 'K002', 'GALAX', 'GTX', '1070'),
('ITK002GALAXGTX107009', 'GALAX GeForce GTX 1070 8GB DDR5 HOF (HALL OF FAME) - Triple Fan - Garansi 2 Thn ', 7450000, 50, '', 'K002', 'GALAX', 'GTX', '1070'),
('ITK002GALAXGTX107010', 'GALAX Geforce GTX 1070 8GB DDR5 EX EXTREME - Dual Fan - Garansi 2 Thn ', 8900000, 50, '', 'K002', 'GALAX', 'GTX', '1070'),
('ITK002GALAXGTX108001', 'GALAX Geforce GTX 1080 Ti 11GB DDR5X 352 Bit HOF (HALL OF FAME) - With LCD Display ', 14200000, 50, '', 'K002', 'GALAX', 'GTX', '1080'),
('ITK002GALAXGTX108002', 'GALAX Geforce GTX 1080 Ti 11GB DDR5X 352 Bit EXOC (EXTREME OVERCLOCK) ', 12500000, 50, '', 'K002', 'GALAX', 'GTX', '1080'),
('ITK002GALAXGTX108003', 'GALAX Geforce GTX 1080 8GB DDR5X HOF (HALL OF FAME) - Triple Fan - Garansi 2 Thn ', 9600000, 50, '', 'K002', 'GALAX', 'GTX', '1080'),
('ITK002GALAXGTX108004', 'GALAX Geforce GTX 1080 8GB DDR5X EXOC SNIPER VERSION - Dual Fan - Garansi 2 Thn ', 9450000, 50, '', 'K002', 'GALAX', 'GTX', '1080'),
('ITK002GALAXGTX108005', 'GALAX GeForce GTX 1080 8GB DDR5X EXOC (EXTREME OVERCLOCK) - Dual Fan - Garansi 2 Thn ', 9150000, 50, '', 'K002', 'GALAX', 'GTX', '1080'),
('ITK002GALAXRTX207004', 'GALAX Geforce RTX 2070 8GB DDR6 EX EXTREME - DUAL FAN - Garansi 2 Thn Ready Stock!!!', 9850000, 50, '', 'K002', 'GALAX', 'RTX', '2070'),
('ITK002GALAXRTX207005', 'GALAX Geforce RTX 2070 8GB DDR6 EX (1-Click OC) - DUAL FAN - Garansi 2 Thn Ready Stock!!!', 9250000, 50, '', 'K002', 'GALAX', 'RTX', '2070'),
('ITK002GALAXRTX208001', 'GALAX Geforce RTX 2080 Ti 11GB DDR6 SG Edition - Triple Fan - Garansi 2 Thn Ready Stock!!!', 20200000, 50, '', 'K002', 'GALAX', 'RTX', '2080'),
('ITK002GALAXRTX208002', 'GALAX Geforce RTX 2080 8GB DDR6 SG Edition - Triple Fan - Garansi 2 Thn Ready Stock!!!', 14230000, 50, '', 'K002', 'GALAX', 'RTX', '2080'),
('ITK002GALAXRTX208003', 'GALAX Geforce RTX 2080 8GB DDR6 OC (OVERCLOCK) Twin Fan - Garansi 2 Thn Ready Stock!!!', 13800000, 50, '', 'K002', 'GALAX', 'RTX', '2080'),
('ITK002XFXRX46009', 'XFX Radeon RX 460 4GB DDR5 - Dual Fan - TRUE OC 1220MHZ - RX-460P4DFG5 - Garansi 2 Thn ', 1750000, 50, '', 'K002', 'XFX', 'RX', '460'),
('ITK002XFXRX46010', 'XFX Radeon RX 460 2GB DDR5 - Single Fan - TRUE OC 1220MHZ - RX-460P2SFG5 - Garansi 2 Thn ', 1450000, 50, '', 'K002', 'XFX', 'RX', '460'),
('ITK002XFXRX48008', 'XFX Radeon RX 480 4GB DDR5 - Dual Fan - TRUE OC 1266MHZ - RX-480P4LFB6 - Mining (Garansi 3 Bln) ', 3800000, 50, '', 'K002', 'XFX', 'RX', '480'),
('ITK002XFXRX55006', 'XFX Radeon RX 550 4GB DDR5 - RX-550P4SFG5 Ready Stock!!!', 1650000, 50, '', 'K002', 'XFX', 'RX', '550'),
('ITK002XFXRX55007', 'XFX Radeon RX 550 2GB DDR5 - RX-550P2SFG5 Ready Stock!!!', 1400000, 50, '', 'K002', 'XFX', 'RX', '550'),
('ITK002XFXRX560D04', 'XFX Radeon RX 560D 4GB DDR5 - RX-560D4SFG5 Ready Stock!!!', 1880000, 50, '', 'K002', 'XFX', 'RX', '560D'),
('ITK002XFXRX560D05', 'XFX Radeon RX 560D 2GB DDR5 - RX-560D2SFG5 ', 1650000, 50, '', 'K002', 'XFX', 'RX', '560D'),
('ITK002XFXRX57003', 'XFX Radeon RX 570 8GB DDR5 RS XXX Edition - RX-570P8DFD6 Ready Stock!!!', 3900000, 50, '', 'K002', 'XFX', 'RX', '570'),
('ITK002XFXRX58002', 'XFX Radeon RX 580 8GB DDR5 GTS XXX OC+ Dual Fan - RX-580P8DFD6 Ready Stock!!!', 4450000, 50, '', 'K002', 'XFX', 'RX', '580'),
('ITK002XFXRX59001', 'XFX Radeon RX 590 8GB DDR5 Fatboy 1600MHz OC+ Dual Fan - RX-590P8DFD6 Ready Stock!!!', 4850000, 50, '', 'K002', 'XFX', 'RX', '590');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(4) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('K001', 'Processor'),
('K002', 'VGA'),
('K003', 'Motherboard'),
('K004', 'RAM'),
('K005', 'CASING'),
('K006', 'HARDDISK'),
('K007', 'SSD');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `no_telp_pelanggan` varchar(13) NOT NULL,
  `email_pelanggan` varchar(15) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `no_telp_pelanggan`, `email_pelanggan`, `password_pelanggan`) VALUES
('PL0001', 'Har', 'JTW', '0857114444', 'test@tester.com', 'asd'),
('PL0002', 'nama lengkap', 'jauh', '08765422', 'test2@tester.co', 'password'),
('PL0003', 'rizaldi', 'bekasi', '08765422999', 'rizaldi@gmail.c', '1818'),
('PL0004', 'nama lengkap', 'alamat', '0986754', 'email@fmail', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(10) NOT NULL,
  `tgl_beli` date NOT NULL,
  `total_bayar` double NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `status_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `tgl_beli`, `total_bayar`, `id_pelanggan`, `status_pembayaran`) VALUES
('TR0001', '2017-11-26', 282000, 'PL0001', 'Confirmed By Admin'),
('TR0002', '2017-11-27', 78000, 'PL0001', 'Expired'),
('TR0003', '2017-12-05', 408000, 'PL0001', 'Payment Canceled'),
('TR0004', '2017-12-06', 110000, 'PL0001', 'Payment Confirmed'),
('TR0005', '2017-12-07', 55000, 'PL0001', 'Payment Confirmed'),
('TR0006', '2017-12-07', 78000, 'PL0001', 'Payment Confirmed'),
('TR0007', '2017-12-07', 55000, 'PL0001', 'Expired'),
('TR0008', '2017-12-08', 188000, 'PL0001', 'Payment Confirmed'),
('TR0009', '2017-12-10', 140000, 'PL0001', 'Payment Canceled'),
('TR0010', '2017-12-15', 160000, 'PL0001', 'Payment Canceled'),
('TR0011', '2017-12-15', 80000, 'PL0001', 'Payment Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD KEY `no_transaksi` (`no_transaksi`) USING BTREE,
  ADD KEY `id_buku` (`id_buku`) USING BTREE;

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`) USING BTREE,
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
