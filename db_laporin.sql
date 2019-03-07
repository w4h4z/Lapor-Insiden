-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Mar 2019 pada 15.38
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laporin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_1`
--

CREATE TABLE `admin_1` (
  `id_admin1` int(11) NOT NULL,
  `nama_admin1` varchar(50) NOT NULL,
  `username_admin1` text NOT NULL,
  `password_admin1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_1`
--

INSERT INTO `admin_1` (`id_admin1`, `nama_admin1`, `username_admin1`, `password_admin1`) VALUES
(1, 'Admin Satu 1', 'admin11', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'Admin Satu 2', 'admin12', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_2`
--

CREATE TABLE `admin_2` (
  `id_admin2` int(11) NOT NULL,
  `nama_admin2` varchar(50) NOT NULL,
  `tipe` enum('d1','d2','d3','d4','p2') NOT NULL,
  `username_admin2` text NOT NULL,
  `password_admin2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_2`
--

INSERT INTO `admin_2` (`id_admin2`, `nama_admin2`, `tipe`, `username_admin2`, `password_admin2`) VALUES
(1, 'Admin Dua 1', 'd1', 'admin21', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'Admin Dua 2', 'd3', 'admin22', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduan_siber`
--

CREATE TABLE `aduan_siber` (
  `id_aduan` int(11) NOT NULL,
  `id_pelapor` int(11) NOT NULL,
  `id_admin1` int(11) DEFAULT NULL,
  `id_admin2` int(11) DEFAULT NULL,
  `waktu_kejadian` date NOT NULL,
  `waktu_laporan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deskripsi_umum` text NOT NULL,
  `nama_ket_aset` varchar(100) NOT NULL,
  `lokasi_aset` text NOT NULL,
  `identitas_pemilik_aset` varchar(50) NOT NULL,
  `bukti` text NOT NULL,
  `jenis_klasifikasi` enum('Account Compromise','Data Theft','Exploitation of Week Configuration','Exploitation of Week Network Architecture','Patched Software Exploitation','Network Penetration','Service Disruption','Spoofing or DNS Poisioning','Unauthorized System Access','Unintentional Information Exposure','Unpatched Vulnrable Software Exploitation','Website Defacement','Wireless Access Point Exploitaion','Kerentanan','Phising','indikator Serangan','Malware','Konten Negatif') DEFAULT NULL,
  `analisis` text,
  `solusi` text,
  `ticket` varchar(50) NOT NULL,
  `status` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `terakhir_diupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aduan_siber`
--

INSERT INTO `aduan_siber` (`id_aduan`, `id_pelapor`, `id_admin1`, `id_admin2`, `waktu_kejadian`, `waktu_laporan`, `deskripsi_umum`, `nama_ket_aset`, `lokasi_aset`, `identitas_pemilik_aset`, `bukti`, `jenis_klasifikasi`, `analisis`, `solusi`, `ticket`, `status`, `terakhir_diupdate`) VALUES
(1, 2, NULL, NULL, '2019-02-12', '2019-02-27 17:58:28', 'desc', 'nama aset', 'lokasi aset', 'pemilik aset', 'bukti', NULL, NULL, NULL, 'uhi1312312', '1', '2019-02-27 17:58:28'),
(3, 3, NULL, NULL, '2019-03-01', '2019-03-07 06:27:02', 'kn', 'jn', 'kmk', 'km', '5a4efa45eae9b-logo-bssn_665_3741.jpg', 'Malware', NULL, NULL, 'UMCTK', '1', '2019-03-07 06:27:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `id_pelapor` int(11) NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `no_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelapor`
--

INSERT INTO `pelapor` (`id_pelapor`, `nama_pelapor`, `no_telp`, `email`, `password`, `no_id`) VALUES
(2, 'Pelapor 1', '0861384716', 'wildanzhq@gmail.com', '76efb51a6f471449ccf1463e635053fc0bac7625', '18517541511'),
(3, 'Pelapor 2', '0861384716', 'rizaldi.wahaz@gmail.com', '0e3282ddd72fba2c5c302d30d18437c7d6823372', '985175415'),
(4, 'a', '1', 'a@a.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_1`
--
ALTER TABLE `admin_1`
  ADD PRIMARY KEY (`id_admin1`);

--
-- Indexes for table `admin_2`
--
ALTER TABLE `admin_2`
  ADD PRIMARY KEY (`id_admin2`);

--
-- Indexes for table `aduan_siber`
--
ALTER TABLE `aduan_siber`
  ADD PRIMARY KEY (`id_aduan`),
  ADD KEY `id_pelapor` (`id_pelapor`),
  ADD KEY `id_pelapor_2` (`id_pelapor`),
  ADD KEY `id_admin1` (`id_admin1`),
  ADD KEY `id_admin1_2` (`id_admin1`),
  ADD KEY `id_admin2` (`id_admin2`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_1`
--
ALTER TABLE `admin_1`
  MODIFY `id_admin1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_2`
--
ALTER TABLE `admin_2`
  MODIFY `id_admin2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `aduan_siber`
--
ALTER TABLE `aduan_siber`
  MODIFY `id_aduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id_pelapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aduan_siber`
--
ALTER TABLE `aduan_siber`
  ADD CONSTRAINT `aduan_siber_ibfk_1` FOREIGN KEY (`id_pelapor`) REFERENCES `pelapor` (`id_pelapor`),
  ADD CONSTRAINT `aduan_siber_ibfk_2` FOREIGN KEY (`id_admin2`) REFERENCES `admin_2` (`id_admin2`),
  ADD CONSTRAINT `aduan_siber_ibfk_3` FOREIGN KEY (`id_admin1`) REFERENCES `admin_1` (`id_admin1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
