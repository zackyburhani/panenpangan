-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2018 at 05:38 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panenpangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
('1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` char(5) NOT NULL DEFAULT '',
  `nm_brg` varchar(50) DEFAULT NULL,
  `stok` varchar(11) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `ongkir` decimal(10,2) NOT NULL,
  `rating` varchar(5) DEFAULT NULL,
  `gambar_barang` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` char(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nm_brg`, `stok`, `harga`, `ongkir`, `rating`, `gambar_barang`, `deskripsi`, `id_kategori`) VALUES
('BR001', 'Beras Merah', '3333', '2323.00', '232.00', '1', 'f0296ae400862ec1c9b42ab6dd2156ef.png', 'edit deskripsi barang', 'KT001');

-- --------------------------------------------------------

--
-- Table structure for table `detil_barang`
--

CREATE TABLE `detil_barang` (
  `id_brg` char(5) NOT NULL DEFAULT '',
  `id_petani` char(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detil_pesan`
--

CREATE TABLE `detil_pesan` (
  `id_pesan` char(5) NOT NULL DEFAULT '',
  `id_brg` char(5) NOT NULL DEFAULT '',
  `qty` int(11) NOT NULL,
  `harga_total` decimal(10,2) NOT NULL,
  `poin` decimal(10,2) NOT NULL,
  `status` enum('Dalam Perjalanan','Selesai') NOT NULL,
  `status_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_pesan`
--

INSERT INTO `detil_pesan` (`id_pesan`, `id_brg`, `qty`, `harga_total`, `poin`, `status`, `status_bayar`) VALUES
('PS001', 'BR001', 23, '20000.00', '12.00', 'Selesai', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` char(5) NOT NULL DEFAULT '',
  `nm_kategori` varchar(50) DEFAULT NULL,
  `gambar_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `gambar_kategori`) VALUES
('KT001', 'Beras', '977f874699d5acfd95c93497f0e26f0a.jpg'),
('KT002', 'Sayuran', '3d6d9d36b3b40792f0b52a3012bd8c1e.jpg'),
('KT003', 'Buah-buahan', 'b78cb5bf1d08ebb84d6b15e8e6153a1c.jpg'),
('KT004', 'Rempah-rempah', '1beafee80fc0b8f649d80c37ae8da624.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `nm_plg` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `nm_plg`, `email`, `password`) VALUES
('zackyburhani', 'Zacky Burhani', 'zackyburhani99@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_plg` char(5) NOT NULL DEFAULT '',
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kodepos` varchar(5) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` char(5) NOT NULL DEFAULT '',
  `tgl_pesan` date DEFAULT NULL,
  `username` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `tgl_pesan`, `username`) VALUES
('PS001', '2018-05-01', 'zackyburhani'),
('PS002', '2018-05-09', 'zackyburhani');

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE `petani` (
  `id_petani` char(5) NOT NULL DEFAULT '',
  `nm_petani` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`id_petani`, `nm_petani`, `tgl_lahir`, `alamat`, `no_telp`) VALUES
('PT001', 'Zacky burhani H', '2018-04-02', 'Jakarta', '083817774827'),
('PT002', 'Sisca Agdinsa Ramadhan', '2018-04-10', 'Tangerang', '083817774827'),
('PT003', 'Aldis Fakhri ', '2018-04-10', 'Pamulang', '083891882911');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `detil_barang`
--
ALTER TABLE `detil_barang`
  ADD KEY `id_brg` (`id_brg`),
  ADD KEY `id_petani` (`id_petani`);

--
-- Indexes for table `detil_pesan`
--
ALTER TABLE `detil_pesan`
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_brg` (`id_brg`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_plg`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id_petani`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `detil_barang`
--
ALTER TABLE `detil_barang`
  ADD CONSTRAINT `detil_barang_ibfk_1` FOREIGN KEY (`id_brg`) REFERENCES `barang` (`id_brg`),
  ADD CONSTRAINT `detil_barang_ibfk_2` FOREIGN KEY (`id_petani`) REFERENCES `petani` (`id_petani`);

--
-- Constraints for table `detil_pesan`
--
ALTER TABLE `detil_pesan`
  ADD CONSTRAINT `detil_pesan_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id_pesan`),
  ADD CONSTRAINT `detil_pesan_ibfk_2` FOREIGN KEY (`id_brg`) REFERENCES `barang` (`id_brg`);

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
