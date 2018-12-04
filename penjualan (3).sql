-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Apr 2018 pada 14.55
-- Versi Server: 10.1.24-MariaDB
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
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `no_telp_admin`, `email_admin`, `password_admin`) VALUES
('adm0001', 'Tester', 'Local Address', '08888888888', 'clay@gmail.com', '1997'),
('adm0002', 'una', 'jtw', '085736189260', 'una@gmail.com', 'una');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
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
-- Dumping data untuk tabel `buku`
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
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `no_transaksi` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `jumlah_beli` int(3) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(3) NOT NULL,
  `nama_kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('BSS', 'Business'),
('CKG', 'Cooking'),
('SCN', 'Science');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
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
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `no_telp_pelanggan`, `email_pelanggan`, `password_pelanggan`) VALUES
('PL0001', 'Har', 'JTW', '0857114444', 'test@tester.com', 'asd'),
('PL0002', 'nama lengkap', 'jauh', '08765422', 'test2@tester.co', 'password'),
('PL0003', 'rizaldi', 'bekasi', '08765422999', 'rizaldi@gmail.c', '1818'),
('PL0004', 'nama lengkap', 'alamat', '0986754', 'email@fmail', 'password');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(10) NOT NULL,
  `tgl_beli` date NOT NULL,
  `total_bayar` double NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `status_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `tgl_beli`, `total_bayar`, `id_pelanggan`, `status_pembayaran`) VALUES
('TR0001', '2017-11-26', 282000, 'PL0001', 'Payment Confirmed'),
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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
