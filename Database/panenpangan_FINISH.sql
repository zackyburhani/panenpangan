-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2018 at 12:38 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
('BR001', 'Beras Merah', '90', '100000.00', '20000.00', '4', 'c6a3d6878711ce77f4d09f18e28c9915.jpg', 'Beras Merah Asli Jawa Barat', 'KT001'),
('BR002', 'Beras Raskin', '70', '90000.00', '20000.00', '1', '14fdf76d1c107bddc62d494b682e6d7e.jpg', 'Beras Raskin Mantap', 'KT001'),
('BR003', 'Beras ', '40', '88000.00', '15000.00', '3', 'e557220b95cca640de23bc7dd369f447.jpg', 'Beras Original', 'KT001'),
('BR004', 'Apel', '80', '20000.00', '10000.00', '5', 'f4241b16a31fb095cac572765e7ff90f.jpg', 'Apel Merah', 'KT002'),
('BR005', 'Mangga', '20', '15000.00', '15000.00', '4', 'bde6c1cfbc2eeb6a48d6534c17e42e9f.jpeg', 'Mangga Bogor', 'KT002'),
('BR006', 'Jeruk Bali', '70', '50000.00', '25000.00', '4', '9e07b72d23a53204c178d5701d0e55bf.jpeg', 'Jeruk Bali alsi impor dari Bali', 'KT002'),
('BR007', 'Wortel', '88', '25000.00', '100000.00', '1', '94778ebb88125bbcd5ccc8b2802977c3.jpg', 'Wortel sehat', 'KT003'),
('BR008', 'Pare', '20', '10000.00', '10000.00', '1', 'fc59e1a5fec5f6f93de7f7fa698c7516.jpg', 'Pare asli', 'KT003'),
('BR009', 'Cabai', '15', '17000.00', '5000.00', '3', '0e3ca93d4b5309df789549a14484c203.jpg', 'Cabai Asli', 'KT003'),
('BR010', 'Jengkol', '20', '25000.00', '10000.00', '5', 'ce6996874ce3b34133477c921006ac74.jpeg', 'Jengkol buat semur', 'KT003'),
('BR011', 'Bawang Merah', '20', '15000.00', '7000.00', '3', '9eadc09c6a02cd42dd6f2b06cd53e7a6.jpg', 'Bawang merah murah meriah', 'KT004'),
('BR012', 'Bawang Putih', '10', '17000.00', '7000.00', '5', '94d2410d4cbbc68fab30b2f2dc6e3e76.jpeg', 'Bawang Putih Murah meriah', 'KT004'),
('BR013', 'Kayu Manis', '5', '15000.00', '8000.00', '1', '6db15d204d9ae4cde409a1cfce338069.jpeg', 'Kayu manis untuk keperluan bumbu dapur', 'KT004'),
('BR014', 'Jahe', '80', '10000.00', '5000.00', '1', '133556af00d1327293c4884149dcb8e6.jpeg', 'Jahe asli', 'KT004');

-- --------------------------------------------------------

--
-- Table structure for table `detil_barang`
--

CREATE TABLE `detil_barang` (
  `id_brg` char(5) NOT NULL DEFAULT '',
  `id_petani` char(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_barang`
--

INSERT INTO `detil_barang` (`id_brg`, `id_petani`) VALUES
('BR001', 'PT002'),
('BR002', 'PT002'),
('BR003', 'PT001'),
('BR004', 'PT001'),
('BR005', 'PT001'),
('BR006', 'PT003'),
('BR007', 'PT003'),
('BR008', 'PT004'),
('BR009', 'PT004'),
('BR010', 'PT004'),
('BR011', 'PT005'),
('BR012', 'PT005'),
('BR013', 'PT005'),
('BR014', 'PT005');

-- --------------------------------------------------------

--
-- Table structure for table `detil_pesan`
--

CREATE TABLE `detil_pesan` (
  `id_pesan` char(5) NOT NULL DEFAULT '',
  `id_brg` char(5) NOT NULL DEFAULT '',
  `qty` int(11) NOT NULL,
  `harga_total` decimal(10,2) NOT NULL,
  `poin` int(10) NOT NULL,
  `status` enum('Dalam Perjalanan','Selesai') NOT NULL,
  `status_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_pesan`
--

INSERT INTO `detil_pesan` (`id_pesan`, `id_brg`, `qty`, `harga_total`, `poin`, `status`, `status_bayar`) VALUES
('PS002', 'BR008', 6, '60000.00', 1, 'Selesai', 'Lunas'),
('PS004', 'BR004', 2, '40000.00', 0, 'Dalam Perjalanan', 'Belum Bayar'),
('PS005', 'BR005', 3, '45000.00', 1, 'Dalam Perjalanan', 'Lunas'),
('PS006', 'BR006', 2, '100000.00', 0, 'Selesai', 'Belum Bayar');

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
('KT001', 'Beras', '9276e2ae7b23d7df652d7765b0e6db5f.jpg'),
('KT002', 'Buah-buahan', '797770b43f183ff93949e35fcea92acb.jpg'),
('KT003', 'Sayuran', '7e4ace4964e014b90a61ce23deb0c999.jpg'),
('KT004', 'Rempah-rempah', '44cd8b7d2d399c95ac8ac6b38a2a39a1.jpeg');

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
('zackyburhani', 'Zacky Burhani Hotib', 'zackyburhani99@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

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

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_plg`, `no_telp`, `alamat`, `kodepos`, `username`) VALUES
('PL001', '083891778181', 'Jakarta', '15226', 'zackyburhani');

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
('PS002', '2018-05-20', 'zackyburhani'),
('PS004', '2018-05-20', 'zackyburhani'),
('PS005', '2018-05-20', 'zackyburhani'),
('PS006', '2018-05-20', 'zackyburhani');

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
('PT001', 'aldis', '2020-06-01', 'jakarta', '08976543'),
('PT002', 'Widya Pramesti', '1997-09-09', 'Pamulang', '083891778181'),
('PT003', 'Luthfi', '1998-08-08', 'Ciledug', '08381777499'),
('PT004', 'Zacky burhani  Hotib', '1997-09-09', 'Jakarta', '083891888014'),
('PT005', 'Andy Chahyono', '1997-08-08', 'Cipadu', '083829281918'),
('PT006', 'Lini Masa', '1998-03-03', 'Ciputat', '08976767676');

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
