-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Feb 2019 pada 15.52
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduan_siber`
--

CREATE TABLE `aduan_siber` (
  `id_aduan` int(11) NOT NULL,
  `id_pelapor` int(11) NOT NULL,
  `id_admin1` int(11) NOT NULL,
  `id_admin2` int(11) NOT NULL,
  `waktu_kejadian` date NOT NULL,
  `waktu_laporan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deskripsi_umum` text NOT NULL,
  `nama_ket` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `identitas_pemilik` varchar(50) NOT NULL,
  `bukti` text NOT NULL,
  `jenis_klasifikasi` enum('Account Compromise','Data Theft','Exploitation of Week Configuration','Exploitation of Week Network Architecture','Patched Software Exploitation','Network Penetration','Service Disruption','Spoofing or DNS Poisioning','Unauthorized System Access','Unintentional Information Exposure','Unpatched Vulnrable Software Exploitation','Website Defacement','Wireless Access Point Exploitaion','Kerentanan','Phising','indikator Serangan','Malware','Konten Negatif') NOT NULL,
  `analisis` text NOT NULL,
  `solusi` text NOT NULL,
  `ticket` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `terakhir_diupdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `id_pelapor` int(11) NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id_admin1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_2`
--
ALTER TABLE `admin_2`
  MODIFY `id_admin2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aduan_siber`
--
ALTER TABLE `aduan_siber`
  MODIFY `id_aduan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id_pelapor` int(11) NOT NULL AUTO_INCREMENT;
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
