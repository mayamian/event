-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 02:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `nama_acara` varchar(30) DEFAULT NULL,
  `deskripsi` text,
  `tanggal_mulai` date DEFAULT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `waktu_akhir` time DEFAULT NULL,
  `gambar` varchar(125) DEFAULT NULL,
  `kategori_acara_idkategori_acara` int(11) NOT NULL,
  `jenis_acara_idjenis_acara` int(11) NOT NULL,
  `penyelenggara_id_penyelenggara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `nama_acara`, `deskripsi`, `tanggal_mulai`, `waktu_mulai`, `tanggal_akhir`, `waktu_akhir`, `gambar`, `kategori_acara_idkategori_acara`, `jenis_acara_idjenis_acara`, `penyelenggara_id_penyelenggara`) VALUES
(1, 'seminar', 'gfhgdfg', '2018-12-05', '08:00:00', '2018-12-05', '00:00:00', 'WhatsApp_Image_2018-10-10_at_22_25_21.jpeg', 2, 2, 1),
(2, 'Blocchain', 'sadzsdsdadsas', '2018-12-05', '06:00:00', '2018-12-05', '00:20:18', 'logo2.png', 5, 8, 8),
(3, 'seminar', 'kjfkdckzxkczxk', '2018-12-29', '20:00:00', '2018-12-29', '13:00:00', 'logo.png', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_superadmin` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `akses` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_acara`
--

CREATE TABLE `jenis_acara` (
  `idjenis_acara` int(11) NOT NULL,
  `jenis_acara` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_acara`
--

INSERT INTO `jenis_acara` (`idjenis_acara`, `jenis_acara`) VALUES
(1, 'Class, Training or Workshop'),
(2, 'Conference'),
(3, 'Seminar or Talk'),
(4, 'Tradeshow'),
(5, 'Camp, Trip or Retreat'),
(6, 'Game or Competition'),
(7, 'Meeting or Networking Event'),
(8, 'Tournament'),
(9, 'Screening');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_acara`
--

CREATE TABLE `kategori_acara` (
  `idkategori_acara` int(11) NOT NULL,
  `kategori_acara` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_acara`
--

INSERT INTO `kategori_acara` (`idkategori_acara`, `kategori_acara`) VALUES
(1, 'Sains & Teknologi'),
(2, 'Olahraga'),
(3, 'Travel & Outdoor'),
(4, 'Kerohanian'),
(5, 'Seni'),
(6, 'Musik'),
(7, 'Food & Drink'),
(8, 'Film, Media & Entertainment'),
(9, 'Fashion & Beauty'),
(10, 'Community & Culture'),
(11, 'Charity & Causes'),
(12, 'Business & Profesional');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_penyelenggara`
--

CREATE TABLE `kategori_penyelenggara` (
  `idkategori_penyelenggara` int(11) NOT NULL,
  `kategori_penyelenggara` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_penyelenggara`
--

INSERT INTO `kategori_penyelenggara` (`idkategori_penyelenggara`, `kategori_penyelenggara`) VALUES
(1, 'Lembaga'),
(2, 'ORMA'),
(3, 'UKM'),
(4, 'Himpunan'),
(5, 'BSO'),
(6, 'Komunitas');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_peserta`
--

CREATE TABLE `kategori_peserta` (
  `idkategori_peserta` int(11) NOT NULL,
  `kategori_peserta` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_peserta`
--

INSERT INTO `kategori_peserta` (`idkategori_peserta`, `kategori_peserta`) VALUES
(1, 'Mahasiswa AMIKOM'),
(2, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `kode` varchar(15) NOT NULL,
  `nim` char(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `waktu_mulai` date DEFAULT NULL,
  `jam_awal` time DEFAULT NULL,
  `waktu_selesai` date DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `status` enum('Sudah Bayar','Belum Bayar','Free') NOT NULL,
  `acara_id_acara` int(11) NOT NULL,
  `peserta_id_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`kode`, `nim`, `nama`, `waktu_mulai`, `jam_awal`, `waktu_selesai`, `jam_selesai`, `status`, `acara_id_acara`, `peserta_id_peserta`) VALUES
('EVT-2018-0001', '16.01.3783', 'Murti Retno Dewi', '2018-12-08', '09:00:00', '2018-12-08', '13:00:00', 'Free', 1, 1),
('EVT-2018-0002', '16.11.3783', 'David', '2018-12-22', '07:00:00', '2018-12-22', '10:00:00', '', 1, 1),
('EVT-2018-0003', '16.11.3783', 'Eda', '2018-12-26', '09:00:00', '2018-12-22', '15:00:00', '', 1, 1),
('EVT-2018-0004', '15.11.8994', 'Rafi', '2018-12-28', '13:00:00', '2018-07-28', '15:00:00', '', 1, 1),
('EVT-2018-0005', '15.11.9277', 'FEBRI FATAYATUN', '2018-12-26', '06:00:00', '2018-12-27', '12:00:00', 'Sudah Bayar', 1, 1),
('EVT-2018-0006', '16.02.9470', 'Sisi', '2018-12-29', '08:00:00', '2018-12-29', '10:00:00', 'Free', 1, 1),
('EVT-2018-0007', '16.01.3783', 'Murti Retno Dewi', '2018-12-05', '14:00:00', '2018-12-22', '05:00:00', 'Sudah Bayar', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggara`
--

CREATE TABLE `penyelenggara` (
  `id_penyelenggara` int(11) NOT NULL,
  `kategori_penyelenggara` int(11) NOT NULL,
  `nama_penyelenggara` varchar(30) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `deskripsi_penyelenggara` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `web_url` varchar(45) DEFAULT NULL,
  `ig_url` varchar(45) DEFAULT NULL,
  `tw_url` varchar(45) DEFAULT NULL,
  `fb_url` varchar(45) DEFAULT NULL,
  `youtube` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penyelenggara`
--

INSERT INTO `penyelenggara` (`id_penyelenggara`, `kategori_penyelenggara`, `nama_penyelenggara`, `username`, `email`, `password`, `deskripsi_penyelenggara`, `status`, `web_url`, `ig_url`, `tw_url`, `fb_url`, `youtube`) VALUES
(1, 3, 'BPC', '16.02.9470', 'admin@amikom.ac.id', '1234567', 'fdagrdfgndfm', 0, 'gvbhjk.com', 'manggar', 'dfgdfas', 'asdasd', 'komaamikom'),
(2, 2, 'BEM', 'admin', 'admin@gmail.com', '123456', 'BEM merupakan orma dalam bidang eksekutif', NULL, 'bemkm.or.id', 'fasdfdsf', 'sadsads', 'rgewgerfd', NULL),
(3, 3, 'AMCC', '16.02.9470', 'admin@gmail.com', 'wqewqd', '1212121', NULL, 'sadsadassa', 'sadsads', 'ssdsdfdds', 'asdasd', NULL),
(4, 3, 'Manggar', '15.11.8993', 'admin@gmail.com', 'ertyu', 'sdfdsfdsf', NULL, 'sabvdhs.com', 'fasdfdsf', 'dsfdsf', 'manggar', NULL),
(5, 3, 'KOMA', 'admin', 'admin@amikom.ac.id', 'admonn', 'Koma merupakan UKM keilmuan dalam bidang tekn', NULL, 'koma.or.id', 'komaamikom', 'komakom', 'komamikom', NULL),
(6, 3, 'AMO', '16.02.9458', 'murti.dewi@students.amikom.ac.', 'qwerty', 'sdfdsfdsf', NULL, 'amoamikom', 'sadsads', 'dfgdfas', 'rgewgerfd', NULL),
(7, 4, 'HMIF', 'admin', 'admin@gmail.com', '123456', 'qwertyuiopas', NULL, 'hmif.or.id', 'hmifamikom', 'hmifamikom', 'hmifamikom', NULL),
(8, 2, 'HIMMSI', '15.11.8993', 'admin@amikom.ac.id', 'dedede', 'tes tes', 0, 'himmsiamikom', 'himmsiamikom', 'himmsiamikom', 'himmsiamikom', 'bfhgf'),
(9, 2, 'ABBC', 'abbc', 'admin@amikom.ac.id', 'qwertyu', 'tes tes', 0, 'abbcamikom', 'abbcamikom', 'abbcamikom', 'abbcamikom', 'himmsiamikom'),
(10, 3, 'AFC', 'afc', 'afc@gmail.com', 'sesese', 'sdfdsfdsf', 0, 'afcamikom', 'afcamikom', 'afcamikom', 'afcamikom', 'adeeeeeee'),
(11, 4, 'Manggar', '16.02.9470', 'admin@amikom.ac.id', 'nbjhghcgf', 'hbhgvtfcyvhb', 0, 'manggar.ac.id', 'sxasas', 'sadsads', 'asdasd', 'amooo'),
(12, 3, 'AMCC', '15.11.8993', 'admin@amikom.ac.id', 'nbhnvb', 'jhvhgv', 0, 'jhnbjnb', 'jhbuhbuh', 'hghubhu', 'hbjhbhu', 'jhbjhb'),
(13, 3, 'Manggar', '15.11.8993', 'donytri86@gmail.com', 'hgfhgfhg', 'bnvhgfth', 0, 'nbvhgf', 'bvfhr', 'bhyf', 'hgvghf', 'jhgytf'),
(14, 4, 'Manggar', '16.02.9470', 'donytri86@gmail.com', 'ssasasa', 'asasa', 0, 'saasaada', 'ADDADAS', 'sasasas', 'dsdsdsds', 'adada'),
(15, 4, 'Manggar', '16.02.9470', 'donytri86@gmail.com', 'ssasasa', 'asasa', 0, 'saasaada', 'ADDADAS', 'sasasas', 'dsdsdsds', 'adada');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nim` char(11) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `kategori_peserta_idkategori_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nim`, `nama`, `no_telp`, `email`, `username`, `password`, `kategori_peserta_idkategori_peserta`) VALUES
(1, '16.02.9470', 'Murti Retno Dewi', '0812345678', 'admin@amikom.ac.id', 'admin', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `nama_tempat` varchar(30) DEFAULT NULL,
  `status` enum('Booking','Kosong') DEFAULT NULL,
  `acara_id_acara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`nama_tempat`, `status`, `acara_id_acara`) VALUES
('Ruang Cinema', 'Booking', 1),
('Ruang Citra 2', 'Kosong', 2),
('Ruang Citra 2', 'Booking', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `acara_id_acara` int(11) NOT NULL,
  `kategori_peserta_idkategori_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` enum('peserta','penyelenggara','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`,`kategori_acara_idkategori_acara`,`jenis_acara_idjenis_acara`,`penyelenggara_id_penyelenggara`),
  ADD KEY `fk_acara_kategori_acara1` (`kategori_acara_idkategori_acara`),
  ADD KEY `fk_acara_jenis_acara1` (`jenis_acara_idjenis_acara`),
  ADD KEY `fk_acara_penyelenggara1` (`penyelenggara_id_penyelenggara`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_superadmin`);

--
-- Indexes for table `jenis_acara`
--
ALTER TABLE `jenis_acara`
  ADD PRIMARY KEY (`idjenis_acara`);

--
-- Indexes for table `kategori_acara`
--
ALTER TABLE `kategori_acara`
  ADD PRIMARY KEY (`idkategori_acara`);

--
-- Indexes for table `kategori_penyelenggara`
--
ALTER TABLE `kategori_penyelenggara`
  ADD PRIMARY KEY (`idkategori_penyelenggara`);

--
-- Indexes for table `kategori_peserta`
--
ALTER TABLE `kategori_peserta`
  ADD PRIMARY KEY (`idkategori_peserta`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`kode`,`acara_id_acara`,`peserta_id_peserta`),
  ADD KEY `fk_acara_has_peserta_acara1` (`acara_id_acara`),
  ADD KEY `fk_acara_has_peserta_peserta1` (`peserta_id_peserta`);

--
-- Indexes for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
  ADD PRIMARY KEY (`id_penyelenggara`,`kategori_penyelenggara`),
  ADD KEY `fk_penyelenggara_kategori_penyelenggara1` (`kategori_penyelenggara`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`,`kategori_peserta_idkategori_peserta`),
  ADD KEY `fk_peserta_kategori_peserta1` (`kategori_peserta_idkategori_peserta`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`acara_id_acara`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`,`acara_id_acara`,`kategori_peserta_idkategori_peserta`),
  ADD KEY `fk_tiket_acara1` (`acara_id_acara`),
  ADD KEY `fk_tiket_kategori_peserta1` (`kategori_peserta_idkategori_peserta`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_superadmin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_acara`
--
ALTER TABLE `jenis_acara`
  MODIFY `idjenis_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kategori_acara`
--
ALTER TABLE `kategori_acara`
  MODIFY `idkategori_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kategori_penyelenggara`
--
ALTER TABLE `kategori_penyelenggara`
  MODIFY `idkategori_penyelenggara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori_peserta`
--
ALTER TABLE `kategori_peserta`
  MODIFY `idkategori_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
  MODIFY `id_penyelenggara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `acara`
--
ALTER TABLE `acara`
  ADD CONSTRAINT `fk_acara_jenis_acara1` FOREIGN KEY (`jenis_acara_idjenis_acara`) REFERENCES `jenis_acara` (`idjenis_acara`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_acara_kategori_acara1` FOREIGN KEY (`kategori_acara_idkategori_acara`) REFERENCES `kategori_acara` (`idkategori_acara`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_acara_penyelenggara1` FOREIGN KEY (`penyelenggara_id_penyelenggara`) REFERENCES `penyelenggara` (`id_penyelenggara`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `fk_acara_has_peserta_acara1` FOREIGN KEY (`acara_id_acara`) REFERENCES `acara` (`id_acara`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_acara_has_peserta_peserta1` FOREIGN KEY (`peserta_id_peserta`) REFERENCES `peserta` (`id_peserta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
  ADD CONSTRAINT `fk_penyelenggara_kategori_penyelenggara1` FOREIGN KEY (`kategori_penyelenggara`) REFERENCES `kategori_penyelenggara` (`idkategori_penyelenggara`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `fk_peserta_kategori_peserta1` FOREIGN KEY (`kategori_peserta_idkategori_peserta`) REFERENCES `kategori_peserta` (`idkategori_peserta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tempat`
--
ALTER TABLE `tempat`
  ADD CONSTRAINT `fk_tempat_acara1` FOREIGN KEY (`acara_id_acara`) REFERENCES `acara` (`id_acara`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `fk_tiket_acara1` FOREIGN KEY (`acara_id_acara`) REFERENCES `acara` (`id_acara`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tiket_kategori_peserta1` FOREIGN KEY (`kategori_peserta_idkategori_peserta`) REFERENCES `kategori_peserta` (`idkategori_peserta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
