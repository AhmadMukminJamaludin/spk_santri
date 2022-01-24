-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 10:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_santri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot`
--

CREATE TABLE `tabel_bobot` (
  `id_bobot` int(5) NOT NULL,
  `w1` float NOT NULL,
  `w2` float NOT NULL,
  `w3` float NOT NULL,
  `w4` float NOT NULL,
  `w5` float NOT NULL,
  `w6` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id_bobot`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`) VALUES
(1, 0.1, 0.25, 0.2, 0.15, 0.1, 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_kriteria` int(5) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `c1` int(2) NOT NULL,
  `c2` int(2) NOT NULL,
  `c3` int(2) NOT NULL,
  `c4` int(10) NOT NULL,
  `c5` int(2) NOT NULL,
  `c6` int(2) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `nisn`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `tahun`) VALUES
(1, '33115888', 18, 83, 4, 1500000, 6, 81, '2021'),
(2, '0026183277', 18, 82, 1, 1700000, 2, 85, '2021'),
(3, '0035590923', 18, 84, 0, 1200000, 1, 86, '2021'),
(4, '0038716496', 18, 80, 1, 2500000, 1, 81, '2021'),
(5, '0088727283', 18, 85, 10, 2250000, 5, 92, '2021'),
(6, '0039471501', 18, 90, 1, 1700000, 4, 91, '2021'),
(7, '0024044893', 19, 82, 5, 1900000, 4, 85, '2021'),
(8, '0033139709', 18, 86, 1, 2500000, 2, 90, '2021'),
(9, '0040234997', 17, 90, 0, 2600000, 1, 92, '2021'),
(10, '0020040617', 18, 84, 10, 1500000, 4, 91, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_normalisasi`
--

CREATE TABLE `tabel_normalisasi` (
  `nisn` int(10) NOT NULL,
  `rangking_aras` varchar(50) CHARACTER SET utf8 NOT NULL,
  `c1` int(20) NOT NULL,
  `c4` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_normalisasi`
--

INSERT INTO `tabel_normalisasi` (`nisn`, `rangking_aras`, `c1`, `c4`) VALUES
(1, '0.81022625935781', 0, 0),
(2, '0.70182029484926', 0, 0),
(3, '0.80688253646471', 0, 0),
(4, '0.59509484388046', 0, 0),
(5, '0.7763772945777', 0, 0),
(6, '0.72689870386264', 0, 0),
(7, '0.7243988522616', 0, 0),
(8, '0.6126203006843', 0, 0),
(9, '0.60375003113403', 0, 0),
(10, '0.87952566255914', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ranking`
--

CREATE TABLE `tabel_ranking` (
  `id_ranking` int(5) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_ranking`
--

INSERT INTO `tabel_ranking` (`id_ranking`, `nisn`, `nilai`, `tahun`) VALUES
(401, '33115888', '0.175', '2021'),
(402, '26183277', '0.097', '2021'),
(403, '35590923', '0.088', '2021'),
(404, '38716496', '0.064', '2021'),
(405, '88727283', '0.234', '2021'),
(406, '39471501', '0.128', '2021'),
(407, '24044893', '0.161', '2021'),
(408, '33139709', '0.084', '2021'),
(409, '40234997', '0.068', '2021'),
(410, '20040617', '0.241', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_santri`
--

CREATE TABLE `tabel_santri` (
  `nisn` int(20) NOT NULL,
  `nama_santri` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `asal_sekolah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_santri`
--

INSERT INTO `tabel_santri` (`nisn`, `nama_santri`, `jenis_kelamin`, `asal_sekolah`) VALUES
(20040617, 'NAFISSATUL MUKARROMAH', 'Perempuan', 'MA SAFINATUL HUDA SOWAN KIDUL KEDUNG JEPARA'),
(24044893, 'MUHAMMAD ABDUL AZZAM', 'Laki-laki', 'MA AL-HIKMAH 2 TERPADU BENDA SIRAMPOG BREBES'),
(26183277, 'AHMAD ALI MURTADHO', 'Laki-laki', 'MA NU NURUL HUDA SEMARANG'),
(33115888, 'AGIL SOFIA ISNAENI', 'Perempuan', 'MA MAARIF NU 1 KEMRANJEN BANYUMAS'),
(33139709, 'MUHAMMAD AHYUN IRSYADA', 'Laki-laki', 'MA RAUDLATUL ULUM GUYANGAN TRANGKIL PATI'),
(35590923, 'ALLISA NURUL AINI', 'Perempuan', 'MA NU ASSALAM TANJUNGKARANG JATI KUDUS'),
(38716496, 'CHINTIA AL FIANINGSIH', 'Perempuan', 'MA MINHAJUT THOLABAH PURBALINGGA'),
(39471501, 'LUTFI NURUL LAILIYAH', 'Perempuan', 'MA RIYADLOTUT THALABAH REMBANG'),
(40234997, 'MUHAMMAD SURYA HAMMAM', 'Laki-laki', 'MA NU TASYIWIQUTH THULLAB SALAFIYAH (TBS) KUDUS'),
(88727283, 'LISTIYANA FITRI ZULAIKHA', 'Perempuan', 'MA SAFINATUL HUDA SOWAN KIDUL KEDUNG JEPARA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tabel_normalisasi`
--
ALTER TABLE `tabel_normalisasi`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `tabel_ranking`
--
ALTER TABLE `tabel_ranking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indexes for table `tabel_santri`
--
ALTER TABLE `tabel_santri`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  MODIFY `id_bobot` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tabel_normalisasi`
--
ALTER TABLE `tabel_normalisasi`
  MODIFY `nisn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabel_ranking`
--
ALTER TABLE `tabel_ranking`
  MODIFY `id_ranking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `tabel_santri`
--
ALTER TABLE `tabel_santri`
  MODIFY `nisn` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
