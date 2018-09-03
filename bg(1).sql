-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 04:54 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(1) NOT NULL,
  `akses` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `akses`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_box`
--

CREATE TABLE `tb_box` (
  `id_box` int(11) NOT NULL,
  `ukuran_box` varchar(20) NOT NULL,
  `stok_box` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_box`
--

INSERT INTO `tb_box` (`id_box`, `ukuran_box`, `stok_box`) VALUES
(1, '44x40x95', 1),
(2, '41x38x60', 12),
(3, '30x27x45', 999),
(4, '44x41x90', 4),
(5, '28x25x45', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `nominal_pembayaran` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `tanggal_pembayaran`, `bukti_pembayaran`, `nominal_pembayaran`, `id_pemesanan`) VALUES
(4, '2016-12-22', '8406628_orig.png', 500000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `id_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `id_user`, `id_produk`, `tgl_pesan`, `id_status`) VALUES
(9, 'ika', 3, '2016-12-20', 4),
(10, 'cremeh', 3, '2016-12-21', 1),
(13, 'cremeh', 4, '2016-12-22', 1),
(14, 'ika', 3, '2016-12-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `jenis_sound` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `daya` varchar(20) NOT NULL,
  `jumlah_speaker` int(2) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_speaker` int(11) NOT NULL,
  `id_trafo` int(11) NOT NULL,
  `id_box` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `jenis_sound`, `warna`, `daya`, `jumlah_speaker`, `kategori`, `harga`, `gambar`, `id_speaker`, `id_trafo`, `id_box`) VALUES
(3, 'aktif', 'biru', '150 watt', 1, 'single', 500000, 'get.png', 1, 1, 5),
(4, 'aktif', 'hitam', '300 watt', 1, 'single', 1800000, 'WhatsApp Image 2016-12-19 at 14.05.38.jpeg', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_speaker`
--

CREATE TABLE `tb_speaker` (
  `id_speaker` int(11) NOT NULL,
  `ukuran_speaker` varchar(20) NOT NULL,
  `stok_speaker` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_speaker`
--

INSERT INTO `tb_speaker` (`id_speaker`, `ukuran_speaker`, `stok_speaker`) VALUES
(1, '8 inc', 94),
(2, '10 inc', 18),
(3, '12 inc', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(2) NOT NULL,
  `nama_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `nama_status`) VALUES
(1, 'Belum Disetujui'),
(2, 'Menungu Pembayaran'),
(3, 'proses pembuatan'),
(4, 'Proses Pengiriman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trafo`
--

CREATE TABLE `tb_trafo` (
  `id_trafo` int(11) NOT NULL,
  `ukuran_trafo` varchar(20) NOT NULL,
  `stok_trafo` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_trafo`
--

INSERT INTO `tb_trafo` (`id_trafo`, `ukuran_trafo`, `stok_trafo`) VALUES
(1, '5 A', 99),
(2, '10 A', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `alamat`, `password`, `id_akses`) VALUES
('admin', 'Admin', 'ahmad@gmail.com', 'Jl. Jawa VII', '21232f297a57a5a743894a0e4', 1),
('cremeh', 'cremeh', 'ika@gmail.com', 'cremeh', 'd4089db6d22f2359f5d515342', 2),
('ika', 'Nasyika', 'dnasyika@gmail.com', 'Jl. Jawa 2 no. 26 ', '68bc655e74400bd2eb68ed0f6', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_box`
--
ALTER TABLE `tb_box`
  ADD PRIMARY KEY (`id_box`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_speaker` (`id_speaker`),
  ADD KEY `id_trafo` (`id_trafo`),
  ADD KEY `id_box` (`id_box`);

--
-- Indexes for table `tb_speaker`
--
ALTER TABLE `tb_speaker`
  ADD PRIMARY KEY (`id_speaker`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_trafo`
--
ALTER TABLE `tb_trafo`
  ADD PRIMARY KEY (`id_trafo`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id hak akses` (`id_akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_box`
--
ALTER TABLE `tb_box`
  MODIFY `id_box` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_speaker`
--
ALTER TABLE `tb_speaker`
  MODIFY `id_speaker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `tb_pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`),
  ADD CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_pemesanan_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_box`) REFERENCES `tb_box` (`id_box`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`id_trafo`) REFERENCES `tb_trafo` (`id_trafo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_3` FOREIGN KEY (`id_speaker`) REFERENCES `tb_speaker` (`id_speaker`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `tb_akses` (`id_akses`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
