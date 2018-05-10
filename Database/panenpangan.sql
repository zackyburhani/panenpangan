-- phpMyAdmin SQL Dump
-- version 4.8.0
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

CREATE DATABASE panenpangan;

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
('BR001', 'kangkung', '12', '120000.00', '10000.00', '3', 'cf2365dc2a77653b2b21457c2afdf7e7.jpg', 'baru di petik boss', 'KT001'),
('BR002', 'apel', '9', '400000.00', '17000.00', '5', 'bf15828729299da01e03ed74a8654e73.jpg', 'masih seger banget nih', 'KT002'),
('BR003', 'beras raskin', '50', '500000.00', '30000.00', '4', '943a931c439c6556a00b84cc048c92b6.jpg', 'lumayan pulen kok', 'KT001'),
('BR004', 'asdas', '1231', '123.00', '123.00', '1', 'e92559120bde703bd46259890f6a90e6.jpg', 'sdasdasd', 'KT001'),
('BR005', 'sdfd', '134', '234.00', '23423.00', '1', '0cfea618cb5103fcb1a55df6fd605d46.jpg', 'dsfdf', 'KT001'),
('BR006', 'efdf', '234', '234.00', '234234.00', '1', 'd90fd18a30c2a0bcc327b3602878806f.jpg', 'sdfdf', 'KT002'),
('BR007', 'apel jawa', '19', '20000.00', '10000.00', '4', '34f9caff515d6d124b6b791f4e8759f1.jpg', 'baru metik', 'KT002');

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
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `detil_pesan`
--

INSERT INTO `detil_pesan` (`id_pesan`, `id_brg`, `qty`, `harga_total`, `poin`, `status`, `status_bayar`) VALUES
('PS001', 'BR006', 1, '234.00', '0.00', 'Dalam Perjalanan','Lunas');

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
('KT001', 'Sayuran', '7da8e4b95b78a4d9acd493a5fb8bfd4d.jpg'),
('KT002', 'buah-buahan', 'f03326f14bbe66c241b7af10d4c2a611.jpg'),
('KT003', 'beras', '84afbe4dd43ed7690b9a2b6f1fec9c0f.jpg');

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
('zackyburhani', 'Zacky Burhani', 'zackyburhani99@gmail.com', '202cb962ac59075b964b07152d234b70'),
('lutviarfi', 'lutvi', 'lutvi04@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
('paijo', 'paijo', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

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
('PS002', '2018-05-09', 'zackyburhani'),
('PS003', '2018-05-06', 'lutviarfi'),
('PS004', '2018-05-06', 'lutviarfi'),
('PS005', '2018-05-06', 'lutviarfi'),
('PS006', '2018-05-06', 'lutviarfi'),
('PS007', '2018-05-06', 'lutviarfi'),
('PS008', '2018-05-06', 'lutviarfi'),
('PS009', '2018-05-06', 'paijo'),
('PS010', '2018-05-07', 'lutviarfi');

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
('PT001', 'aldis', '2020-06-01', 'jakarta', '08976543');

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
  ADD PRIMARY KEY (`id_pesan`),
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
