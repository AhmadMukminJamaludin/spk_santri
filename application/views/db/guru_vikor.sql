-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 03:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guru_vikor`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `alamat` text,
  `agama` varchar(10) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `jk`, `alamat`, `agama`, `mapel`, `jabatan`, `telp`) VALUES
('1098.794', 'Prihatin Sri Teguh, SE.', 'Perempuan', 'Dempelmukti Rt 14 Rw 25 Muktiharjo Kidol', 'Islam', 'IPS', 'Kepala Sekolah', '081575827626'),
('1098.795', 'Sri Rejeki, S.Pd.', 'Perempuan', 'Pandansari VIII Rt34 Rw 8 Sambirejo\r\n', 'Islam', 'B.Inggris', 'UR.Kurikulum', '085799865837'),
('1098.796', 'Ir.Agus Suyanto', 'Laki-laki', 'Bangetayu Prasetyo Raya 79 Rt 4 Rw 6\r\n', 'Islam', 'IPA', 'Laboran', '081326351781'),
('1098.797', 'H.Haryono, S.Pd.', 'Laki-laki', 'Tambakboyo Rt 10 Rw 7 Tlogosari Kulon\r\n', 'Islam', 'PPKN', 'UR.Sarana Prasa', '081914453627'),
('1098.798', 'Joko Prasetyo Utomo, S.Pd.', 'Laki-laki', 'Pandanaran Rt 5 Rw 2 Karangawen\r\n', 'Islam', 'Penjaskes', 'UR.Kesiswaan, Wali Kelas 8A', '085640300151'),
('1098.799', 'Drs.Siti Rodliyah', 'Perempuan', 'Pandansari IX Rt 4 Rw 8 Sambirejo\r\n', 'Islam', 'PAI', 'UR.Humas, Wali Kelas 9B', '085641373736'),
('1098.800', 'Zalles Andreasi S, S.Pd', 'Perempuan', 'Kwaron I Rt 5 Rw 2 Bangetayu Kalon\r\n', 'Islam', 'BP/BK', 'Guru Pembimbing', '085226062085'),
('1098.801', 'Siti Muthiâ€™ah, S.Pd.', 'Perempuan', 'Plewan III/33 Rt 2 Rw 3 Siwalan\r\n', 'Islam', 'Bahasa Inggris, Seni Budaya', 'UR.TU Bag.Perpustakaan, Pustakawan, Wali Kelas 8B', '085641853069'),
('1098.802', 'Zakiyatul Fakiroh, S.Pd', 'Perempuan', 'Kokosan Raya No.11 A Rt 12 Rw 5\r\n', 'Islam', 'IPA, Seni Budaya', 'Laboran', '087831053895'),
('1098.803', 'Ahmad Ibrohim Permadi, S.Ag', 'Laki-laki', 'Banowati Selatan 254 B Rt 3 Rw 11', 'Islam', 'PAI', 'Wali Kelas 7B', '02470570399'),
('1098.804', 'Drs.Waljono,S.Pd', 'Laki-laki', 'Banjardowo Rt 3 Rw 4 Genuk', 'Islam', 'Matematika', '-', '085227759735'),
('1098.805', 'Rahmita Wardiyani Putri,S.S', 'Perempuan', 'Sembungharjo Permai Blok D 29 Rt 4 Rw 8\r\n', 'Islam', 'Bahasa Indonesia', '-', '085727457402'),
('1098.806', 'Masruri,S.Pd.I', 'Laki-laki', 'Baleromo Rt 4 Rw 5 Dempet Demak\r\n', 'Islam', 'PAI', 'Wali Kelas 9A', '085225788912'),
('1098.807', 'Muhammad Anas,S.Pd', 'Laki-laki', 'Pondok R.Patah Blok O/3 Rt 6 Rw 4\r\n', 'Islam', 'IPA, Prakarya', 'Laboran, Wali Kelas 9C', '081326526345'),
('1098.808', 'Diah Amalia,S.Pd', 'Perempuan', 'Dempel Barat Rt 2 Rw 8 Sawahbesar\r\n', 'Islam', 'Prakarya', 'Pustakawan', '081329244455'),
('1098.809', 'Dyah Ayu Octalina Sundari,S.Pd', 'Perempuan', 'Jl.Ranggowarsito Kp.Depo Indah Rt 6 Rw 3\r\n', 'Islam', 'Bahasa Jawa', '-', '089685443210'),
('1098.810', 'Alifia Syarifatul Jannah,S.Pd', 'Perempuan', 'Pandansari IX Rt 4 Rw 8 Sambirejo\r\n', 'Islam', 'Matematika', 'Wali Kelas 7A', '081249188481'),
('1098.811', 'Yasinta Lilik Nugraheni,S.Pd', 'Perempuan', 'Tambakboyo Rt 10 Rw 7 Tlogosari Kulon\r\n', 'Islam', 'Bahasa Indonesia', '-', '082133960431'),
('1098.812', 'Maya Dwi Setyaningsih,S.Pd', 'Perempuan', 'Jl.Pergiwati III Rt 3 Rw 6 Bulu Lor Semarang\r\n', 'Islam', 'IPS', 'UR.Tata Usaha Bagian Kesiswaan', '089680469811');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
`id_kriteria` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `c1` int(2) DEFAULT NULL,
  `c2` int(2) DEFAULT NULL,
  `c3` int(2) DEFAULT NULL,
  `c4` int(2) DEFAULT NULL,
  `c5` int(2) DEFAULT NULL,
  `c6` int(3) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `semester`, `tahun`) VALUES
(10, 'H.Haryono, S.Pd.', 5, 3, 3, 3, 4, 4, 'GASAL', '2018'),
(11, 'Joko Prasetyo Utomo, S.Pd.', 5, 5, 3, 4, 3, 4, 'GASAL', '2018'),
(12, 'Drs.Siti Rodliyah', 2, 2, 3, 3, 2, 3, 'GASAL', '2018'),
(13, 'Zalles Andreasi S, S.Pd', 4, 5, 3, 4, 3, 4, 'GASAL', '2018'),
(14, 'Siti Muthiâ€™ah, S.Pd.', 4, 5, 4, 4, 3, 4, 'GASAL', '2018'),
(15, 'Zakiyatul Fakiroh, S.Pd', 5, 3, 2, 3, 3, 4, 'GASAL', '2019'),
(16, 'H.Haryono, S.Pd.', 5, 3, 3, 3, 4, 4, 'GASAL', '2019'),
(17, 'Joko Prasetyo Utomo, S.Pd.', 5, 5, 3, 4, 3, 4, 'GASAL', '2019'),
(18, 'Drs.Siti Rodliyah', 2, 2, 3, 3, 2, 3, 'GASAL', '2019'),
(19, 'Zalles Andreasi S, S.Pd', 4, 5, 3, 4, 3, 4, 'GASAL', '2019'),
(20, 'Siti Muthiâ€™ah, S.Pd.', 4, 5, 4, 4, 3, 4, 'GASAL', '2019'),
(21, 'Zakiyatul Fakiroh, S.Pd', 5, 3, 2, 3, 3, 4, 'GASAL', '2019'),
(22, 'Prihatin Sri Teguh, SE.', 5, 4, 4, 4, 5, 4, 'GENAP', '2019'),
(24, 'Sri Rejeki, S.Pd.', 5, 4, 4, 4, 4, 4, 'GENAP', '2019'),
(25, 'Ir.Agus Suyanto', 4, 4, 3, 3, 3, 4, 'GENAP', '2019'),
(26, 'H.Haryono, S.Pd.', 5, 3, 3, 3, 4, 4, 'GENAP', '2019'),
(27, 'Joko Prasetyo Utomo, S.Pd.', 5, 5, 3, 4, 3, 4, 'GENAP', '2019'),
(28, 'Drs.Siti Rodliyah', 2, 2, 3, 3, 2, 3, 'GENAP', '2019'),
(29, 'Zalles Andreasi S, S.Pd', 4, 5, 3, 4, 3, 4, 'GENAP', '2019'),
(30, 'Siti Muthiâ€™ah, S.Pd.', 4, 5, 4, 4, 3, 4, 'GENAP', '2019'),
(32, 'Prihatin Sri Teguh, SE.', 5, 1, 1, 1, 1, 1, 'GASAL', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kriteria`
--

CREATE TABLE IF NOT EXISTS `nilai_kriteria` (
`id_bobot` int(4) NOT NULL,
  `w1` int(2) NOT NULL,
  `w2` int(2) NOT NULL,
  `w3` int(2) NOT NULL,
  `w4` int(2) NOT NULL,
  `w5` int(2) NOT NULL,
  `w6` int(3) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id_bobot`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `semester`, `tahun`) VALUES
(1, 5, 3, 5, 4, 2, 3, 'GASAL', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE IF NOT EXISTS `rangking` (
`id_rangking` int(4) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`id_rangking`, `nip`, `nilai`, `semester`, `tahun`) VALUES
(1, '04', '', 'GASAL', '2019'),
(2, '06', '', 'GASAL', '2019'),
(3, '07', '', 'GASAL', '2019'),
(4, '08', '', 'GASAL', '2019'),
(5, '09', '', 'GASAL', '2019'),
(6, '05', '', 'GASAL', '2019'),
(173, '1098.797', '0.07386363', 'GASAL', '2018'),
(174, '1098.798', '0', 'GASAL', '2018'),
(175, '1098.799', '0.84943181', 'GASAL', '2018'),
(176, '1098.800', '0.05681818', 'GASAL', '2018'),
(177, '1098.801', '0', 'GASAL', '2018'),
(178, '1098.794', '1', 'GASAL', '2018'),
(179, '1098.794', '0', 'GENAP', '2019'),
(180, '1098.795', '0.01587301', 'GENAP', '2019'),
(181, '1098.796', '0.78571428', 'GENAP', '2019'),
(182, '1098.797', '0.75396825', 'GENAP', '2019'),
(183, '1098.798', '0.62698412', 'GENAP', '2019'),
(184, '1098.799', '1', 'GENAP', '2019'),
(185, '1098.800', '0.66666666', 'GENAP', '2019'),
(186, '1098.801', '0.13095238', 'GENAP', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_users` int(1) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_user`, `username`, `password`) VALUES
(1, 'admin 2', 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
 ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
 ADD PRIMARY KEY (`id_rangking`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
MODIFY `id_kriteria` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
MODIFY `id_bobot` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
MODIFY `id_rangking` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_users` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
