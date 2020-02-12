-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Feb 2019 pada 16.06
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engineer_db_versi1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_data_staff`
--

CREATE TABLE `admin_data_staff` (
  `id` int(2) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `nama_panggilan` varchar(20) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_data_staff`
--

INSERT INTO `admin_data_staff` (`id`, `email`, `nama_lengkap`, `nama_panggilan`, `department`) VALUES
(3, 'testing2@gmail.com', NULL, NULL, NULL),
(4, 'testing3@gmail.com', NULL, NULL, NULL),
(5, 'testing4@gmail.com', 'clarisa', 'acha', 'c-level');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_staff`
--

CREATE TABLE `admin_staff` (
  `id` int(2) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_last_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_staff`
--

INSERT INTO `admin_staff` (`id`, `email`, `password`, `date_added`, `date_last_update`, `date_last_login`) VALUES
(1, 'testing@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-01-26 15:14:12', '2019-01-26 15:14:12', '2019-01-26 15:14:12'),
(2, 'testing1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-01-26 15:15:20', '2019-01-26 15:15:20', '2019-01-26 15:15:20'),
(3, 'testing2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-01-26 15:25:31', '2019-01-26 15:25:31', '2019-01-26 15:25:31'),
(4, 'testing3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-01-26 16:11:58', '2019-01-26 16:11:58', '2019-01-26 16:11:58'),
(5, 'testing4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-01-26 16:54:51', '2019-01-26 16:54:51', '2019-01-26 16:54:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id` int(5) NOT NULL,
  `name_company` varchar(50) DEFAULT NULL,
  `email_company` varchar(50) DEFAULT NULL,
  `contact_company` int(20) DEFAULT NULL,
  `address_company` text,
  `city_company` text,
  `province_company` text,
  `country_company` text,
  `logo_company` text,
  `description_company` text,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id`, `name_company`, `email_company`, `contact_company`, `address_company`, `city_company`, `province_company`, `country_company`, `logo_company`, `description_company`, `date_added`) VALUES
(1, '1212', 'brama@gmail.com', 12, '12', '12', '12', '12', '12', '12', '2019-01-27 11:20:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_request`
--

CREATE TABLE `job_request` (
  `id` int(3) NOT NULL,
  `namaperusahaan` varchar(100) NOT NULL,
  `kualifikasi` varchar(50) NOT NULL,
  `bidang_pekerjaan` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `job_request`
--

INSERT INTO `job_request` (`id`, `namaperusahaan`, `kualifikasi`, `bidang_pekerjaan`, `deskripsi`) VALUES
(0, 'asda', 'informatika', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` int(5) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `kontak` varchar(25) DEFAULT NULL,
  `kualifikasi` varchar(50) DEFAULT NULL,
  `Bidang` enum('PRO','SA','NA','KERP','GD','KONS','ProyekPembangunan','IK','PB','SKP','ISD','PM','PengoperasianMesin','PKM','ProsesManufaktur','STMM') DEFAULT NULL,
  `gaji` varchar(50) DEFAULT NULL,
  `curriculum_vitae` text,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_vacancy`
--

CREATE TABLE `job_vacancy` (
  `id` int(10) NOT NULL,
  `id_company` int(5) DEFAULT NULL,
  `name_company` varchar(100) DEFAULT NULL,
  `address_company` text,
  `logo_company` text,
  `deskripsi_lowongan` text,
  `bidang_lowongan` text,
  `persyaratan_lowongan` text,
  `gaji_lowongan` text,
  `jumlah_lowongan` int(10) DEFAULT NULL,
  `batas_lowongan` date DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `job_vacancy`
--

INSERT INTO `job_vacancy` (`id`, `id_company`, `name_company`, `address_company`, `logo_company`, `deskripsi_lowongan`, `bidang_lowongan`, `persyaratan_lowongan`, `gaji_lowongan`, `jumlah_lowongan`, `batas_lowongan`, `date_added`) VALUES
(1, 12, '12', '12', '12', '12', '12', '12', '12', 12, '2019-01-09', '2019-01-27 11:21:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_data_staff`
--
ALTER TABLE `admin_data_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_staff`
--
ALTER TABLE `admin_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_staff`
--
ALTER TABLE `admin_staff`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
