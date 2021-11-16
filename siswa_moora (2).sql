-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Feb 2020 pada 10.42
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siswa_moora`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_kriteria`
--

CREATE TABLE IF NOT EXISTS `bobot_kriteria` (
  `id_bobot` int(4) NOT NULL AUTO_INCREMENT,
  `w1` float NOT NULL,
  `w2` float NOT NULL,
  `w3` float NOT NULL,
  `w4` float NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `bobot_kriteria`
--

INSERT INTO `bobot_kriteria` (`id_bobot`, `w1`, `w2`, `w3`, `w4`) VALUES
(1, 0.3, 0.3, 0.2, 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(4) NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) NOT NULL,
  `c1` int(2) DEFAULT NULL,
  `c2` int(2) DEFAULT NULL,
  `c3` int(2) DEFAULT NULL,
  `c4` int(2) DEFAULT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  PRIMARY KEY (`id_kriteria`),
  KEY `nis` (`nis`),
  KEY `nis_2` (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nis`, `c1`, `c2`, `c3`, `c4`, `semester`, `tahun`) VALUES
(37, '1044', 78, 78, 97, 100, 'GASAL', '2019'),
(38, '1110', 78, 77, 95, 50, 'GASAL', '2019'),
(39, '1123', 79, 79, 90, 50, 'GASAL', '2019'),
(40, '1136', 87, 88, 89, 75, 'GASAL', '2019'),
(43, '1137', 84, 84, 100, 100, 'GASAL', '2019'),
(44, '1138', 84, 83, 99, 100, 'GASAL', '2019'),
(45, '1139', 80, 81, 93, 50, 'GASAL', '2019'),
(46, '1141', 83, 83, 95, 50, 'GASAL', '2019'),
(47, '1142', 92, 91, 100, 100, 'GASAL', '2019'),
(48, '1143', 85, 88, 96, 75, 'GASAL', '2019'),
(50, '1144', 84, 85, 99, 100, 'GASAL', '2019'),
(51, '1145', 79, 80, 100, 100, 'GASAL', '2019'),
(52, '1146', 84, 85, 97, 100, 'GASAL', '2019'),
(53, '1147', 80, 80, 90, 100, 'GASAL', '2019'),
(54, '1149', 87, 87, 93, 100, 'GASAL', '2019'),
(55, '1150', 78, 79, 94, 100, 'GASAL', '2019'),
(56, '1151', 84, 81, 94, 100, 'GASAL', '2019'),
(57, '1152', 84, 84, 100, 100, 'GASAL', '2019'),
(58, '1153', 84, 85, 100, 100, 'GASAL', '2019'),
(59, '1154', 86, 86, 100, 100, 'GASAL', '2019'),
(60, '1157', 81, 81, 98, 100, 'GASAL', '2019'),
(61, '1158', 82, 80, 99, 100, 'GASAL', '2019'),
(62, '1159', 84, 84, 98, 100, 'GASAL', '2019'),
(63, '1160', 86, 87, 99, 100, 'GASAL', '2019'),
(64, '1162', 84, 83, 98, 100, 'GASAL', '2019'),
(65, '1164', 83, 86, 97, 100, 'GASAL', '2019'),
(66, '1165', 88, 87, 97, 75, 'GASAL', '2019'),
(67, '1166', 84, 84, 92, 75, 'GASAL', '2019'),
(68, '1167', 80, 80, 93, 75, 'GASAL', '2019'),
(69, '1168', 84, 87, 99, 100, 'GASAL', '2019'),
(70, '1169', 79, 79, 93, 100, 'GASAL', '2019'),
(71, '1170', 88, 87, 96, 100, 'GASAL', '2019'),
(72, '1171', 89, 87, 92, 100, 'GASAL', '2019'),
(73, '1172', 79, 82, 97, 100, 'GASAL', '2019'),
(74, '1174', 83, 83, 98, 100, 'GASAL', '2019'),
(75, '1348', 84, 83, 97, 100, 'GASAL', '2019'),
(76, '1349', 83, 83, 96, 100, 'GASAL', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rangking`
--

CREATE TABLE IF NOT EXISTS `rangking` (
  `id_rangking` int(4) NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  PRIMARY KEY (`id_rangking`),
  KEY `nis` (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=750 ;

--
-- Dumping data untuk tabel `rangking`
--

INSERT INTO `rangking` (`id_rangking`, `nis`, `nilai`, `semester`, `tahun`) VALUES
(1, '1044', 'NAN', 'GASAL', '2020'),
(713, '1044', '0.094', 'GASAL', '2019'),
(714, '1110', '0.077', 'GASAL', '2019'),
(715, '1123', '0.081', 'GASAL', '2019'),
(716, '1136', '0.1', 'GASAL', '2019'),
(717, '1137', '0.101', 'GASAL', '2019'),
(718, '1138', '0.1', 'GASAL', '2019'),
(719, '1139', '0.081', 'GASAL', '2019'),
(720, '1141', '0.084', 'GASAL', '2019'),
(721, '1142', '0.109', 'GASAL', '2019'),
(722, '1143', '0.096', 'GASAL', '2019'),
(723, '1144', '0.101', 'GASAL', '2019'),
(724, '1145', '0.095', 'GASAL', '2019'),
(725, '1146', '0.102', 'GASAL', '2019'),
(726, '1147', '0.098', 'GASAL', '2019'),
(727, '1149', '0.105', 'GASAL', '2019'),
(728, '1150', '0.096', 'GASAL', '2019'),
(729, '1151', '0.101', 'GASAL', '2019'),
(730, '1152', '0.101', 'GASAL', '2019'),
(731, '1153', '0.101', 'GASAL', '2019'),
(732, '1154', '0.103', 'GASAL', '2019'),
(733, '1157', '0.098', 'GASAL', '2019'),
(734, '1158', '0.097', 'GASAL', '2019'),
(735, '1159', '0.102', 'GASAL', '2019'),
(736, '1160', '0.103', 'GASAL', '2019'),
(737, '1162', '0.101', 'GASAL', '2019'),
(738, '1164', '0.102', 'GASAL', '2019'),
(739, '1165', '0.097', 'GASAL', '2019'),
(740, '1166', '0.096', 'GASAL', '2019'),
(741, '1167', '0.089', 'GASAL', '2019'),
(742, '1168', '0.102', 'GASAL', '2019'),
(743, '1169', '0.097', 'GASAL', '2019'),
(744, '1170', '0.105', 'GASAL', '2019'),
(745, '1171', '0.108', 'GASAL', '2019'),
(746, '1172', '0.097', 'GASAL', '2019'),
(747, '1174', '0.1', 'GASAL', '2019'),
(748, '1348', '0.101', 'GASAL', '2019'),
(749, '1349', '0.1', 'GASAL', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `alamat` text,
  `kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jk`, `alamat`, `kelas`) VALUES
('1044', 'FENNY ANGGITA TANIA SARI', 'Perempuan', 'Cikrapyak\r\n', 'V A'),
('1110', 'MUHAMMAD GILANG PUTRA', 'Laki-laki', 'Kaligawe', 'V A'),
('1123', 'WAHYU ANDI PUTRA PURA', 'Laki-laki', 'Cikrapyak III/ No. 66\r\n', 'V A'),
('1136', 'AISYAH ZAHRATU JANNAH', 'Perempuan', 'Raden Patah Kp. Bedug 176A', 'V A'),
('1137', 'AISYFA GIZELA', 'Perempuan', 'Sidoluhur XIV / 12', 'V A'),
('1138', 'AMANDA CAHYA AURELIA', 'Perempuan', 'Murti Caphira VIII No. 38', 'V A'),
('1139', 'ANGGUN ALYA VIONA', 'Perempuan', 'Kp. Ngablak Kidul 007 / 008', 'V A'),
('1141', 'ATHA ZAHRATUL AZKHIYA', 'Perempuan', 'Murti Pesona II Muktiharjo ', 'V A'),
('1142', 'CINTA AULIA AFRIANSYAH', 'Perempuan', 'Jalan Emas VI / 12 Griya Dempel Baru  ', 'V A'),
('1143', 'CHIARA DEAN FATHI', 'Perempuan', 'Karang Anyar 007 / 012', 'V A'),
('1144', 'DEWI ANGGRAENI S. A.', 'Perempuan', 'Malangsari 1/ 12', 'V A'),
('1145', 'DHAVIN MUSNAFFA', 'Laki-laki', 'Kembang Jeruk', 'V A'),
('1146', 'DIANDRA AJENG KOSIYAH', 'Laki-laki', 'Dusun Dotoq', 'V A'),
('1147', 'DIMAS MUHAMMAD REYHI', 'Laki-laki', 'Parang Kusumo XI / 7', 'V A'),
('1149', 'EZRA FAIQ AL BANI', 'Laki-laki', 'Parang Baris VII / 20', 'V A'),
('1150', 'FIRZA HUTAMA ZULFIKAR', 'Laki-laki', 'Parang Kusumo Raya No. 22', 'V A'),
('1151', 'HAFIDZ NUR WAHYUDI', 'Laki-laki', 'Pringgondani II Bangetayu', 'V A'),
('1152', 'ILHAM BRIAN SAPUTRA', 'Laki-laki', 'Jl. Murti Pesona II / 50', 'V A'),
('1153', 'JONATHAN IATSA HEROKI', 'Laki-laki', 'Jl. Sidoluhur I / 67', 'V A'),
('1154', 'KINANTI GAKUH AYU', 'Perempuan', 'Jl. Widuri III / 002/ 008', 'V A'),
('1157', 'MIFTAKHUL MUJIB', 'Laki-laki', 'Tambak Boyo 010 / 007', 'V A'),
('1158', 'MOCHAMMAD ANDRE ARSHI', 'Laki-laki', 'Bledak Kantil VI No. 67', 'V A'),
('1159', 'MUHAMMAD RAYHAN ALFI', 'Laki-laki', 'Karang Anyar 010 / 013', 'V A'),
('1160', 'MUNAWAROH ', 'Perempuan', 'Karang Ingas 003 / 007', 'V A'),
('1162', 'NAJWA SYIFFA ARDINA', 'Perempuan', 'Bangetayu Wetan 001 / 005', 'V A'),
('1164', 'NATASYA DIAN MAHARANI', 'Perempuan', 'Parang Kembang VIII', 'V A'),
('1165', 'NAZWA AULIA ZAHRA', 'Perempuan', 'Gondorejo 006 / 011', 'V A'),
('1166', 'PRAMESTI SUCI ANINDRA', 'Perempuan', 'Bledak Kantil IV / 33', 'V A'),
('1167', 'RAHMAT ALDI', 'Laki-laki', 'Tambak Boyo 005 / 008', 'V A'),
('1168', 'RATWA AZIZAH', 'Perempuan', 'Jl. Dempel Selatan II 004 / 016', 'V A'),
('1169', 'RASYA ARDIAN PRADITYA', 'Laki-laki', 'Jl. Dempel Intan IV Kav. 337', 'V A'),
('1170', 'RIZKI NUR RAMADHAN', 'Laki-laki', 'Jl. Bedangan 470 / 001 / 002', 'V A'),
('1171', 'SALMA SALSABILA RAMAD', 'Perempuan', 'Karang Ingas Muktiharjo Kidul', 'V A'),
('1172', 'TAHSILUS SA''ADAH', 'Perempuan', 'Karang Ingas 003 / 007', 'V A'),
('1174', 'ZAHRA EMBUN LARISSA ', 'Perempuan', 'Jl. Parang Kusumo V / 22', 'V A'),
('1348', 'MUHAMMAD ROONEY ALFI', 'Laki-laki', 'Jl. Seruni I 009/ 010 No. 24', 'V A'),
('1349', 'ELLEN CALLISATA PUTRI', 'Perempuan', 'Dusun Pasuruhan 001 /001', 'V A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(1) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama_user`, `username`, `password`) VALUES
(1, 'admin 2', 'admin', '12345');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rangking`
--
ALTER TABLE `rangking`
  ADD CONSTRAINT `rangking_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
