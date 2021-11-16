-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2020 pada 13.29
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `id_bobot` int(4) NOT NULL,
  `w1` float NOT NULL,
  `w2` float NOT NULL,
  `w3` float NOT NULL,
  `w4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot_kriteria` (`id_bobot`, `w1`, `w2`, `w3`, `w4`) VALUES
(1, 0.3, 0.3, 0.2, 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(4) NOT NULL,
  `nis` varchar(16) NOT NULL,
  `c1` int(2) DEFAULT NULL,
  `c2` int(2) DEFAULT NULL,
  `c3` int(2) DEFAULT NULL,
  `c4` int(2) DEFAULT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nis`, `c1`, `c2`, `c3`, `c4`, `semester`, `tahun`) VALUES
(37, '1044', 78, 78, 97, 90, 'GASAL', '2019'),
(38, '1110', 78, 77, 95, 50, 'GASAL', '2019'),
(39, '1123', 79, 79, 90, 60, 'GASAL', '2019'),
(40, '1136', 87, 88, 89, 80, 'GASAL', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rangking`
--

CREATE TABLE `rangking` (
  `id_rangking` int(4) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rangking`
--

INSERT INTO `rangking` (`id_rangking`, `nis`, `nilai`, `semester`, `tahun`) VALUES
(1, '1044', 'NAN', 'GASAL', '2020'),
(142, '1044', '0.31', 'GASAL', '2019'),
(143, '1110', '0.256', 'GASAL', '2019'),
(144, '1123', '0.281', 'GASAL', '2019'),
(145, '1136', '0.341', 'GASAL', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `alamat` text,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jk`, `alamat`, `kelas`) VALUES
('1044', 'FENNY ANGGITA TANIA SARI', 'Perempuan', 'Baleromo Rt 4 Rw 5 Dempet Demak\r\n', 'V A'),
('1110', 'MUHAMMAD GILANG PUTRA', 'Laki-laki', 'Pondok R.Patah Blok O/3 Rt 6 Rw 4\r\n', 'V A'),
('1123', 'WAHYU ANDI PUTRA PURA', 'Laki-laki', 'Dempel Barat Rt 2 Rw 8 Sawahbesar\r\n', 'V A'),
('1136', 'AISYAH ZAHRATU JANNAH', 'Perempuan', 'Jl.Ranggowarsito Kp.Depo Indah Rt 6 Rw 3\r\n', 'V A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(1) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama_user`, `username`, `password`) VALUES
(1, 'admin 2', 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id_rangking`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  MODIFY `id_bobot` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id_rangking` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
