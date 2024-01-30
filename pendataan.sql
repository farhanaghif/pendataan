-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2024 pada 01.12
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
  `id` int(11) NOT NULL,
  `kode_jenis_kasus` varchar(25) NOT NULL,
  `jenis_kasus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kasus`
--

INSERT INTO `jenis_kasus` (`id`, `kode_jenis_kasus`, `jenis_kasus`) VALUES
(4, '001', 'Kekerasan Fisik'),
(5, '002', 'Kekerasan Psikis'),
(6, '003', 'Kekerasan Seksual'),
(7, '004', 'Ekonomi'),
(8, '005', 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_anak`
--

CREATE TABLE `kasus_anak` (
  `id` int(11) NOT NULL,
  `no_registrasi` varchar(50) NOT NULL,
  `nama_korban` varchar(50) NOT NULL,
  `nik_korban` varchar(17) NOT NULL,
  `jenis_kelamin_korban` varchar(10) NOT NULL,
  `ttl_korban` varchar(50) NOT NULL,
  `umur_korban` int(11) NOT NULL,
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
  `umur_pelaku` int(11) NOT NULL,
  `hubungan_dengan_korban` varchar(50) NOT NULL,
  `alamat_pelaku` text NOT NULL,
  `pekerjaan_pelaku` varchar(25) NOT NULL,
  `kontak_pelaku` varchar(15) NOT NULL,
  `satgas` varchar(50) NOT NULL,
  `status_pengajuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasus_anak`
--

INSERT INTO `kasus_anak` (`id`, `no_registrasi`, `nama_korban`, `nik_korban`, `jenis_kelamin_korban`, `ttl_korban`, `umur_korban`, `kronologi_singkat`, `alamat`, `nama_wali_korban`, `nik_wali`, `kontak_korban`, `jenis_kasus`, `tanggal_kejadian`, `alamat_tkp`, `kecamatan`, `nama_pelaku`, `nik_pelaku`, `ttl_pelaku`, `umur_pelaku`, `hubungan_dengan_korban`, `alamat_pelaku`, `pekerjaan_pelaku`, `kontak_pelaku`, `satgas`, `status_pengajuan`) VALUES
(1, '001/F/UPTD-PKA/BJM/I/2023', 'Sultan Isya Mahta', '', 'Laki-Laki', 'Banjarmasin, 27-01-2016', 7, 'Korban dalam kecelakaan lalu lintas', 'Jl. Antasan Raden Gg. Harmoni No.4 RT 024 / RW 002 Kelurahan Teluk Tiram Kecamatan Banjarmasin Tengah Kota Banjarmasin', 'Unit Laka Lantas Polresta Banjarmasin', '-', '-', 'Lainnya', '2022-12-03', 'Jalan AMD Komplek Permata Regency Kecubung Raya RT 048 RW 003 Kelurahan Pemurus Dalam Kecamatan Banjarmasin Selatan Kota Banjarmasin', 'Banjarmasin Selatan', 'Nurrahman', '6371010810920016', 'Rantau, 08-10-1992', 31, 'Orang Lain', 'Jl. Amd Komplek Permata Regency Kecubung VII Blok C No.125 RT 048 RW 003 Kelurahan Pemurus Dalam Kecamatan Banjarmasin Selatan Kota Banjarmasin\r\n', 'Karyawan Honorer', '-', 'Hayati', 'Selesai'),
(2, '002/F/UPTD-PKA/BJM/II/2023', 'Afika Zahra', '', 'Perempuan', 'Banjarmasin, 07-06-2014', 9, 'Kekerasan fisik berupa cubitan, pukulan, dan kata-kata kasar dari pemilik panti tempat anak tinggal.', 'Jalan Kelayan A Gang Srikandi RT 020 / RW 002 Kelurahan Kelayan Dalam Kecamatan Banjarmasin Selatan Kota Banjarmasin', 'DPPKBPMPPA Kota Banjarbaru', '-', '-', 'Kekerasan Fisik', '0000-00-00', 'Griya Yatim Dhuafa Kelurahan Mentaos Kota Banjarbaru', 'Banjarmasin Tengah', '-', '-', '-', 0, 'Orang Lain', 'Mentaos', '-', '-', 'Markan', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_dewasa`
--

CREATE TABLE `kasus_dewasa` (
  `id` int(11) NOT NULL,
  `no_registrasi` varchar(50) NOT NULL,
  `nama_korban` varchar(50) NOT NULL,
  `nik_korban` varchar(17) NOT NULL,
  `jenis_kelamin_korban` varchar(10) NOT NULL,
  `ttl_korban` varchar(50) NOT NULL,
  `umur_korban` int(11) NOT NULL,
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
  `umur_pelaku` int(11) NOT NULL,
  `hubungan_dengan_korban` varchar(50) NOT NULL,
  `alamat_pelaku` text NOT NULL,
  `pekerjaan_pelaku` varchar(25) NOT NULL,
  `status_perkawinan_pelaku` varchar(25) NOT NULL,
  `kontak_pelaku` varchar(15) NOT NULL,
  `satgas` varchar(50) NOT NULL,
  `status_pengajuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasus_dewasa`
--

INSERT INTO `kasus_dewasa` (`id`, `no_registrasi`, `nama_korban`, `nik_korban`, `jenis_kelamin_korban`, `ttl_korban`, `umur_korban`, `kronologi_singkat`, `alamat`, `pekerjaan_korban`, `status_perkawinan_korban`, `kontak_korban`, `jenis_kasus`, `tanggal_kejadian`, `alamat_tkp`, `kecamatan`, `nama_pelaku`, `nik_pelaku`, `ttl_pelaku`, `umur_pelaku`, `hubungan_dengan_korban`, `alamat_pelaku`, `pekerjaan_pelaku`, `status_perkawinan_pelaku`, `kontak_pelaku`, `satgas`, `status_pengajuan`) VALUES
(1, '001/F/UPTD-PP/BJM/I/2023', 'Nirmala Sari, S.pd', '6371016712710009', 'Perempuan', 'Semarang, 27-12-1971', 52, 'Klien mendapatkan perlakuan kekerasan oleh anaknya sendiri, dikarenakan keinginan anaknya untuk tinggal bersama kakak dan ayahnya belum terpenuhi untuk tinggal bersama. Anak agresif dn mengalami OCD dan sering memaksa ibu untuk memenuhi semua keinginannya.', 'Jl. Veteran No.08 RT. 021 RW.001 Kelurahan Melayu Kecamatan Banjarmasin Tengah Kota Banjarmasin', 'Bekerja', 'Kawin', '0857-9672-6545', 'Kekerasan Fisik', '0000-00-00', 'Jl. Veteran No.08 RT. 021 RW.001 Kelurahan Melayu Kecamatan Banjarmasin Tengah Kota Banjarmasin', 'Banjarmasin Tengah', 'Edward Januar Gunarta', '637101540110003', 'Banjarmasin, 14-01-2010', 14, 'Anak Kandung', 'Jl. Veteran No.08 RT. 021 RW.001 Kelurahan Melayu Kecamatan Banjarmasin Tengah Kota Banjarmasin', 'Pelajar', 'Belum Kawin', '-', 'Hayati', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_verifikasi` int(11) NOT NULL,
  `foto_profil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nik`, `username`, `nama`, `role`, `alamat`, `telp`, `password`, `status_verifikasi`, `foto_profil`) VALUES
(1, '12345', 'admin', 'zidan', 'admin', 'Handil Bakti', '0812345', 'admin123', 1, 'logo-uniska-ok.png'),
(2, '23456', 'user1', 'user1', 'user', '-', '0823456', 'user1', 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `kode_wilayah` varchar(25) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL,
  `kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id`, `kode_wilayah`, `nama_wilayah`, `kecamatan`) VALUES
(5, '001', 'Banjarmasin Tengah', 'Banjarmasin Tengah'),
(6, '002', 'Banjarmasin Utara', 'Banjarmasin Utara'),
(7, '003', 'Banjarmasin Timur', 'Banjarmasin Timur'),
(8, '004', 'Banjarmasin Selatan', 'Banjarmasin Selatan'),
(9, '005', 'Banjarmasin Barat', 'Banjarmasin Barat');

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
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kasus_anak`
--
ALTER TABLE `kasus_anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `kasus_dewasa`
--
ALTER TABLE `kasus_dewasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
