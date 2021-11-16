-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2021 pada 09.32
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_bobot`
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
-- Dumping data untuk tabel `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id_bobot`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`) VALUES
(1, 0.1, 0.25, 0.2, 0.15, 0.1, 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kriteria`
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
-- Dumping data untuk tabel `tabel_kriteria`
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
-- Struktur dari tabel `tabel_ranking`
--

CREATE TABLE `tabel_ranking` (
  `id_ranking` int(5) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_ranking`
--

INSERT INTO `tabel_ranking` (`id_ranking`, `nisn`, `nilai`, `tahun`) VALUES
(381, '33115888', '0.175', '2021'),
(382, '26183277', '0.097', '2021'),
(383, '35590923', '0.088', '2021'),
(384, '38716496', '0.064', '2021'),
(385, '88727283', '0.234', '2021'),
(386, '39471501', '0.128', '2021'),
(387, '24044893', '0.161', '2021'),
(388, '33139709', '0.084', '2021'),
(389, '40234997', '0.068', '2021'),
(390, '20040617', '0.241', '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_santri`
--

CREATE TABLE `tabel_santri` (
  `nisn` int(20) NOT NULL,
  `nama_santri` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `asal_sekolah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_santri`
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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indeks untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tabel_ranking`
--
ALTER TABLE `tabel_ranking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indeks untuk tabel `tabel_santri`
--
ALTER TABLE `tabel_santri`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  MODIFY `id_bobot` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tabel_ranking`
--
ALTER TABLE `tabel_ranking`
  MODIFY `id_ranking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT untuk tabel `tabel_santri`
--
ALTER TABLE `tabel_santri`
  MODIFY `nisn` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
