-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2024 pada 04.17
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kasus`
--

CREATE TABLE `jenis_kasus` (
  `id` int(25) NOT NULL,
  `kode_jenis_kasus` varchar(25) NOT NULL,
  `jenis_kasus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_anak`
--

CREATE TABLE `kasus_anak` (
  `id` int(25) NOT NULL,
  `no_registrasi` varchar(50) NOT NULL,
  `nama_korban` varchar(50) NOT NULL,
  `nik_korban` varchar(17) NOT NULL,
  `jenis_kelamin_korban` varchar(10) NOT NULL,
  `ttl_korban` varchar(50) NOT NULL,
  `umur_korban` int(5) NOT NULL,
  `kronologi_singkat` text NOT NULL,
  `alamat` text NOT NULL,
  `nama_wali_korban` varchar(50) NOT NULL,
  `nik_wali` varchar(17) NOT NULL,
  `kontak_korban` varchar(15) NOT NULL,
  `jenis_kasus` varchar(25) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `alamat_tkp` text NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `nama_pelaku` varchar(50) NOT NULL,
  `nik_pelaku` varchar(17) NOT NULL,
  `ttl_pelaku` varchar(50) NOT NULL,
  `umur_pelaku` int(5) NOT NULL,
  `hubungan_dengan_korban` varchar(50) NOT NULL,
  `alamat_pelaku` text NOT NULL,
  `pekerjaan_pelaku` varchar(25) NOT NULL,
  `kontak_pelaku` varchar(15) NOT NULL,
  `satgas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasus_anak`
--

INSERT INTO `kasus_anak` (`id`, `no_registrasi`, `nama_korban`, `nik_korban`, `jenis_kelamin_korban`, `ttl_korban`, `umur_korban`, `kronologi_singkat`, `alamat`, `nama_wali_korban`, `nik_wali`, `kontak_korban`, `jenis_kasus`, `tanggal_kejadian`, `alamat_tkp`, `kecamatan`, `nama_pelaku`, `nik_pelaku`, `ttl_pelaku`, `umur_pelaku`, `hubungan_dengan_korban`, `alamat_pelaku`, `pekerjaan_pelaku`, `kontak_pelaku`, `satgas`) VALUES
(4, '001', 'Andri', '012345', 'Laki-Laki', 'Banjarmasin, 01-01-2001', 24, 'Eksploitasi', 'Kayu Tangi', 'Indra', '023456', '0812345', 'Ekonomi', '2024-01-01', 'Kayu Tangi', 'Banjarmasin Timur', 'Rahmat', '034567', 'Banjarmasin, 01-01-1991', 44, 'Ayah Angkat', 'Kayu Tangi', 'Swasta', '08234567', 'Yandi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_dewasa`
--

CREATE TABLE `kasus_dewasa` (
  `id` int(25) NOT NULL,
  `no_registrasi` varchar(50) NOT NULL,
  `nama_korban` varchar(50) NOT NULL,
  `nik_korban` varchar(17) NOT NULL,
  `jenis_kelamin_korban` varchar(10) NOT NULL,
  `ttl_korban` varchar(50) NOT NULL,
  `umur_korban` int(5) NOT NULL,
  `kronologi_singkat` text NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan_korban` varchar(25) NOT NULL,
  `status_perkawinan_korban` varchar(20) NOT NULL,
  `kontak_korban` varchar(15) NOT NULL,
  `jenis_kasus` varchar(25) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `alamat_tkp` text NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `nama_pelaku` varchar(50) NOT NULL,
  `nik_pelaku` varchar(17) NOT NULL,
  `ttl_pelaku` varchar(50) NOT NULL,
  `umur_pelaku` int(5) NOT NULL,
  `hubungan_dengan_korban` varchar(50) NOT NULL,
  `alamat_pelaku` text NOT NULL,
  `pekerjaan_pelaku` varchar(25) NOT NULL,
  `status_perkawinan_pelaku` varchar(25) NOT NULL,
  `kontak_pelaku` varchar(15) NOT NULL,
  `satgas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `id` int(25) NOT NULL,
  `kode_pelapor` varchar(50) NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `nik_pelapor` int(17) NOT NULL,
  `hubungan_dengan_korban` varchar(50) NOT NULL,
  `alamat_pelapor` text NOT NULL,
  `kontak_pelapor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(25) NOT NULL,
  `kode_wilayah` varchar(25) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL,
  `kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_kasus`
--
ALTER TABLE `jenis_kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasus_anak`
--
ALTER TABLE `kasus_anak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasus_dewasa`
--
ALTER TABLE `kasus_dewasa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kasus`
--
ALTER TABLE `jenis_kasus`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kasus_anak`
--
ALTER TABLE `kasus_anak`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kasus_dewasa`
--
ALTER TABLE `kasus_dewasa`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
